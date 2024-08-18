<?php 
	session_start();
	$table_name=$_SESSION['table_name'];
	if($table_name=="Company")
	  require_once('edit_comp.php');
    else if($table_name=="Customer")
		require_once('edit_cust.php');
	else
		require_once('edit_pro.php');

?>
