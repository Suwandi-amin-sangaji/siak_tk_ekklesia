<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE from tb_profil where id= '$id'");

header("location:profil-tk.php?pesan=hapus");