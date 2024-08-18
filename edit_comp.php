<?php
<html>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border=1>
<tr><th>Company Id:</th>
<td><input type=text name="comp_no" placeholder="Company id" ></td></tr>
<tr><th>Company Name:</th>
<td><input type=text name="comp_name" placeholder="Company name"></td></tr>
<tr><th>Company City:</th>
<td><input type=text name=comp_city placeholder="Company city"></td></tr>
<tr><th>Company State:</th>
<td><input type=text name=comp_state placeholder="Company state"></td></tr>
</table>
<input type=submit value=Submit name=click style='margin-top:10px'>
</form>
</html>
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
			header("location:admin_login.php");
		}
		}
	mysql_close($con);
}
?>