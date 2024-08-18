<html>
<head>
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<link rel="stylesheet" href="login.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>

<div  class="navbar">
<a href='Home.html' class="navbara">Home</a>
<a class="navbara" href="new_release.php">New Release</a>
<div class=subnav>
 <button class="subnavbtn">Men<i class="fa fa-caret-down"></i></button>
<div class="subnav-content" >
<table cellspacing=10px style="color:white">
<tr><th><a href="page.php?name=m_top">Top</a></th><th><a href="page.php?name=m_bottom">Bottom</a></th><th><a href="page.php?name=m_seasonal">Seasonal</a></th><th><a href="page.php?name=m_traditional">Traditional</a></th></tr>
<tr><td><a href="page.php?name=m_top,shirts">Shirts</a></td><td><a href="page.php?name=m_bottom,jeans">Jeans</a></td><td><a href="page.php?name=m_seasonal,sweater">Sweater</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,t-shirts">T-shirts</a></td><td><a href="page.php?name=m_bottom,trousers">Trousers</a></td><td><a href="page.php?name=m_seasonal,raincoat">Raincoat</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,kurtas">Kurtas</a></td><td><a href="page.php?name=m_bottom,shorts">Shorts</a></td><td><a href="page.php?name=m_seasonal,sweatshirt">Sweatshirt</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
<tr><td><a href="page.php?name=m_top,blazers">Blazers</a></td><td><a href="page.php?name=m_bottom,cargo">Cargo</a></td><td><a href="page.php?name=m_seasonal,Jacket">Jacket</a></td><td><a href="page.php?name=m_traditional,">Blazer</a></td></tr>
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
<link rel="stylesheet" href="login.css">
<?php
$cid=$_SESSION['cid'];
$con=mysql_connect("localhost","root","");
mysql_select_db("poshakh",$con);
$sql=("select * from customer where cust_id=".$cid);
$result=mysql_query($sql)or die(mysql_error());
$row=mysql_fetch_array($result);echo "<div class='row1'>";
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 1400px;  border: none; text-align: left;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Personal Details</h3>";
echo "<form action='edit_cust.php' method=POST>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'> Name : ".$row[1]."<br>";
echo " Phone No. : ".$row[3]."<br>";
echo " Email Id : ".$row[2]."<br>";
echo " Adrress :".$row[6]."<br>";
echo " Gender :".$row[5]."</h4>";
echo "<input type=submit name=click value=Edit class=submitBtn style='margin-left:65px;height:40px'><br>";
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 1400px;  border: none; text-align: left;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Order</h3>";
$sql1="select * from bill where cust_id=".$cid;
$result1=mysql_query($sql1);
while($row1=mysql_fetch_array($result1))
{
	echo "<div class='row1'>";
	echo "<div class='column1' style='width:20%;'>";
	echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'> Bill id : ".$row1[0]."<br>";
	echo "</div>";
	echo "<div class='column1' style='width:20%;'>";
	echo " Order date. : ".$row1[4]."<br>";
	echo "</div>";
	echo "<div class='column1' style='width:20%;'>";
	echo " Total Price : ".$row1[11]."<br>";
	echo "</div>";
	$dat= DATE_ADD("$row1[4]",INTERVAL 5 DAY);
	if($row1[4] < $dat)
	{
		echo "<div class='column1' style='width:20%;'>";
		echo "<a href='cancel_order.php?id=".$row1[0]."' style='background: none;    border: none;    background-color: rgb(56, 164, 231);    margin: 10px;    padding: 10px;    border-radius: 10px;    outline: none;    color: white;    font-weight: bold;    letter-spacing: 1px;   width: 30%;    transition: 1s;    cursor: pointer;	margin-left:35%;'>Cancel</a></h4>";
		echo "</div>";
	}
	elseif(DATE_ADD('$row1[4]',INTERVAL 5 days) < DATE_ADD('$row1[4]',INTERVAL 5 days))
	{
		echo "<div class='column1' style='width:20%;'>";
		echo "<a href='cancel_order.php?id=".$row1[0]."' style='background: none;    border: none;    background-color: rgb(56, 164, 231);    margin: 10px;    padding: 10px;    border-radius: 10px;    outline: none;    color: white;    font-weight: bold;    letter-spacing: 1px;   width: 30%;    transition: 1s;    cursor: pointer;	margin-left:35%;'>Replace</a></h4>";
		echo "</div>";
	}
	echo "</div>";
}
echo "</form>";
?>