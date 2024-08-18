<html>
<head>
<meta http-equiv="pragma" content="no-cache" />
<link rel = "icon" href ="icon.png" type = "image/x-icon"> 
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<link rel="stylesheet" href="input.css">
<img src="logo.jpg" style="width:1535px; height:92px;margin-left:1px" class="logo"></img>
</head>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
<div class=signUpForm>
<h2 class=signUpHeading>Log In</h2>
<h3><label class=text>Username</label><br><input type=text name=username placeholder=Username.... class=input style="width:615px"></h3>
<h3><label class=text>Password</label><br><input type=password name=password placeholder=Password.... class=input style="width:615px"></h3>
<input type=submit value=Login class=submitBtn><br>
</div>
</form>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
	if(isset($_POST['username']))
		$username=$_POST['username'];
	if(isset($_POST['password']))
		$password=$_POST['password'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$result=mysql_query("select * from admin_login");
	if($result)
	{
		$flag=0;
		while($row=mysql_fetch_array($result))
		{
			$uname=$row['username'];
			$pword=$row['password'];
			if($username==$uname and $password==$pword)
			{
				header("location:show_table.php");
				$flag=1;
			}
		}
		if($flag==0)
		{
			echo "<script type='text/javascript'>";
			echo "alert('Wrong Username and Password.')";
			echo "</script>";
		}		
	}
	mysql_close($con);
}
?>