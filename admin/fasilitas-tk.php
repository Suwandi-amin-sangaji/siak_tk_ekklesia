<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Kegiatan</h4>
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
                                <a href="cetak-guru.php" target="_blank" class="btn btn-success mb-3 pl-5 pr-5"><i class="fa fa-file-excel-o"> Cetak</i></a>
                            </div>
                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "select * from tb_fasilitas");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo "<img src='fotofasilitas/$d[foto]' width='100' height='100' />"; ?></td>
                                            <td><?php echo $d['deskripsi']; ?></td>
                                            <td>
                                                <a class="btn btn-info" href="edit-fasilitas.php?id=<?php echo $d['id']; ?>">Edit</a>
                                                <a onclick="return confirm('Yakin ingin mengHapus?')" class="btn btn-danger" href="hapus-fasilitas.php?id=<?php echo $d['id']; ?>">Hapus</a>
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
                <h5 class="modal-title">Input Data Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="aksi-kegiatan.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Pilih Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto" required />
                        <p class="text-red">Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea class="form-control" placeholder="Masukkan Deskripsi" id="deskripsi" name="deskripsi" required></textarea>
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