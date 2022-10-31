<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="container-fluid bg-website">
    <div class="pt-4">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pb-4">
                        <div class="list-group">
                            <div class="list-group-item shadow-sm bold">
                                Profile TK Ekklesia
                            </div>
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
                            <div class="list-group-item shadow-sm">
                                <?php
                                include 'koneksi.php';
                                $username = $_SESSION['username'];
                                $data = mysqli_query($koneksi, "SELECT * FROM tb_profil");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top" src="profiltk/tk.png" width="20%"
                                                    alt="Card image cap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="update-profil.php" method="POST">
                                            <input type="text" hidden name="id" id="id"
                                                value="<?php echo $row['id']; ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Web</label>
                                                <input name="nama_web" type="text" class="form-control"
                                                    value="<?php echo $row['nama_web'] ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input name="email" type="text" class="form-control"
                                                    value="<?php echo $row['email'] ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input name="alamat" type="text" class="form-control"
                                                    value="<?php echo $row['alamat'] ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">No_Hp</label>
                                                <input name="no_hp" type="text" class="form-control"
                                                    value="<?php echo $row['no_hp'] ?>" required>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" class="btn btn-primary"
                                                    value="Update">
                                            </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "include/footer.php"; ?>