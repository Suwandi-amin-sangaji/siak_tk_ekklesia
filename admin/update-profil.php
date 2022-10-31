<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama_web'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_profil SET nama_web = '$nama', email='$email', alamat='$alamat', no_hp = '$no_hp' WHERE id='$id'");

if ($update) {
    // mengalihkan halaman kembali ke tampil_data.php
    header("location:profil-tk.php?pesan=berhasil");
} else {
    header('location:profil-tk.php?pesan=gagal');
}