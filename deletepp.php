<?php
	session_start();
    include_once("db.php");

			//$code = ($_POST['prod_code']);
	$price = ($_POST['price']);
$product_code = ($_POST['product_code']);
$product_name = ($_POST['product_name']);
$product_qty = ($_POST['product_qty']);



//product_name
//product_qty

	
//$sql = "DELETE FROM sales WHERE prod_code='".$code."'"; 

$sql = "UPDATE sale SET price = '".$price."' , product_name = '".$product_name."', product_qty = '".$product_qty."' WHERE product_code = '".$product_code."' ";

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("updated");</script>';
	header("Location:http://localhost/project/addse.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such sale Exists");</script>';
	header("Location:http://localhost/project/addse.php");

}

?>
	