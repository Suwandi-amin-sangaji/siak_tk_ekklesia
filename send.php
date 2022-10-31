<?php
include "koneksi.php";
$query = mysqli_query($koneksi, 'SELECT * FROM tb_profil');
$row = mysqli_fetch_assoc($query);
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $pesan = $_POST['pesan'];
    // $NoWA = $_POST['NoWA'];
    header("location:https://api.whatsapp.com/send?phone=$row[no_hp]&text=Nama:%20$nama%0AEmail:%20$email%0ANomor_HP:%20$no_hp%0APesan:%20$pesan");
} else {
    echo "
    <script>
        window.location=history.go(-1);
        </script>
    ";
}
