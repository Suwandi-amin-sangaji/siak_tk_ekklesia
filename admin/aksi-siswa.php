<?php
include "koneksi.php";

$no_induk = $_POST['no_induk'];
$tgl_pendaftaran = $_POST["tgl_pendaftaran"];
$nama = $_POST["nama"];
$nik = $_POST["nik"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jk = $_POST["jk"];
$agama = $_POST["agama"];

$anak_ke = $_POST["anak_ke"];
$jml_saudara = $_POST["jml_saudara"];
$status_anak = $_POST["status_anak"];

$nama_ibu = $_POST["nama_ibu"];
$nama_ayah = $_POST["nama_ayah"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];
$kode_pos = $_POST["kode_pos"];
$kelas = $_POST["kelas"];
$id_status = $_POST['id_status'];
$foto_siswa = $_FILES['foto']['name'];

//cek dulu jika merubah gambar produk jalankan coding ini
if ($foto_siswa != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_siswa); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_siswa; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'fotosiswa/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "INSERT INTO tb_siswa (no_induk ,tgl_pendaftaran,nama,nik,tempat_lahir,tanggal_lahir,jk,agama,anak_ke,jml_saudara,status_anak,nama_ibu,nama_ayah,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,kelas,username,password, foto_siswa) values
        ('$no_induk','$tgl_pendaftaran','$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$agama','$anak_ke','$jml_saudara','$status_anak','$nama_ibu','$nama_ayah','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$kelas','$username','$password','$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit_siswa.php';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "INSERT INTO tb_siswa (no_induk, tgl_pendaftaran ,nama,nik,tempat_lahir,tanggal_lahir,jk,agama,anak_ke,jml_saudara,status_anak,nama_ibu,nama_ayah,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,kelas,username,password, foto_siswa) values
    ('$no_induk','$tgl_pendaftaran','$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$agama','$anak_ke','$jml_saudara','$status_anak','$nama_ibu','$nama_ayah','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$kelas','$username','$password',null)";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
    }
}