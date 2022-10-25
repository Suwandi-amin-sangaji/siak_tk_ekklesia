<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE from tb_siswa where id_siswa= '$id'");

header("location:siswa.php?pesan=hapus");