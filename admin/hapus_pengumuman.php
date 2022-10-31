<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE from tb_pengumuman where id_pengumuman='$id'");

header("location:info.php?pesan=hapus");
