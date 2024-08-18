<html>
<head>
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<img src="logo.jpg" style="width:1535px; height:92px;margin-left:1px" class="logo"></img>

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
$size=$_POST['a_size'];
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
</head>

<?php
$cid=$_SESSION['cid'];
$con=mysql_connect("localhost","root","");
mysql_select_db("poshakh",$con);
$sql=("select * from customer where cust_id=".$cid);
$result=mysql_query($sql)or die(mysql_error());
$row=mysql_fetch_array($result);
echo "<div class='row1'>";
echo "<div class='column1' style='width:65%;'>";
echo "<form action='payment.php' method=POST>";
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 565px;  border: none; text-align: left;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Personal Details</h3>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'> Name : ".$row[1]."<br>";
echo " Phone No. : ".$row[3]."</h4>";
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 565px;  border: none; text-align: left;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Delivery Address</h3>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'>".$row[6]."</h4>";
$id=$_SESSION['id'];
$table=$_SESSION['table1'];
$sql1=("select * from ".$table." where p_id=".$id);
$result1=mysql_query($sql1)or die(mysql_error());
$row1=mysql_fetch_array($result1);
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 565px;  border: none; text-align: left;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Order Summary</h3>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'>".$row1[1]."<br>Selected Size : ".$size."<br>Price : ".$row1[3]."<br>";	
echo "Quantity  <select name=quantity><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option></h4>";
echo "<input type=submit value=submit style=' background-color: #FF5733; border: none;  color: white; margin-top:3px; padding: 15px;  text-align: center;  text-decoration: none; margin-left:150px; width:300px; display: inline-block;  font-size: 20px;  cursor: pointer;border-radius:3px;'>";
echo "</div>";
echo "<div class='column1' style='width:35%'>";
echo "<h3 style='margin-left:50px;background-color: #31F6EC;  color: white;  cursor: pointer;  padding: 18px; width: 365px;  border: none; text-align: center;  outline: none; font-size:20px; margin-top:5px;font-family:Arial Rounded MT Bold;'>Payment Options</h3>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'><input type=radio value=credit name=pay>Credit card<br></h4>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'><input type=radio value=debit name=pay>Debit card<br></h4>";
echo "<h4 style='margin-left:70px;font-size:18px;font-family:Bahnschrift SemiCondensed;'><input type=radio value=cash name=pay>Cash On delivery<br></h4>";
echo "</div>";
echo "</form>";
echo "<link rel='stylesheet' href='blocks.css'>";

?>