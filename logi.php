<?php
session_start();

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	$email=filter($_POST['email']);
	$password=filter($_POST['password']);
	$password=md5($password);
	
$db = mysqli_connect("localhost","root","","book") or die("Sorry, NO Database found");

	$query ="SELECT * FROM users WHERE email ='".$email."' AND password='".$password."' ";
	$result = mysqli_query($db,$query);

	if (mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);

		$_SESSION['email']=$email;	
	}
	else
	{
		echo '<script type="text/javascript"> alert("Wrong password");
		</script>';
	}
}

if(isset($_SESSION['email'])){

	$email = $_SESSION['email'];

	if($email=='admin@gmail.com'){

	header("Location: admin.php");
	}

	else {header("Location: inp.php");}
	
}

function filter($str)
{
	 trim($str);

	 htmlspecialchars($str);
	return($str);
}

?>