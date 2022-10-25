<?php

session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id
	$result = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE id='$id'");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key === md5($row['username'])) {
		$_SESSION['login'] = true;
	}
}

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// menyeleksi data admin dengan username dan password yang sesuai
$user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password' ");
$tes = mysqli_fetch_assoc($user);

if ((isset($_POST['submit']))) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	$_SESSION[$tes['level']] = true;

	$level = $tes['level'];
	if ($level == "Siswa") {
		header("location:siswa/dash_siswa.php");
	} else if ($level == "Guru") {
		header("location:guru/dash_guru.php");
	} else if ($level == "Admin") {
		header("location:admin/dash-admin.php");
	} else {
		header("location:login/login.php?pesan=gagal");
	}
	$_SESSION["login"] =  true;
	// cek remember me
	if (isset($_POST['rememberme'])) {
		//buat cookie
		setcookie('id', $row['id'], time() + 3600);
		setcookie('key', hash('sha256', $row['username']), time() + 3600);
	}

	// header("location:login.php?login=berhasil");
} else {
	header("location:login/login.php?pesan=gagal");
}
// mengaktifkan session pada php
// session_start();
// // menghubungkan php dengan koneksi database
// include 'koneksi.php';
// // menangkap data yang dikirim dari form login
// if (isset($_POST['submit'])) {

// 	$username = $_POST['username'];
// 	$password = md5($_POST['password']);
// 	// menyeleksi data user dengan username dan password yang sesuai
// 	// $conn sesuaikan dengan nama variabel yang kalian buat saat membuat koneksi ke database
// 	$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
// 	// menghitung jumlah data yang ditemukan
// 	$cek = mysqli_num_rows($login);
// 	// cek apakah username dan password di temukan pada database
// 	if ($cek > 0) {
// 		$data = mysqli_fetch_assoc($login);
// 		$_SESSION[$tes['level']] = true;

// 		$level = $tes['level'];
// 		// cek jika user login sebagai admin
// 		if ($data['level'] == "admin") {
// 			// buat session login dan username
// 			$_SESSION['username'] = $username;
// 			$_SESSION['password'] = $password;
// 			$_SESSION['email']       = $data['email'];
// 			$_SESSION['level']    = "admin";
// 			// alihkan ke halaman dashboard admin
// 			header("location:admin/dash-admin.php");
// 			// cek jika user login sebagai pegawai
// 		} else if ($data['level'] == "guru") {
// 			// buat session login dan username
// 			$_SESSION['username'] = $username;
// 			$_SESSION['password'] = $password;
// 			$_SESSION['email']       = $data['email'];
// 			$_SESSION['level'] = "guru";
// 			// alihkan ke halaman dashboard pegawai
// 			header("location:guru/dash_guru.php");
// 			// cek jika user login sebagai pengurus
// 		} else if ($data['level'] == "siswa") {
// 			// buat session login dan username
// 			$_SESSION['username'] = $username;
// 			$_SESSION['password'] = $password;
// 			$_SESSION['email']       = $data['email'];
// 			$_SESSION['level'] = "siswa";
// 			// alihkan ke halaman dashboard pengurus
// 			header("location:siswa/dash_siswa.php");
// 		} else {
// 			header("location:login/login.php?pesan=gagal");
// 		}
// 	}
// }