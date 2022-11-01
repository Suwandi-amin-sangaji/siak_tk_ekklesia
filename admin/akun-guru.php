<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Akun Guru</h4>
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
                            <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah Akun Guru</i>
                            </button>
                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $data = mysqli_query($koneksi, "SELECT * from tb_user where level='Guru'");
                                    $nomor = 1;
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $d['username']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="detail-akunguru.php?id=<?php echo $d['id']; ?>">Detail</a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"
                                                href="hapus-akunguru.php?id=<?php echo $d['id']; ?>">Hapus</a>
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
                <h5 class="modal-title">Input Akun Guru</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="aksi-akunguru.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input name="username" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="level">Status</label>
                        <select id="level" name="level" class="form-control">
                            <option>Guru</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
            </div>
            </form>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>