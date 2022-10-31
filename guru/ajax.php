<?php
include "koneksi.php";
$siswa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_siswa where no_induk='$_GET[no_induk]'"));
$data = array(
    'no_induk'     =>  $siswa['no_induk'],
    'nama'      =>  $siswa['nama'],
    'kelas'           =>  $siswa['kelas'],
);
echo json_encode($data);
