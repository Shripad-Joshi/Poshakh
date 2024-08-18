<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("poshakh",$con);
session_start();
$table=$_SESSION['table_name'];
if(isset($_GET['Del']))
    {
		$id=$_GET['id'];
		$UserID = $_GET['Del'];
		echo $table;
        $query = " delete from ".$table." where ".$id ."=".$UserID;
        $result = mysql_query($query);
        if($result)
        {
         	header("location:show_table.php");
		}
    }
?>