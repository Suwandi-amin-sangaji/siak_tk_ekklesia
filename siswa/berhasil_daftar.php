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
                            <h6 class="m-0 font-weight-bold text-primary">Anda Berhasil Melakukan Pendaftaran</h6>
                        </div>
                        <div class="card-body text-center my-5 text-align">
                            <h4>Terimakasih telah mendaftar di TK EKKLESIA.</h4>
                            <h4>Mohon segera melakukan pembayaran melalui Bank atau ATM terdekat !</h4>
                        </div>
                        <div class="modal-footer my-2">
                            <a href="rincian_pembayaran.php" class="btn btn-dark">OK</a>
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
                window.location='../index.php';  
                </script>";
}
    ?>