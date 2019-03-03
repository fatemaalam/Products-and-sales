<?php
 session_start();
 if(isset($_SESSION['email'])){
	 header("Location: inp.php");
 }
?>
 <html>
 <head>

<link rel="stylesheet" href="css/head.css">
<link rel="icon" href="res/im/w.png" sizes="15x15">

<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<script type="text/javascript" src="scripts/signupForm.js"></script>
<script type="text/javascript" src="scripts/loginForm.js"></script>
<title>BOOKWORM</title>
<style>
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
.button1 {
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

</style>
</head>
<body>

<h1><center><img src="res/im/bb.gif"></center></h1>



<form name="signupForm" method="post" action="profile.php" id="signup">
<table align="right"> 
<tr>
	<td align="center" colspan="2">
		<h2>Not have an account? Fillup below</h2>
	</td>
</tr>
<tr>
	<td>
		<input type="text" name="username" placeholder="Enter Username" required>	
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type="email" name="email" placeholder="Enter Email" required>
	</td>
</tr>
<tr>	
	<td colspan="2">
		<input type="password" name="password" placeholder="Enter Password" required>
	</td>
</tr>
<tr>
<td colspan="2">
	<input type="submit" name="signup" value="Sign Up" class="button1">
</td>
</tr>

</table>
</form>

<div id="login">

<form name="loginForm" method="post" action="logi.php">

<table align="left" width="100%">
<tr>
	<td align="center">
		<h2>Have Account? Login below</h2>
	</td>
</tr>
<tr>	
	<td>
		<input type="text" name="email" id="email" placeholder="Enter Email id" required>
	</td>	
</tr>
<br>
<tr>	
  <td>
	<input type="password" name="password" id="password" placeholder="Enter Password" required>
  </td>
</tr>
<tr>
	<td>
		<input type="submit" name="login" value="Login" class="button">
	</td>
</tr>
</table>
</form>
</div>

</body>
</html>