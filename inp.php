<?php
session_start();
if(!isset($_SESSION['email'])){

	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="res/im/w.png" sizes="15x15">
<link rel="stylesheet" type="text/css" href="css/fandom.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<title>BOOKWORM</title>
<style type="text/css">
.button {
  background-color: #008CBA; /* blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
		#logo{		
		float: left;	
			width: 25%;
			
		}
		body{
			margin-top: 4em;
			margin-left: 4em;
		}
		.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
	</style>
</head>

<body bgcolor=black>
<div id="logo">
	<img src="res/im/w.png" width="101%">
</div>

<div id=login>
	<h2><?php echo "WELCOME";?></h2>

<?php echo $_SESSION['email'];?><br> 

	<a href="destroy.php"><button id="logoutButton" class="button">LOGOUT</button></a><br><br><br>
    
</div>
<br>

<div id="header"> <h1>>Category<</h1></div>
<center><a href="kid.php" style="text-decoration: none;">
<div class="container">
  <img src="res/im/kid.gif" alt="Snow" style="width:100%">
  <button class="btn">Kids Book</button>
</div></a></center> <br> <br>

<center><a href="teen.php" style="text-decoration: none;">
<div class="container">
  <img src="res/im/teen.jpg" alt="Snow1" style="width:100%">
  <button class="btn">Teenagers Book</button>
</div></a></center> <br> 

</body>
</html>