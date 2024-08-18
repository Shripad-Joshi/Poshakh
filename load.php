<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	session_start();
	$_SESSION['table_name']=$_POST['table'];
	$table=$_POST['table'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
    echo "<html>";
	echo "<body>";
	echo "<table border=1 style='margin-left:200px; margin-top:50px'>";
	echo "<tr>";
	$result = mysql_query("select * from ".$table,$con);
	$no_c=mysql_num_fields($result);
	$i=0;
	for($i=0;$i<$no_c;$i++)
	{
		echo "<th>".mysql_field_name($result,$i)."</th>";
	}
	echo "</tr>";
	while($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		for($i=0;$i<$no_c;$i++)
		{
			$f_name=mysql_field_name($result,$i);
			echo "<td>".$row[$f_name]."</td>";
		}
		$ID=mysql_field_name($result,0);
		echo "</tr>";        
	}  
	echo "</table>";
	echo "<form method=POST action=insert.php>";
	echo "<input type=submit value=Insert style='margin-left:620px; margin-top:10px'>";
	echo "</form>";
	echo "</body>";
	echo "</html>";
	mysql_close($con);
}
?>