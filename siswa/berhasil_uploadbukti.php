<?php session_start();
if (isset($_SESSION['status'])) { ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>

<body id="page-top" style="background-color: cornsilk;">
    <!-- End of Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="berhasil_daftar my-5">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4 my-5 bg-warning text-white">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Anda Berhasil Melakukan Upload Bukti
                                Pembayaran</h6>
                        </div>
                        <div class="card-body text-center my-5 text-align">
                            <h3 class="font-weight-bold">Terimakasih telah melakukan pembayaran!. </h3>
                            <h4>Mohon tunggu maksimas 3 x 24 jam <br> untuk mengetahui status pembayaran Anda.</h4>
                            <h4>Atau Bisa langung Ke Sekolah Untuk Konfirmasi Dan Melengkapi Data Yang di butuhkan</h4>
                            <br>
                            <h4>Atau Hubungi Wa 0822563000921</h4>

                        </div>
                        <!-- <div class="modal-footer my-2">
                            <a href="dash_siswa.php" class="btn btn-dark">OK</a>
                        </div> -->
                        <div class="modal-footer my-2">
                            <?php
                                include "koneksi.php";
                                $id = $_GET['id_siswa'];
                                $q = mysqli_query($koneksi, "SELECT * From tb_siswa WHERE id_siswa = $id");
                                $data = mysqli_fetch_assoc($q);
                                ?>
                            <a href="
                            https://api.whatsapp.com/send?phone=628981234567&text=Hai Admin%20<?php echo $data[''] ?>%20order%20gan
                            " class="btn btn-dark">Hubungi Sekolah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->
    <?php include "include/footer.php" ?>
    <?php
} else {
    echo "<script>
                alert('Silahkan login terlebih dahulu !')
                window.location='index.php';  
        </script>";
}
    ?>