<?php


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "book";
$shipping_cost= 120;
					
$mysqli = new mysqli($db_host, $db_user, $db_pass,$db_name);

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>