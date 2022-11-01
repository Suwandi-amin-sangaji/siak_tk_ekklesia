<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");
// enkripsi password
$password = md5($_POST["password"]);
$level = $_POST["level"];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_user VALUES('$username', '$email', '$password', '$level')");


// mengalihkan halaman kembali ke tampil_data.php
header("location:akun-guru.php?pesan=berhasil");