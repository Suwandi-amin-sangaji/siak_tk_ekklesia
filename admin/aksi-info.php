<?php
include "koneksi.php";

$judul = $_POST['judul'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_akhir = $_POST['tanggal_akhir'];
$deskripsi = $_POST['deskripsi'];
$file = $_FILES['file']['name'];

//cek dulu jika merubah gambar produk jalankan coding ini
if ($file != "") {
    $ekstensi_diperbolehkan = array('pdf', 'docx', 'doc'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $file); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['file']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $file_baru = $angka_acak . '-' . $file; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'file/' . $file_baru); //memindah file gambar ke folder gambar

        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "INSERT INTO tb_pengumuman (judul,tanggal_mulai,tanggal_akhir,deskripsi,file) values
        ('$judul','$tanggal_mulai','$tanggal_akhir','$deskripsi','$file_baru')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='info.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi file yang boleh hanya pdf dan docx.');window.location='info.php';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "INSERT INTO tb_pengumuman (judul,tanggal_mulai,tanggal_akhir,deskripsi,file) values
    ('$judul','$tanggal_mulai','$tanggal_akhir','$deskripsi',null)";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='info.php';</script>";
    }
}
