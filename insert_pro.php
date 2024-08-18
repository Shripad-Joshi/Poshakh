<html>
<h2 style="align:centre"> Product Details</h2>
<body style="margin-top:100px; margin-left:500px;">
<link rel="stylesheet" href="input.css">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype=multipart/form-data>
Product Id:<input type=text name=pro_id class="input" placeholder="Product id" style="margin-left:30px"><br>
Product Name:<input type=text name=pro_name class="input" placeholder="Product name"><br>
Company ID:<input type=text name=comp_id class="input" placeholder="Company Id" style="margin-left:14px"><br>
Product Price:<input type=text name=pro_price class="input" placeholder="Product Price" style="margin-left:5px"><br>
Product Type:<input type=text name=pro_type class="input" placeholder="Product type" style="margin-left:9px"><br>
Available size:<input type=checkbox name="a_size[]" value="S" style="margin-left:9px">S
<input type=checkbox name="a_size[]" value="M">M
<input type=checkbox name="a_size[]" value="L">L
<input type=checkbox name="a_size[]" value="XL">XL
<input type=checkbox name="a_size[]" value="XXL">XXL<br>
Available color:<input type=text name=a_color class="input" placeholder="Available color"><br>
Select image:<input type=file name="img1" style="margin-left:10px"><br>
<input type=submit value=Submit name=click class="submitbtn" style='width40%; margin-left:50px; margin-top:10px'>
</form>
</html>
	
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['pro_id']))
	{
		$pro_id=$_POST['pro_id'];
		if(isset($_POST['pro_name']))
		{
			$pro_name=$_POST['pro_name'];
			if(isset($_POST['comp_id']))
			{
				$comp_id=$_POST['comp_id'];
				if(isset($_POST['pro_price']))
				{
					$pro_price=$_POST['pro_price'];
					if(isset($_POST['pro_type']))
					{
						$pro_type=$_POST['pro_type'];
						if(isset($_POST['a_color']))
						{
							$a_color=$_POST['a_color'];
							if(!empty($_POST['a_size']))
							{
								$a_size=implode(',',$_POST['a_size']);
								if(!empty($_FILES['img1']['name']))
								{
									
									$con=mysql_connect("localhost","root","");
									mysql_select_db("poshakh",$con);
									$table_name=$_SESSION['table_name'];
									$name = $_FILES['img1']['name'];
									$target_dir = "upload/";
									$target_file = $target_dir.basename($_FILES['img1']['name']);

									// Select file type 
									$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

									// Valid file extensions 
									$extensions_arr = array("jpg","jpeg","png","jfif");

									// Check extension	
									if( in_array($imageFileType,$extensions_arr) )
									{
										if(isset($_POST['click']))
										{
											$result = mysql_query("insert into $table_name values($pro_id,'$pro_name',$comp_id,$pro_price,'$pro_type','$a_size','$name','$a_color',default,15)",$con);
											// Upload file
											move_uploaded_file($_FILES['img1']['tmp_name'],$target_dir.$name);
											if($result)
											{
												header("location:show_table.php");
												mysql_close($con);
											}
											else
									{
										echo "<script type='text/javascript'>";
										echo "alert('qury does not work properly.')";
										echo "</script>";
									}
											
											}
									}
									else
									{
										echo "<script type='text/javascript'>";
										echo "alert('Select image with .jpg or .jpeg or .png extension')";
										echo "</script>";
									}
								}
								else
								{
									
									echo "<script type='text/javascript'>";
									echo "alert('Upload image')";
									echo "</script>";
								}
							}
							else
							{
								echo "<script type='text/javascript'>";
								echo "alert('Enter size of cloth')";
								echo "</script>";
							}
						}
						else
						{
							echo "<script type='text/javascript'>";
						    echo "alert('Select Color')";
							echo "</script>";
						}
					}
					else
					{
						echo "<script type='text/javascript'>";
					    echo "alert('Enter Cloth type')";
						echo "</script>";
					}
				}
				else
				{
					echo "<script type='text/javascript'>";
				    echo "alert('Enter Cloth price')";
					echo "</script>";
				}
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('Enter compact id')";
				echo "</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('Enter cloth name')";
			echo "</script>";
		}
	}
}
?>