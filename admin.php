<?php
session_start();
if(!isset($_SESSION['email'])){

	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="icon" href="res/im/bb.png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<title>BOOKWORM</title>

<style type="text/css">
		#logo{			
			width: 20.2%;
			float: left;
		}
		body{
			margin-left: 3em;
			margin-top: 3em;
			
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
	<img src="res/im/bb.png" width="100%">
</div>

<div id=login style="float: right;">

	<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
	       <?php echo "WELCOME ADMIN";?>
</div>
<br>

<div id="header"> <h2>Select from below</h2> </div>
<center><a href="op.php" style="text-decoration: none;">
<div class="container">
  <img src="res/im/kid1.gif" alt="Snow" style="width:100%">
  <button class="btn">All options</button>
</div></a></center> <br> <br>

<center><a href="inp.php" style="text-decoration: none;">
<div class="container">
  <img src="res/im/bb1.gif" alt="Snow1" style="width:100%">
  <button class="btn">Main page</button>
</div></a></center> <br>

</body>
</html>