<?php
$pay=$_POST['pay'];
$qua=$_POST['quantity'];
session_start();
$_SESSION['pay']=$pay;
$_SESSION['qua']=$qua;
if($pay=="credit")
	header("location:card_detail.php");
else if($pay=="debit")
	header("location:card_detail.php");
if($pay=="cash")
	header("location:bill.php");
?>