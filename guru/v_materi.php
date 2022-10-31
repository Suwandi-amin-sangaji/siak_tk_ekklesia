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
                        <h4 class="header-title">Data Jadwal Dan Materi</h4>
                        <div class="card-body">
                            <div class="tambahdata text-right">
                                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah Materi</i>
                                </button>
                            </div>
                            <div class="table-responsive">
                                <?php
                                if (isset($_GET['pesan'])) {
                                    $pesan = $_GET['pesan'];
                                    if ($pesan == "input") {
                                        echo "<div class='alert'>Materi berhasil di upload !</div>";
                                    } elseif ($pesan == "update") {
                                        echo "<div class='alert'>Materi berhasil di update !</div>";
                                    } elseif ($pesan == "hapus") {
                                        echo "<div class='alert'>Materi berhasil di hapus !</div>";
                                    }
                                }
                                ?> <br>
                                <table id="dataTable" class="table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Materi</th>
                                            <th>Ketrengan</th>
                                            <th>Action</th>
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
                                                <td>
                                                    <a class="btn btn-info" href="edit_materi.php?id_materi=<?php echo $d['id_jadwal_mapel']; ?>">Edit</a>
                                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus_materi.php?id_materi=<?php echo $d['id_jadwal_mapel']; ?>">Hpaus</a>
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



                <!-- MODAL ADD -->
                <div class="modal fade bd-example-modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Input Data Jadwal</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" action="aksi_uploadmateri.php" method="POST">
                                    <div class="form-row">
                                        <div class="input-group mb-3">
                                            <label for="keterangan">Hari</label>
                                            <div class="input-group">
                                                <select class="form-control" name="id_hari" required>
                                                    <option>Pilih Hari</option>
                                                    <?php $a = mysqli_query($koneksi, "SELECT * FROM tb_hari");
                                                    while ($b = mysqli_fetch_assoc($a)) {
                                                        echo "<option value='$b[id_hari]'>$b[nm_hari]</option>";
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <label for="materi">Materi Kegitaan</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi Kegiatan" required="">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="keterangan">Keterangan</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="keterangan" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.container-fluid -->
<?php include "include/footer.php"; ?>