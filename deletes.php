<?php
	session_start();
    include_once("db.php");

			$code = ($_POST['product_code']);
	
	
$sql = "DELETE FROM sale WHERE product_code='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("sale Deleted");</script>';
	header("Location:http://localhost/project/removes.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such sale Exists");</script>';
	header("Location:http://localhost/project/removes.php");

}

?>
		