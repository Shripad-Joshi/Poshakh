<html>
<head>
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<link rel="stylesheet" href="admin_format.css">
<link rel="stylesheet" href="input.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>
</head>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
<h3 class=signupheading style="border-radius:20px; width:300px; float:left;margin-left:400px;  font-family: Times New Roman, Times, serif; font-size:22px;">Select Table</h3>
<select name=table style="margin-left:20px; height:30px; width:200px; margin-top:30px">
	<option value="">Select table</option>
	<option value="Company">Company</option>
	<option value="Customer">Customer</option>
	<option value="M_Top">M_Top</option>
	<option value="M_Bottom">M_Bottom</option>
	<option value="M_seasonal">M_seasonal</option>
	<option value="M_Tratitional">M_Tratitional</option>
	<option value="K_Boys">K_Boys</option>
	<option value="K_Girls">K_Girls</option>
	<option value="W_Bottom">W_Bottom</option>
	<option value="W_Top">W_Top</option>
	<option value="W_Duptta">W_Duptta</option>
	<option value="W_Saree">W_Saree</option>
</select>
<input type="Submit" value="Display" class="submitbtn"name="submit" style="margin-top:25px; width:200px; margin-left:10px">
</form>
</div>
</div>  
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	include_once('load.php');
}
?>