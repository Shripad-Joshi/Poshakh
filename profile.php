<html>
<head>
<link rel = "icon" href ="icon.png" type = "image/x-icon"> 
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<link rel="stylesheet" href="input.css">
<link rel="stylesheet" href="login.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>
<div  class="navbar">
<a href='Home.php' class="navbara">Home</a>
<a class="navbara" href="new_release.php">New Release</a>
<div class=subnav>
 <button class="subnavbtn">Men<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=m_top">Top</a></th><th><a href="page.php?name=m_bottom">Bottom</a></th><th><a href="page.php?name=m_seasonal">Seasonal</a></th><th><a href="page.php?name=m_traditional">Traditional</a></th></tr>
<tr><td><a href="page.php?name=m_top,shirts">Shirts</a></td><td><a href="page.php?name=m_bottom,jeans">Jeans</a></td><td><a href="page.php?name=m_seasonal,sweater">Sweater</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,t-shirts">T-shirts</a></td><td><a href="page.php?name=m_bottom,trousers">Trousers</a></td><td><a href="page.php?name=m_seasonal,raincoat">Raincoat</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,kurtas">Kurtas</a></td><td><a href="page.php?name=m_bottom,shorts">Shorts</a></td><td><a href="page.php?name=m_seasonal,sweatshirt">Sweatshirt</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,blazers">Blazers</a></td><td><a href="page.php?name=m_bottom,cargo">Cargo</a></td><td><a href="page.php?name=m_seasonal,jacket">Jacket</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
</table>
</div>
</div>
<div class=subnav>
 <button class="subnavbtn">Women<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=w_top">Top</a></th><th><a href="page.php?name=w_bottom">Bottom</a></th><th><a href="page.php?name=w_saree">Saree</a></th><th><a href="page.php?name=w_dupata">Dupata</a></th></tr>
<tr><td></td><td><a href="page.php?name=w_bottom,jeans">Jeans</a></td><td><a href="page.php?name=w_saree,paithani">Paithani</a></td><td></td></tr>
<tr><td></td><td><a href="page.php?name=w_bottom,skirts">Skirts</a></td><td><a href="page.php?name=w_saree,banarsi">Banarsi</a></td><td></td></tr>
<tr><td></td><td><a href="page.php?name=w_bottom,leggings">Leggings</a></td><td><a href="page.php?name=w_saree,sambalpuri">Sambalpuri</a></td><td></td></tr>
<tr><td></td><td></td><td><a href="page.php?name=w_saree,bandhani">Bandhani</a></td><td></td></tr>
</table>
</div>
</div>
<div class=subnav>
 <button class="subnavbtn">Kids<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=k_boys'">Boys</a></th><th><a href="page.php?name=k_girls">Girls</a></th></tr>
<tr><td><a href="page.php?name=k_boys,ethnic">Ethnic</a></td><td><a href="page.php?name=k_girls,ethnic">Ethnic</a></td></tr>
<tr><td><a href="page.php?name=k_boys,t-shirts">T-shirts</a></td><td><a href="page.php?name=k_girls,tops">Tops</a></td></tr>
<tr><td><a href="page.php?name=k_boys,sports">Sports</a></td><td><a href="page.php?name=k_girls,dresses">Dresses/Shorts</a></td></tr>
</table>
</div>
</div>
<a class="navbara" href="help.php">Help</a>
<a href="About_us.php" class="navbara">About Us</a>
<?php
session_start();
$str=$_SESSION['cust_name'];
$str1=$_SESSION['log'];
if($str1=="login")
{
	echo "<div class='subnav'>";
	echo "<button class='subnavbtn' style='width:195px'>".$str."<i class='fa fa-caret-down'></i></button>";
	echo "<div class='subnav-content' style='width:195px;left:1325px;height:30px'>";
	echo "<table cellspacing=10px align=centre><tr><td><a href='logout.php'>Logout</a></td></tr></table>";
	echo "</div></div>";
}
if($str1!="login")
	echo "<a href='profile.php' class='navbara'>Profile</a>";
?>
</div>
</head>
<body>
<div class="parallax">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
<div class=signUpForm>
<h2 class=signUpHeading>Log In</h2>
<h4><label class=text>Email</label><br><input type=text name=name placeholder=Email.... class=input style="width:606px"></h4>
<h4><label class=text>Password</label><br><input type=password name=pass placeholder=Password.... class=input style="width:606px"></h4>
<input type=submit name=click value=Login class=submitBtn><br>
<h5><a class="link" style="margin-left:60px" href="new_pro.php">Create New Profile</a></h5>
</div>
</form>
</div>
<footer class="footer" style="background-color:#31F6EC">
<pre class="foot">
Mail Us:
Poshakh Private Limited,
Buildings Alyssa, Begonia &
Clove Embassy Tech Village,
Outer Ring Road, Chinchwad,
Pune, 411019,
Maharashtra , India.
</pre>
</footer>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$flag=0;
	if(isset($_POST['name']))
		$name=$_POST['name'];
	if(isset($_POST['pass']))
		$pass=$_POST['pass'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
		if(isset($_POST['click']))
		{
			$result=mysql_query("select * from customer");
			while($row=mysql_fetch_array($result))
			{
				if($row[2]==$name && $row[4]==$pass)
				{
					$flag=1;
					$id=$row[0];
					session_start();
					session_register('log');
					session_register('cust_name');
					$_SESSION['cust_name']=$row[1];
					$_SESSION['log']="login";
					$_SESSION['cid']=$row[0];
				}
			}
			if($flag==1)
			{
				header("location:Home.php");
			}
			else
			{
				echo "<script>";
				echo "alert('Invalid email or password')";
				echo "</script>";
			}
		}
		
}
?>