<html>
<head>
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>

<div  class="navbar">
<a href='Home.php' class="navbara">Home</a>
<a class="navbara">New Release</a>
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
<style>


/* Create three equal columns that floats next to each other */
.column1{
  float: left;
  }

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}
.b{
  border-radius: 20px;
  font-size: 130%;
  color: #31F6EC;
  border-color:#31F6EC;
  background-color: white;
  text-align: center;
  text-decoration: none;
  margin-bottom:0px;
  margin-left:26px;
  width:190px;
  height:40px;
}
</style>
<script language="javascript">
</script>
<?php
$id=$_GET['id'];
$table=$_GET['table'];
$_SESSION['id']=$id;
$_SESSION['table1']=$table;
$con=mysql_connect("localhost","root","");
mysql_select_db("poshakh",$con);
$result=mysql_query("select * from ".$table." where p_id=".$id);
$row=mysql_fetch_array($result);
$image = $row['i_name'];
$image_src = "upload/".$image;		
echo "<div class='row1'>";
echo "<form method=POST action='conformation.php'>";
	echo "<div class='column1' style='background-color:#EEEEEE;width:35%;'>";
	echo "<img src='".$image_src."'style='width:450px; border-radius:20px; margin:20px 20px 20px 50px; height:650px'>";     
	echo "</div>";
	echo "<div class='column1' style='width:65%'>";
    echo "<pre style='font-size:40px;font-family:Cooper Black;margin-left:60px;padding-top:0px;margin-bottom:3px;color:#005a9e'><i><b>".$row[1]."</i></b></pre>";
	echo "<pre style='font-size:26px;font-family:Times New Roman;margin-left:100px;padding-top:3px'>";
	$result1=mysql_query("select * from company where c_id=".$row[2]) or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	echo "<i>Company Name:".$row1[1]."</i><br><br>";
	echo "<i>Price: Rs.".$row[3]."/-</i><br><br>";
	echo "<i>Available Size</i><br><br>";
	$size=explode(",",$row[5]);
	for($i=0;$i<count($size);$i++)
	{
	echo "<b><input type=radio name='a_size' value='".$size[$i]."' style='margin:5px; border-style:solid;border-color:black;border-width:2px;padding:3px'>".$size[$i]."</b>";
	}
	echo "<br><br><i>Available Color: ".$row[7]."</i><br><br>";
	if($row[9]>5)
	{
		echo "<b style='margin:5px;padding:3px; text-shadow: 2px 2px 8px #43EA15;'>In Stock</b><br><br>";
	}
	else if($row[9]>0 && $row[9]<=5)
	{
		echo "<b style='margin:5px;padding:3px; text-shadow: 2px 2px 8px #EA1515;'>Stock About To End</b><br><br>";
	}	
	else if($row[9]==0)
	{
		echo "<b style='margin:5px;padding:3px; text-shadow: 2px 2px 8px #EA1515;'>Out of Stock</b><br><br>";
	}	
	$str1=$_SESSION['log'];
if($row[9]>0)
{
if($str1=="login")
{
	echo "<input type=submit value='BUY NOW' style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 15px;  text-align: center;  text-decoration: none; margin-left:0px; display: inline-block;  font-size: 20px;  cursor: pointer;border-radius:3px;' >";
}
if($str1!="login")
	echo "<a href='profile.php' style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 15px;  text-align: center;  text-decoration: none; margin-left:0px; display: inline-block;  font-size: 20px;  cursor: pointer;border-radius:3px;' >BUY NOW</a>";
}    
echo "</div>";
	
echo "</div>";
echo "</form>";
?>
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