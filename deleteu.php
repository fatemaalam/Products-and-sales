<?php
	session_start();
    include_once("db.php");

			$code = ($_POST['id']);
	
	
$sql = "DELETE FROM users WHERE id='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("user Deleted");</script>';
	header("Location:http://localhost/project/removeu.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such user Exists");</script>';
	header("Location:http://localhost/project/removeu.php");

}

?>
		