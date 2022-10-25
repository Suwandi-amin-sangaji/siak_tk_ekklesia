<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<!-- Pendaftaran -->
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Detail Guru</h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Rekening</th>
                                <th>Biaya Seragam</th>
                                <th>Sampul Raport</th>
                                <th>Iuran IGTKI</th>
                                <th>Biaya Buku</th>
                                <th>Total</th>
                                <!-- <th>File Rincian Bayar</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $data = mysqli_query($koneksi, "select * from tb_rincianbayar");
                            $nomor = 1;
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $d['no_rekening']; ?></td>
                                <td>Rp.<?php echo $d['biaya_seragam']; ?></td>
                                <td>Rp.<?php echo $d['raport']; ?></td>
                                <td>Rp.<?php echo $d['iuran']; ?></td>
                                <td>Rp.<?php echo $d['biaya_buku']; ?></td>
                                <td>
                                    <?php
                                        $jumlah = $d['biaya_seragam'] + $d['raport'] + $d['iuran'] +  $d['biaya_buku'];
                                        echo "Rp.$jumlah";
                                        ?>
                                </td>
                                <!-- <td><?php echo $d['file_biaya']; ?></td> -->
                                <td>
                                    <a class="btn btn-info"
                                        href="edit-rincianbayar.php?no_rekening=<?php echo $d['no_rekening']; ?>">Edit
                                    </a>
                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"
                                        href="hapus-rincianbayar.php?no_rekening=<?php echo $d['no_rekening']; ?>">Hapus</a>
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
    <!-- /.container-fluid -->
    <?php include 'include/footer.php'; ?>