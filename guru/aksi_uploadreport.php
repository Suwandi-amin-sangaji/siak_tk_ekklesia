<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tgl_report = $_POST['tgl_report'];
$nama_siswa = $_POST['nama'];
$no_induk = $_POST['no_induk'];
$kelas = $_POST['kelas'];
$laporan = $_POST['laporan'];

// menginput data ke database
mysqli_query($koneksi, "INSERT tb_report VALUES('$tgl_report', '$no_induk', '$nama_siswa','$kelas', '$laporan')");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_report.php?pesan=input");
