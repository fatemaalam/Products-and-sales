<?php
	session_start();
    include_once("db.php");

			//$code = ($_POST['prod_code']);
	$price = ($_POST['price']);
$prod_code = ($_POST['prod_code']);
$prod_name = ($_POST['prod_name']);
//$product_qty = ($_POST['product_qty']);



//product_name
//product_qty

	
//$sql = "DELETE FROM sales WHERE prod_code='".$code."'"; 

$sql = "UPDATE sales SET price = '".$price."' , prod_name = '".$prod_name."' WHERE prod_code = '".$prod_code."' ";

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("product updated");</script>';
	header("Location:http://localhost/project/addpe.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such Product Exists");</script>';
	header("Location:http://localhost/project/addpe.php");

}

?>
	