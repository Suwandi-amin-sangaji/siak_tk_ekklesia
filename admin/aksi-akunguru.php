<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
// enkripsi password
$password = md5($_POST["password"]);
$level = $_POST['level'];


// menginput data ke database
mysqli_query($koneksi, "INSERT into tb_user values('', '$username', '$email', '$password', '$level')");


// mengalihkan halaman kembali ke tampil_data.php
header("location:akun-guru.php?pesan=berhasil");
