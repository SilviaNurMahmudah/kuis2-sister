<?php 

$servername = "172.20.0.2";
$username = "root";
$password = "admin";
$dbname="db_arsip2";

global $conn;
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
