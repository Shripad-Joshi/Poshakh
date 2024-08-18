
<h2 style='align:centre'> Presonal Details</h2>
<body style='margin-top:100px; margin-left:500px;'>
<link rel='stylesheet' href='input.css'>
<form method=POST action='u_cust.php'>
Customer Name:<input type=text name=name style='margin-left:27px' class=input value=<?php $con=mysql_connect("localhost","root",""); mysql_select_db("poshakh",$con);	session_start();	$id=$_SESSION['cid'];	$result=mysql_query("select * from customer where cust_id=".$id); $row=mysql_fetch_array($result) or die(mysql_error());?>
><br>
Customer Email:<input type=text name=email style='margin-left:27px' class=input value=<?php $row[2]; ?>><br>
Customer Phone no:<input type=text name=ph_no class=input value=<?php $row[3]; ?>><br>
Customer Gender:<input type=radio name=gen style='margin-left:30px;' value=male required>Male<input type=radio name=gen style='margin-left:50px;' value=female required>Female<br>
Customer Address:<input type=text style='margin-left:10px' name=addr class=input value=<?php $row[6]; ?>><br>
<input type=submit value=Update name=click class=submitbtn style='width40%; margin-left:50px; margin-top:10px'>
</form>
</body>