<?php
	session_start();
    include_once("db.php");

			$code = ($_POST['prod_code']);
	
	
$sql = "DELETE FROM sales WHERE prod_code='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("product Deleted");</script>';
	header("Location:http://localhost/project/removep.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such Product Exists");</script>';
	header("Location:http://localhost/project/removep.php");

}

?>
		