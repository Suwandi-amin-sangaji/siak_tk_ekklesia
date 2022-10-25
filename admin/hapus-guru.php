<?php
include 'koneksi.php';
$nip = $_GET['nip'];
mysqli_query($koneksi, "DELETE from tb_pegawai where nip= '$nip'");

header("location:data-guru.php?pesan=hapus");