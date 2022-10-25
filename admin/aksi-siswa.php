<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$ttl = $_POST['ttl'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$anak_ke = $_POST['anak_ke'];
$hubungan_keluarga = $_POST['hubungan_keluarga'];
$pend_terakhir_ayah = $_POST['pend_terakhir_ayah'];
$pend_terakhir_ibu = $_POST['pend_terakhir_ibu'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$tapel = $_POST['tapel'];

//upload gambar
$foto = upload();
if (!$foto) {
    return false;
}

$kelompok = $_POST['kelompok'];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO `tb_siswa`(`username`, `nama_lengkap`, `kelompok`, `ttl`, `jenkel`, `agama`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `anak_ke`, `hubungan_keluarga`, `pend_terakhir_ayah`, `pend_terakhir_ibu`, `alamat`, `email`, `telp`, `tapel`, `foto`) VALUES ('','$username','$nama_lengkap','$kelompok','$ttl','$jenkel','$agama','$nama_ayah','$pekerjaan_ayah','$nama_ibu','$pekerjaan_ibu','$anak_ke','$hubungan_keluarga','$pend_terakhir_ayah','$pend_terakhir_ibu','$alamat','$email','$telp','$tapel','$foto')");


function upload()
{
    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih Foto terlebih dahulu!');
        </script>";
        return false;
    }

    //cek ekstensi foto
    $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFoto = explode('.', $namaFoto);
    $ekstensiFoto = strtolower(end($ekstensiFoto));
    if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
        echo "<script>
        alert('File yang Anda Upload bukan Foto/Gambar!');
        </script>";
        return false;
    }

    //cek ukuran foto
    if ($ukuranFoto > 2000000) {
        echo "<script>
        alert('Ukuran File Maks 2 MB!');
        </script>";
        return false;
    }

    //generate nama foto
    $namaFotoBaru = uniqid();
    $namaFotoBaru .= '.';
    $namaFotoBaru .= $ekstensiFoto;

    //gambar di upload
    move_uploaded_file($tmpName, 'fotosiswa/' . $namaFotoBaru);
    return $namaFotoBaru;
}

header("location:siswa.php?pesan=berhasil");
