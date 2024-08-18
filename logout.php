<?php
session_start();
$_SESSION['cust_name']="";
$_SESSION['log']="logout";
header("location:Home.php");				
?>