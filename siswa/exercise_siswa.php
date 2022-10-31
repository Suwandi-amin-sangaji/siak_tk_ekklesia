<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>


<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Materi</h4>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="text-right">
                                    <a class="btn btn-success mb-5" href="print_jadwal.php"><i class="fa fa-file-pdf-o"></i> Cetak</a>
                                </div>
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Materi</th>
                                            <th>Ketrengan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from tb_jadwal_mapel");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                    <?php
                                                    if ($d['id_hari'] == 1) {
                                                        echo "Senin";
                                                    } elseif ($d['id_hari'] == 2) {
                                                        echo "Selasa";
                                                    } elseif ($d['id_hari'] == 3) {
                                                        echo "Rabu";
                                                    } elseif ($d['id_hari'] == 4) {
                                                        echo "Kamis";
                                                    } elseif ($d['id_hari'] == 5) {
                                                        echo "Jumat";
                                                    } else {
                                                        echo "Sabtu";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $d['materi_kegiatan']; ?></td>
                                                <td><?php echo $d['keterangan']; ?></td>

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

<?php include 'include/footer.php'; ?>