<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>
<!-- Pendaftaran -->
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Pembayaran</h4>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelompok</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $data = mysqli_query($koneksi, "select * from tb_pembayaran");
                                        $nomor = 1;
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $d['nama_siswa']; ?></td>
                                                <td><?php echo $d['kelompok']; ?></td>
                                                <td><?php echo $d['status']; ?></td>
                                                <td>
                                                    <a class="btn btn-success" href="detail_pembayaran.php?id=<?php echo $d['id']; ?>">Cetak</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>