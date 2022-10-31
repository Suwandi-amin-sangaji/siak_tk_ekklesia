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
                        <h4 class="header-title">Pengumuman</h4>
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
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah</i>
                                </button>
                            </div>
                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>keterangan</th>
                                        <th>file</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pengumuman");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($query)) { ?>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['judul'] ?></td>
                                        <td><?php echo $data['tanggal_mulai'] ?></td>
                                        <td><?php echo $data['tanggal_akhir'] ?></td>
                                        <td><?php echo $data['deskripsi'] ?></td>
                                        <td><?php echo $data['file'] ?></td>
                                        <td>
                                            <a href="edit_pengumuman.php?id=<?php echo $data['id_pengumuman'] ?>" class="btn btn-success"> Edit</a>
                                            <a class="btn btn-danger" href="hapus_pengumuman.php?id=<?php echo $data['id_pengumuman'] ?>">Hapus</a>
                                        </td>
                                </tbody>
                            <?php } ?>
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
                <h5 class="modal-title">Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="aksi-info.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Judul </label>
                        <input type="text" class="form-control" placeholder="Masukkan judul" id="judul" name="judul" required></input>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Mulai </label>
                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required></input>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Berakhir </label>
                                <input type="date" class="form-control" placeholder="Masukkan tanggal_akhir" id="tanggal_akhir" name="tanggal_akhir" required></input>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea class="form-control" placeholder="Masukkan keterangan" name="deskripsi" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File</label>
                        <input type="file" class="form-control" id="file" name="file" required />
                        <p class="text-red">Format file harus pdf,Dox,txt. Max size 2 MB.</p>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" id="kirim" name="kirim" value="kirim">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a href="kegiatan-tk.php" class="btn btn-info">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php include 'include/footer.php'; ?>