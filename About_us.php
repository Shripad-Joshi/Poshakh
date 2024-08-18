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
session_start();
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
<table>
<tr>
<td>
<pre style="font-size:40px;font-family:Cooper Black;margin-left:130px;padding-top:0px;color:#005a9e"><i><b>Our Vision</i></b></pre>
<pre style="font-size:22px;font-family:Times New Roman;margin-left:70px;" >
<i> To be Earth's most customer-centric company
where customers can find and discover every cloth
 they might want to buy online.</i>
 </td><td>
 <img src="vision.jfif" style="margin-left:300px;width:500px;margin-top:80px;border-radius:10px"></img>
 </pre>
</td></tr></table>
<table>
<tr>
<td>
 <img src="vision.jfif" style="margin-left:70px;width:500px;margin-top:80px;border-radius:10px"></img>
 </pre>
</td>
<td>
<pre style="font-size:40px;font-family:Cooper Black;margin-left:350px;padding-top:0px;color:#005a9e"><i><b>Our Mission</i></b></pre>
<pre style="font-size:22px;font-family:Times New Roman;margin-left:200px;" >
<i> Poshakh.com was founded with a rebellious spirit and a lofty 
objective: To offer designer eyewear at a revolutionary price
 while leading the way for socially conscious businesses.</i>
 </td></tr></table>
 <footer class="footer" style="background-color:#31F6EC;margin-top:50px">
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
 
 
 
 
 
