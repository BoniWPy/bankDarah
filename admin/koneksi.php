<?php
$host = "10.0.1.5"; // Nama hostnya
$username = "dbuser"; // Username
$password = "Hash2856"; // Password (Isi jika menggunakan password)
$database = "bank_darah"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

$koneksi = mysql_connect ($host,$username, $password)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($database)
			or die ('gagal terhubung ke database'.mysql_error());
?>