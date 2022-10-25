<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "db_tk";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (!$koneksi) {
	die("Koneksi gagal:" . mysqli_connect_error());
}