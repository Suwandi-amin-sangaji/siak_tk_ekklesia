<?php
include "koneksi.php";

$id_hari = $_POST['id_hari'];
$materi = $_POST['materi'];
$keterangan = $_POST['keterangan'];

$update = mysqli_query($koneksi, "INSERT INTO `tb_jadwal_mapel`(`id_hari`, `materi_kegiatan`, `keterangan`) VALUES ('$id_hari','$materi','$keterangan')");

if ($update) {
    header('location:v_materi.php?pesan=berhasil');
} else {
    header('location:v_materi.php?pesan=gagal');
}