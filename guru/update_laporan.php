<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tgl_report = $_POST['tgl_report'];
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$laporan = $_POST['laporan'];


// update data ke database
mysqli_query($koneksi, "UPDATE tb_report SET tgl_report='$tgl_report',no_induk='$no_induk', nama_siswa='$nama_siswa', kelas='$kelas',  laporan='$laporan' WHERE no_induk='$no_induk'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:v_report.php?pesan=update");
