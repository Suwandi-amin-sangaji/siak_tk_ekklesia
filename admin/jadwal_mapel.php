<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Siswa</h4>
                        <?php if (isset($_GET['pesan'])) {
                        ?>
                            <?php if ($_GET['pesan'] == "berhasil") {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Berhasil!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                            <?php } elseif ($_GET['pesan'] == "gagal") {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Gagal!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                            <?php } elseif ($_GET['pesan'] == "ekstensi") {
                            ?>
                                <div class="alert alert-warning" role="alert">
                                    Ekstensi File Harus PNG Dan JPG
                                </div>
                            <?php } elseif ($_GET['pesan'] == "size") {
                            ?>
                                <div class="alert alert-warning" role="alert">
                                    Size File Tidak Boleh Lebih Dari 2 MB
                                </div>
                            <?php } elseif ($_GET['pesan'] == "hapus") {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Berhasil Menghapus</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                            <?php } elseif ($_GET['pesan'] == "gagalhapus") {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Gagal !</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <div class="data-tables">
                            <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah</i>
                            </button>
                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Materi Kegiatan</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM tb_jadwal_mapel ");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php
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
                                                ?></td>
                                            <td><?php echo $d['materi_kegiatan']; ?></td>
                                            <td><?php echo $d['keterangan']; ?></td>
                                            <td>
                                                <a class="btn btn-info" href="edit_jadwal_mapel.php?id=<?php echo $d['id_jadwal_mapel']; ?>">Edit</a>
                                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus_jadwal_mapel.php?id=<?php echo $d['id_jadwal_mapel']; ?>">Hapus</a>
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

<!-- MODAL ADD -->
<div class="modal fade bd-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="aksi_jadwal_mapel.php" method="POST">
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
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>





    <?php include "include/footer.php"; ?>