<html>
<head>
<link rel = "icon" href ="icon.png" type = "image/x-icon"> 

<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>

<div  class="navbar">
<a href='Home.php' class="navbara">Home</a>
<a class="navbara" href="new_release.php">New Release</a>
<div class=subnav>
 <button class="subnavbtn">Men<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=m_top">Top</a></th><th><a href="page.php?name=m_bottom">Bottom</a></th><th><a href="page.php?name=m_seasonal">Seasonal</a></th></tr>
<tr><td><a href="page.php?name=m_top,shirts">Shirts</a></td><td><a href="page.php?name=m_bottom,jeans">Jeans</a></td><td><a href="page.php?name=m_seasonal,sweater">Sweater</a></td></tr>
<tr><td><a href="page.php?name=m_top,t-shirts">T-shirts</a></td><td><a href="page.php?name=m_bottom,trousers">Trousers</a></td><td><a href="page.php?name=m_seasonal,raincoat">Raincoat</a></td></tr>
<tr><td><a href="page.php?name=m_top,blazers">Blazers</a></td><td><a href="page.php?name=m_bottom,shorts">Shorts</a></td><td><a href="page.php?name=m_seasonal,Jacket">Jacket</a></td></tr>
<tr><td></td><td><a href="page.php?name=m_bottom,cargo">Cargo</a></td><td></td><td></td></tr>
</table>
</div>
</div>
<div class=subnav>
 <button class="subnavbtn">Women<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=w_top">Top</a></th><th><a href="page.php?name=w_bottom">Bottom</a></th><th><a href="page.php?name=w_saree">Saree</a></th></tr>
<tr><td><a href="page.php?name=w_top,kurti">Kurti</a></td><td><a href="page.php?name=w_bottom,jeans">Jeans</a></td><td><a href="page.php?name=w_saree,paithani">Paithani</a></td><td></td></tr>
<tr><td><a href="page.php?name=w_top,short">short tops</a></td><td><a href="page.php?name=w_bottom,skirts">Skirts</a></td><td><a href="page.php?name=w_saree,banarsi">Banarsi</a></td><td></td></tr>
<tr><td></td><td><a href="page.php?name=w_bottom,leggings">Leggings</a></td><td></td></tr>
<tr><td></td><td></td><td><td></td></tr>
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
<tr><td><a href="page.php?name=k_boys,sports">Sports</a></td><td><a href="page.php?name=k_girls,dresses">Dresses</a></td></tr>
</table>
</div>
</div>
<a href="help.php" class="navbara">Help</a>
<a href="About_us.php" class="navbara">About Us</a>
<?php
if(session_id()=="")
{
	session_start();
}
$str=$_SESSION['cust_name'];
$str1=$_SESSION['log'];
if($str1=="login")
{
	echo "<div class='subnav'>";
	echo "<button class='subnavbtn' style='width:181px'>".$str."<i class='fa fa-caret-down'></i></button>";
	echo "<div class='subnav-content' style='width:181px;left:1325px;height:60px'>";
	echo "<table cellspacing=10px align=centre>";
	echo "<tr><td><a href='view_pro.php'>View Profile</a></td></tr>";
	echo "<tr><td><a href='logout.php'>Logout</a></td></tr></table>";
	echo "</div></div>";
	}
if($str1!="login")
	echo "<a href='profile.php' class='navbara'>Profile</a>";
?>
</div>
</div>
</head>
</html>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	echo "<div class='row' style='margin-left100px'>";
	$sql="select * from m_bottom order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	echo "<div class='row' style='margin-left:220px'>";
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from m_bottom where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_bottom'>Buy Now</a>";
		echo "</div>";
	}
	$sql="select * from m_top order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from m_top where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_top'>Buy Now</a>";
		echo "</div>";
	}
	echo "</div>";
	echo "<div class='row' style='margin-left100px'>";
	$sql="select * from m_seasonal order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	echo "<div class='row' style='margin-left:220px'>";
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from m_seasonal where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_seasonal'>Buy Now</a>";
		echo "</div>";
	}
	$sql="select * from w_top order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from w_top where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";
		echo "</div>";
	}
 echo "</div>";
 echo "<div class='row' style='margin-left100px'>";
	$sql="select * from w_saree order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	echo "<div class='row' style='margin-left:220px'>";
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from w_saree where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_saree'>Buy Now</a>";
		echo "</div>";
	}
	$sql="select * from w_bottom order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from w_bottom where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_bottom'>Buy Now</a>";
		echo "</div>";
	}
 echo "</div>";echo "<div class='row' style='margin-left100px'>";
	$sql="select * from k_boys order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	echo "<div class='row' style='margin-left:220px'>";
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from k_boys where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_boys'>Buy Now</a>";
		echo "</div>";
	}
	$sql="select * from k_girls order by rel_date LIMIT 0,2";
	$result = mysql_query($sql)  or die(mysql_error());
	while($row = mysql_fetch_array($result) ) 
	{
		echo "<div style='float: left; width: 260px; height:380px; margin:10px; border-radius:20px; background-color:#EEEEEE;'>";
		$sql1 = "select i_name from k_girls where p_id=".$row[0];
		$result1 = mysql_query($sql1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$image = $row1['i_name'];
		$image_src = "upload/".$image;
		echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
		echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
		echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
		echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_girls'>Buy Now</a>";
		echo "</div>";
	}
 echo "</div>";
 ?>

<html>
<footer class="footer" style="background-color:#31F6EC;">
<pre class="foot" >
Mail Us:
Flipkart Internet Private Limited,
Buildings Alyssa, Begonia &
Clove Embassy Tech Village,
Outer Ring Road, Devarabeesanahalli Village,
Bengaluru, 560103,
Karnataka, India.
</pre>
</footer>
</html>