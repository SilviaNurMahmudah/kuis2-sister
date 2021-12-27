<?php 

$servername = "172.20.0.2";
$username = "root";
$password = "admin";
$dbname="db_arsip2";

$koneksi = mysqli_connect('172.20.0.2', 'root', 'admin');
$db = mysqli_select_db($koneksi ,$dbname);

global $conn;
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
