<?php					
	$con=mysql_connect("localhost","root","");
    mysql_select_db("poshakh",$con);
	$cid==$_SESSION['cid'];
	$result=mysql_query("select * from customer where cust_id=".$id);
	$row=mysql_fetch_assoc($result) or die(mysql_error());
	echo "<h2 style='align:centre'> Product Details</h2>";
	echo "<body style='margin-top:100px; margin-left:500px;'>";
	echo "<link rel='stylesheet' href='input.css'>";
	echo "<form method=POST action='u_cust.php'"
	echo "Customer Name:<input type=text name=pro_name class=input placeholder='Product name' value='".$row[1]."'><br>";
	echo "Customer Email:<input type=text name=pro_name class=input placeholder='Product name' value='".$row[2]."'><br>";
	echo "Customer Phone no:<input type=text name=pro_name class=input placeholder='Product name' value='".$row[3]."'><br>";
	echo "Customer Gender:<input type=radio name=t5 style='margin-left:70px;' value=male required>Male<input type=radio name=t5 style='margin-left:50px;' value=female required>Female<br>";
	echo "Customer Address:<input type=text name=pro_name class=input placeholder='Product name' value='".$row[6]."'><br>";
	echo "<input type=submit value=Update name=click class=submitbtn style='width40%; margin-left:50px; margin-top:10px'>";
	echo "</form>";
	echo "</body>";
?>