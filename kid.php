<?php
session_start();
include_once("db.php");


$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOKWORM</title>
	<link rel="icon" href="res/im/w.png" sizes="15x14">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/content.css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		body{
			margin: 0;	

		}
		#logo{
			padding-top: 0.7%;			
			background-color: #555;
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
		}
		#log{
					
			
			width: 100%;
			height: 40%;
			
			position: fixed;
		}
	</style>
	
</head>

<body>


<div id="navbar">
	<ul>
		<li><a class="active" href="kid.php">KIDS</a></li>
		<li><a href="teen.php">TEEN</a></li>
	</ul>
</div>

	<div id="log">
	
		<img src="res/im/1.gif" width="100%">
	
</div>	
<div id="logo">
	<a href="inp.php">
		<img src="res/im/b.jpg" width="100%">
	</a>
</div>


<div id="sidebar">
	<ul>
		<li>Welcome</li>
		
		<li><a href="#cart"><table><tr>
		<td>&nbsp;Shopping</td></tr></table></a></li>
		
		<li><a href="#clothing"><table><tr><td><img src="res/icons/b.jpg" /></td>
		<td>&nbsp;book</td></tr></table></a></li>

		<li><a href="shop.php"><table><tr><td><img src="res/icons/checkout.png" /></td>
		<td>&nbsp;Checkout&nbsp;</td><td></td></tr></table></a></li>

		<li>
			<a href="destroy.php"> 
			<table><tr><td><img src="res/icons/logout.png" /></td>
			<td>&nbsp;LogOUT</td></tr></table></a>
		</li>

		<li>&nbsp;</li>		
		</ul>
</div>



<div class="content">
	<section class="container">


<div id="cart">
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	
	echo '<h1>Shopping List</h1>';
	echo '<form method="post" action="up.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<thead><tr><th>quantity</th><th>section</th><th>name</th><th>Delete</th></tr></thead>';
	echo '<tbody>';


	$total=0;
	$b= 0;


	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$fandom = $cart_itm["fandom"];
		$product_qty = $cart_itm["product_qty"];
		$category = $cart_itm["category"];
		
		$product_price = $cart_itm["product_price"];
		$product_name = $cart_itm["product_name"];
		
		$product_code = $cart_itm["product_code"];
		
		$b_color = ($b++%2==1) ? 'odd' : 'even';



		echo '<tr class="'.$b_color.'">';
		echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$fandom.'</td>';

		echo '<td>'.$product_name.'</td>';

		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';

		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}

	echo '<tr><td>&nbsp;</td></tr>';
	echo '<tr>';
	
	echo '<td>&nbsp;</td>';

	echo '<td>';
	echo '<button type="submit" id="myButton">edit</button></td>';


	echo '<td><a href="shop.php" id="myButton" style="width: 18%; padding-left: 8px;">check</a>';
	echo '</td>';

	echo '</tr>';

	echo '</tbody>';

	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	}
?>

</div>

<h1>books</h1>
<div class="row" id="clothing">
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price FROM sale WHERE category='kid' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';

while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="up.php">	
	<img src="res/kid/{$obj->product_img_name}">
	<p align="left">{$obj->product_name}</p>
	<p align="left" style="font-size: 1.2em;">{$obj->price} 

	</p>
	
	
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	
	<input type="hidden" name="type" value="add" />

	<input type="hidden" name="return_url" value="{$current_url}" />

	<div align="center">


		<label>Quantity: </label>

		<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;

		<button type="submit" class="add_to_cart" id="myButton">Add</button>

	</div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
</div>


</section>
</div>

</div>


</body>
</html>