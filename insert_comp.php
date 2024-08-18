<html>
<h2 style="align:centre"> Company Details</h2>
<body style="margin-top:100px; margin-left:500px;">
<link rel="stylesheet" href="input.css">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h3><label class=text>Company Id:</label><input type=text class="input" name="comp_no" style="margin-left:30px" placeholder="Company id"></h3>
<h3><label class=text>Company Name:</label><input type=text class="input" name="comp_name" placeholder="Company name"></h3>
<h3><label class=text>Company City:</label><input type=text class="input" name=comp_city style="margin-left:15px" placeholder="Company city"></h3>
<h3><label class=text>Company State:</label><input type=text class="input" name=comp_state style="margin-left:5px" placeholder="Company state"></h3>
<input type=submit class="submitbtn" value=Submit name=click style="margin-left:0px; width:40%; margin-top:10px">
</form>
</body>
</html>
	
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['comp_no']))
		$comp_no=$_POST['comp_no'];
	if(isset($_POST['comp_name']))
		$comp_name=$_POST['comp_name'];
	if(isset($_POST['comp_city']))
		$comp_city=$_POST['comp_city'];
	if(isset($_POST['comp_state']))
		$comp_state=$_POST['comp_state'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$table_name=$_SESSION['table_name'];
		if(isset($_POST['click']))
		{
				$result = mysql_query("insert into company values($comp_no,'$comp_name','$comp_city','$comp_state')",$con);
			
		
		if($result)
		{
			header("location:show_table.php");
		}
		}
	mysql_close($con);
}
?>