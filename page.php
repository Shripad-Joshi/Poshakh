<?php
session_start();
$_SESSION['name']=$_GET['name'];
include_once('load_page.php');
?>
