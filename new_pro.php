<html>
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>
<link rel="stylesheet" href="input.css">
<script type="text/javascript"> 
        function test_str() { 
            var str = document.getElementById("t4").value; 
            if (str.length <= 8) 
            	document.getElementById("test").innerHTML='Weak password';
			else 
                	document.getElementById("test").innerHTML='Strong password';
  
		} 
    </script>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div style="border:1px solid black; margin-top:60px; margin-left:500px; height:550px; width:400px;margin-right:500px">
<h2 style="margin-left:110px">Create Account</h2><br>
<label class=text style="margin-left:50px;font-size:16px">Your Name</label><br>
<input type=text name=t1 class=input style="margin-left:50px;" required><br>
<label class=text style="margin-left:50px;font-size:16px">Email</label><br>
<input type=text name=t2 class=input style="margin-left:50px;" required><br>
<label class=text style="margin-left:50px;font-size:16px">Mobile No.</label><br>
<input type=text name=t3 class=input style="margin-left:50px;" required><br>
<label class=text style="margin-left:50px;font-size:16px">Password</label><br>
<input type=text name=t4 id=t4 class=input style="margin-left:50px;" onkeyup="test_str()" required><br>
<div id=test style="margin-left:140px;font-size:14px"></div>
<label class=text style="margin-left:50px;font-size:16px;margin-bottom:4px">Gender</label><br>
<input type=radio name=t5 style="margin-left:70px;" value=male required>Male
<input type=radio name=t5 style="margin-left:50px;" value=female required>Female<br>
<label class=text style="margin-left:50px;font-size:16px">Address</label><br>
<textarea name=t6 id=t6 class=input style="margin-left:50px;" rows=3 required></textarea><br>
<input type=submit value=Register class=submitbtn name=click>
</div>
</form>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['t1']))
		$name=$_POST['t1'];
	if(isset($_POST['t2']))
		$email=$_POST['t2'];
	if(isset($_POST['t3']))
		$mobile_no=$_POST['t3'];
	if(isset($_POST['t4']))
		$pass=$_POST['t4'];
	if(isset($_POST['t5']))
		$gender=$_POST['t5'];
	if(isset($_POST['t6']))
		$addr=$_POST['t6'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
		if(isset($_POST['click']))
		{
				$result = mysql_query("insert into customer values(default,'$name','$email',$mobile_no,'$pass','$gender','$addr')",$con);
		if($result)
		{
			header("location:profile.php");
		}
		}
	mysql_close($con);
}
?>