<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<!-- Pendaftaran -->
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Siswa</h4>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Induk</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelompok</th>
                                            <th>Status Siswa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * from tb_siswa WHERE id_status = '1' OR id_status = '2' ORDER BY id_siswa DESC");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $d['no_induk']; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td><?php echo $d['jk']; ?></td>
                                                <td><?php echo $d['kelas']; ?></td>
                                                <td><?php
                                                    if ($d['id_status'] == 1) {
                                                        echo "AKTIF";
                                                    } elseif ($d['id_status'] == 2) {
                                                        echo "TIDAK AKTIF";
                                                    } else {
                                                        echo "LULUS";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="detail_siswa.php?id=<?php echo $d['id_siswa']; ?>">DETAIL</a>
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
<?php include "include/footer.php"; ?>