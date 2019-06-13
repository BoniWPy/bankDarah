<?php 

session_start(); // Digunakan untuk memulai session

$host = "10.0.1.5"; // nama host anda
$user = "dbuser"; // username dari host anda
$pass = "Hash2856"; //password dari host anda
$db   = "bank_darah"; // nama database yang anda miliki

try {
	$connect = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>