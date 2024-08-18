 <html>
<head>
<link rel = "icon" href ="icon.png" type = "image/x-icon"> 
<link rel="stylesheet" href="blocks.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dropdownlist.css">
<img src="logo.jpg" style="width:1518px; height:92px;margin-left:1px" class="logo"></img>

<div  class="navbar">
<a href='Home.php' class="navbara" style="width:183.5px">Home</a>
<a class="navbara" style='width:200px' href="new_release.php">New Release</a>
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
<tr><td><a href="page.php?name=k_boys,sports">Sports</a></td><td><a href="page.php?name=k_girls,dresses">Dresses/Shorts</a></td></tr>
</table>
</div>
</div>
<a href="help.php" class="navbara" style="width:200px">Help</a>
<a href="About_us.php" class="navbara" style="width:200px">About Us</a>
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
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column1 {
  float: left;
  padding: 10px;
  height: 100%; /* Should be removed. Only for demonstration */
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
  margin-bottom:23px;
  margin-left:26px;
  width:190px;
  height:40px;
}
</style>
<script type="text/javascript">
function load_q(str)
{
	var str=arguments[0];
 
	if(str=="Order")
	{
		document.getElementById("qus").innerHTML='<object type="text/html" data="order.html" width="900px" height="800px"></object>';
	}
	else if(str=="Payment")
		document.getElementById("qus").innerHTML='<object type="text/html" data="payment.html" width="900px" height="800px"></object>';
	else if(str=="Cancellation")
		document.getElementById("qus").innerHTML='<object type="text/html" data="cancellation.html" width="900px" height="800px"></object>';
	else if(str=="Shopping")
		document.getElementById("qus").innerHTML='<object type="text/html" data="shopping.html" width="900px" height="800px"></object>';
	else if(str=="Login")
		document.getElementById("qus").innerHTML='<object type="text/html" data="login.html" width="900px" height="800px"></object>';
	else
		return;
}
</script>
</head>
<body>
<div>
<div class="row1">
  <div class="column1" style="width:17%">
     <input type=button class="b" name=order id=order value=Order onclick="load_q(this.value)" style="margin-top:20px"><br>
	 <input type=button class="b" name=payment id=payment value=Payment onclick="load_q(this.value)"><br>
	 <input type=button class="b" name=Cancellation id=Cancellation value=Cancellation onclick="load_q(this.value)"><br>
	 <input type=button class="b" name=Shopping id=Shopping value=Shopping onclick="load_q(this.value)"><br>
	 <input type=button class="b" name=Login id=Login value=Login onclick="load_q(this.value)"><br>
  </div>
  <div class="column1" id="qus" style="width:83%">
   
  </div>
 </div>
</div>
</body>
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
