<?php

$koneksi = mysqli_connect("localhost", "root", "root", "db_tk");

// Check connection
if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}