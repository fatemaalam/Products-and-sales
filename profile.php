<?php
	session_start();

	$db = mysqli_connect("localhost", "root", "" ,"book");
	if(isset($_POST['signup'])) {

		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password = ($_POST['password']);
		$sql;
		$password=md5($password);
		
if (!$db) {

    die(" Connection failed to database " . mysqli_connect_error());
}
$sql = "Insert into users(username,email,password) values ('$username','$email','$password')";

if (mysqli_query($db, $sql)) 
{
	echo '<script type="text/javascript">prompt("New user added");</script>';
	header("Location:http://localhost/project/index.php");
} 

else 
{
	
	echo '<script type="text/javascript">prompt("Error while adding");</script>';
	header("Location:http://localhost/project/index.php");
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
		