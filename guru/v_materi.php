<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<!-- Pendaftaran -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi Siswa</h6>

        </div>
        <div class="card-body">
            <div class="tambahdata text-right">
                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah Materi</i>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari, Tanggal</th>
                            <th>Kelompok</th>
                            <th>Tema</th>
                            <th>Materi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_akademik");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['tanggal']; ?></td>
                            <td><?php echo $d['kel_materi']; ?></td>
                            <td><?php echo $d['tema']; ?></td>
                            <td><?php echo $d['materi']; ?></td>
                            <td>
                                <a class="btn btn-info"
                                    href="edit_materi.php?id_materi=<?php echo $d['id_materi']; ?>">Edit</a>
                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"
                                    href="hapus_materi.php?id_materi=<?php echo $d['id_materi']; ?>">Hpaus</a>
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
                <h5 class="modal-title">Input Materi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="aksi_uploadmateri.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kel_materi" class="col-sm-2 col-form-label">Kelompok :</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="kel_materi" name="kel_materi">
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tema" class="col-sm-2 col-form-label">Tema :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="materi" class="col-sm-2 col-form-label">Upload Materi :</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="materi" name="materi" required>
                            <p>Format file docx, pdf, ppt, atau xls. Max size 10 MB!</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-dark">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php include "include/footer.php"; ?>