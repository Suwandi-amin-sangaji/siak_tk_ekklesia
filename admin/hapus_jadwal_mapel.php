<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE from tb_jadwal_mapel where id_jadwal_mapel= '$id'");

header("location:jadwal_mapel.php?pesan=hapus");
