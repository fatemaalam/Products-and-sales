
<?php
session_start();
include_once("db.php");

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if(isset($_POST['but_upload'])){
		$code = ($_POST['prod_code']);
		$name1 = ($_POST['prod_name']);
	//$image = $_FILES['image']['name'];
		$fees = ($_POST['price']);
     //   $quant = ($_POST['product_qty']);
        
  $name = $_FILES['file']['name'];
  $target_dir = "res/kid/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 echo "kiiii";
     // Insert record
    // $query = "insert into sales(name) values('".$name."')";
    // mysqli_query($mysqli,$query);
  
     // Upload file
    

 //$target = "res/teen/".basename($image);
$sql = "INSERT INTO sales(prod_code,prod_name,price,name) VALUES ('$code','$name1','$fees','".$name."')";
 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);}
if (mysqli_query($mysqli,$sql)){
	
    
	echo '<script type="text/javascript">alert("added. Add more!");</script>';
	header("Location:http://localhost/project/adds.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Error Occured");</script>';
	header("Location:http://localhost/project/adds.php");

}

}

?>

<!DOCTYPE html>
<html>
<head>

	<title>BOOKWORM</title>
	<link rel="icon" href="res/im/w.png" sizes="15x15">
	<link rel="stylesheet" type="text/css" href="css/head.css">

	<link rel="stylesheet" type="text/css" href="css/sidebar2.css">

	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/content.css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		
		#logo{
			padding-top: 0.7%;						
			width: 14%;
			float: left;
			height: 62px;
				
			position: fixed;		
		}
		
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr {
  background-color: #ffffff;
}

		


	</style>
	
</head>

<body>

<div id="logo">

	<a href="admin.php">
		<img src="res/im/w.png" width="100%">
	</a>
</div>
<br><br><br><br>
<div id="sidebar">
	<ul>
		<li>ADMIN page</li>
				
		<li>
			<a href="destroy.php"> 

			<table><tr><td><img src="res/icons/logout.png" /></td>

			<td>&nbsp;LogOUT</td></tr></table></a>
		</li>

		
	</ul>
</div>

<div id="navbar">
	<ul>
		<li><a href="op.php">All Sales</a></li>
		<li><a href="addp.php">Add Sales</a></li>

		<li><a href="addpe.php">Edit Product</a></li>

		<li><a href="removep.php">Delete Product</a></li>

		<li><a  href="ops.php">All Product</a></li>

		<li><a href="adds.php">Add Product</a></li>

		<li><a href="addse.php">Edit sale</a></li>

		<li><a href="removes.php">Remove sale</a></li>

		<li><a href="opu.php">All users</a></li>

		<li><a href="removeu.php">Remove users</a></li>
	</ul>
</div>


<div class="content">
	<section class="container">


<div id="addForm">
<form name="productForm" method="post" action="" enctype='multipart/form-data'>
<table width="45%"> 
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	
</tr>
<tr>
	<td>
		<label>Product ID &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="prod_code" required>
	</td>
</tr>



<tr>
	<td>
		<label>Product Name &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="prod_name" required>
	</td>
</tr>
<tr>
	<td>
		<label>Product image &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		
		<input type='file' name='file' />
	</td>
</tr>
<tr>
	<td>
		<label>Price &nbsp;&nbsp;</label>	
	</td>
	<td colspan="2">
		<input type="text" name="price" required>
	</td>
</tr>

<tr>
	<td colspan="3">&nbsp;</td>
</tr>


<tr>
<td>&nbsp;</td>
<td>
	<input type="submit" name="but_upload" value="Add">
</td>
<td>&nbsp;</td>
</tr>

</table>
</form>
</div>


</section>
</div>

</body>
</html>