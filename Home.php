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
<div class="container" id="slideshow" style="width:1200px; position:relative; padding-left:10px; padding-top:10px;">

<div class="image-sliderfade fade" >
  <img src="ad1.jpg">
</div>

<div class="image-sliderfade fade">
  <img src="ad2.jpg">
</div>

<div class="image-sliderfade fade">
  <img src="ad3.jpg">
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div>
</head>
<script>
var slideIndex = 0;  
showSlides();  
function showSlides() 
{ 
    var i; 
  
    // get the array of divs' with classname image-sliderfade 
    var slides = document.getElementsByClassName("image-sliderfade");  
      
    // get the array of divs' with classname dot 
    var dots = document.getElementsByClassName("dot");  
  
    for (i = 0; i < slides.length; i++) { 
        // initially set the display to  
        // none for every image. 
        slides[i].style.display = "none";  
    } 
   
     // increase by 1, Global variable 
    slideIndex++;  
   
     // check for boundary 
    if (slideIndex > slides.length)  
    { 
        slideIndex = 1; 
    } 
   
    for (i = 0; i < dots.length; i++) { 
        dots[i].className = dots[i].className. 
                            replace(" active", ""); 
    } 
   
    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 
  
    // Change image every 2 seconds 
    setTimeout(showSlides, 4000);  
} 
</script>
</head>
<body>
<h1 style="margin-left:82px;color:#005a9e">Best In Men ...</h1>
<div class="row" style="margin-left:70px">
  <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from m_top where p_id=48";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_top'>Buy Now</a>";		
  ?> 
 </div>
<div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from m_bottom where p_id=10";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_bottom'>Buy Now</a>";		
  ?> 
 </div>
  <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from m_bottom where p_id=59";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_bottom'>Buy Now</a>";		
  ?> 
 </div>
<div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from m_top where p_id=1";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_top'>Buy Now</a>";		
  ?> 
 </div>
<div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from m_top where p_id=47";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=m_top'>Buy Now</a>";		
  ?> 
 </div>
 </div>
<div>
<h1 align=center style="color:#005a9e">... Brand On Focus ...</h1>
<table>
<tr><td><img src="l1.jpg" style="margin-left:10px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l2.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l3.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l4.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l5.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l6.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l7.jfif" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td>
<td><img src="l8.png" style="margin-left:5px; width:180px; height:180px; border-radius:5px"></td></tr>
<tr><td align=center>Nike</td><td align=center>Levi's</td><td align=center>adidas</td><td align=center>Raymond</td><td align=center>PARK AVENUE</td><td align=center>MUFTI</td><td align=center>Allen Solly</td><td align=center>Calvin Klein</td></tr>
</table>
</div>
<h1 style="margin-left:82px;color:#005a9e">Best In Women ...</h1>
<div class="row" style="margin-left:70px">
  <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from w_top where p_id=1";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";		
  ?> 
 </div>
<div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from w_top where p_id=2";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";		
  ?> 
 </div>
<div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from w_top where p_id=3";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";		
  ?> 
 </div>
 <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from w_top where p_id=4";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";		
  ?> 
 </div>
 <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from w_top where p_id=5";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=w_top'>Buy Now</a>";		
  ?> 
 </div>
 </div>
 <div>
 <img src="adt1.jpg" style="width:470px;margin:10px;height:400px;border-radius:10px"></img>
 <img src="adt1.png" style="width:470px;margin:10px;height:400px;border-radius:10px"></img>
 <img src="adt3.jpg" style="width:470px;margin:10px;height:400px;border-radius:10px"></img>
 </div>
<div style="hidden">
<h1 style="margin-left:82px;color:#005a9e">Best In Kids ...</h1>
<div class="row" style="margin-left:70px">
  <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from k_boys where p_id=1";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_boys'>Buy Now</a>";		
  ?> 
 </div>
 <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from k_boys where p_id=2";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_boys'>Buy Now</a>";		
  ?> 
 </div>
 <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from k_boys where p_id=3";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_boys'>Buy Now</a>";		
  ?> 
 </div>
  <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from k_girls where p_id=1";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_girls'>Buy Now</a>";		
  ?> 
 </div>
 <div  style="float: left; width: 260px; height:380px; margin:8px; Background-color:White;background-color:#EEEEEE;border-radius:20px">
  <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("poshakh",$con);
	$sql="select * from k_girls where p_id=2";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	$image = $row['i_name'];
	$image_src = "upload/".$image;
	echo "<img src='".$image_src."' style='width:260px;border-top-right-radius:20px; border-top-left-radius:20px;'>";
	echo "<h4 style='text-align:center;margin-top:5px;margin-bottom:0px'>".$row[1]." ".$row[7]." ".$row[4]."</h4>";
	echo "<h3 style='text-align:center;margin-top:0px;margin-bottom:0px'>Rs.".$row[3]."</h3>";
	echo "<a style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 5px;  text-align: center;  text-decoration: none; margin-left:95px; display: inline-block;  font-size: 16px;  cursor: pointer;border-radius:3px;' href = 'dis.php?id=".$row[0]."&table=k_girls'>Buy Now</a>";		
  ?> 
 </div>
 </div>
</div>
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
var i;
// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}
var x = gridview.call(); 
document.getElementById("demo").innerHTML = x; 
</script>
</div>  
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
</body>
</html>