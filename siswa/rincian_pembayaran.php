<?php session_start();
if (isset($_SESSION['status'])) { ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>

<body id="page-top">
    <!-- End of Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-3">
                <h4 class="text-center">Rincian Pembayaran</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-10 offset-sm-1">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "select * from tb_rincianbayar");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                <form id="form" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Baju Seragam:</label>
                                <input type="text" class="form-control" value="Rp. <?php echo $d['biaya_seragam']; ?>"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Sampul Raport:</label>
                                <input type="text" class="form-control" value="Rp. <?php echo $d['raport']; ?>"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Iuran IGTKI Anak Untuk 12 Bulan:</label>
                                <input type="text" class="form-control" value="Rp. <?php echo $d['iuran']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Biaya Buku:</label>
                                <input type="text" class="form-control" value="Rp. <?php echo $d['biaya_buku']; ?>"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Total yang Harus Di Transfer:</label>
                                <?php $jumlah = $d['biaya_seragam'] + $d['iuran'] + $d['raport'] + $d['biaya_buku']; ?>
                                <input type="text" class="form-control" value="Rp. <?php echo "$jumlah"; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold">Silahkan melakukan pembayaran pada No. Rekening berikut!
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>No. Rekening:</label>
                                    <input type="text" class="form-control" value="<?php echo $d['no_rekening']; ?>"
                                        readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <div class="col-sm-10">
                                <a download="<?php echo $d['file_biaya'] ?>" class="btn btn-success"
                                    href="../admin/rincianbayar/<?php echo $d['file_biaya'] ?>">Download</a>
                                <a href="upload_pembayaran.php" class="btn btn-primary">OK</a>
                            </div>
                        </div>
                </form>
                <?php } ?>
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