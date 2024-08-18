<?php 
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
    $result = mysql_query("select * from company",$con);


echo "<html>";
echo "<body>";
echo "<table border=1>";
echo "<tr>";
echo "<th> Company ID</th>";
echo "<th> Company Name </th>";
echo "<th> Company city </th>";
echo "<th> Company state </th>";
echo "<th> Edit  </th>";
echo "<th> Delete </th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
    $CID = $row['c_id'];
    $CName = $row['c_name'];
    $CCity = $row['c_city'];
    $CState = $row['c_state'];
	echo "<tr>";
	echo "<td><?php echo $CID ?></td>";
	echo "<td><?php echo $CName ?></td>";
	echo "<td><?php echo $CCity ?></td>";
	echo "<td><?php echo $CState ?></td>";
	echo "<td><a href='edit.php?GetID='<?php echo $CID '?>Edit</a></td>";
	echo "<td><a href='delete.php?Del=<?php echo $CID '?>Delete</a></td>";
	echo "</tr>";        
}  
echo "</table>";
echo "</body>";
echo "</html>";
mysql_close($con);
?>