<?php
$id=$_GET['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("poshakh",$con);
$sql="delete from bill where bill_id=".$id;
$res=mysql_query($sql);
if($res)
	header("location:view_pro.php");
?>