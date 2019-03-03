<?php
session_start();
include_once("db.php");

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
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

tr:nth-child(even) {
  background-color: #ddd499;
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
		<li><a class="active" href="op.php">All Sales</a></li>
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

<?php
$result = $mysqli->query("SELECT id,product_code, product_name, category, fandom, price, product_qty FROM sale  ORDER BY id ASC");

if($result){ 
$products_item = '<table border="1" bordercolor="white" style="color:white;"><th>Sale ID</th><th>Customer name</th><th>Category</th><th>Product Name</th><th>Amount(taka)</th><th>Product Quantity</th>

';
while($obj = $result->fetch_object())
{

$products_item .= <<<EOT
	<tr>
	
    <td><p align="center">{$obj->product_code}</p></td>
   <td><p align="center">{$obj->fandom}</p></td>
    <td><p align="center">{$obj->category}</p></td>
	<td><p align="center">{$obj->product_name}</p></td>
    <td><p align="center">{$obj->price}</p></td>
    <td><p align="center">{$obj->product_qty}</p></td>
	</tr>
		
EOT;
}
$products_item .= '</table>';
echo $products_item;
}
?>    
</div>




</section>
</div>






</body>
</html>