<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Pengumuman</h4>
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "SELECT * from tb_pengumuman where id_pengumuman = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <div class="col-sm-10 offset-sm-1 my-5">
                    <form class="needs-validation" action="update_pengumuman.php" method="POST">
                        <div class="form-row">
                            <div class="input-group mb-3">
                                <input type="hidden" name="id" value="<?php echo $data['id_pengumuman'] ?>" />
                                <label for="keterangan">Judul</label>
                                <div class="input-group">
                                    <input class="form-control" name="judul" aria-label="With textarea" value="<?php echo $data['judul'] ?>"></input>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggal_mulai" placeholder="Materi Kegiatan" value="<?php echo $data['tanggal_mulai'] ?>">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <label for="tanggal_akhir">Tanggal Berakhir</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggal_akhir" placeholder="Materi Kegiatan" value="<?php echo $data['tanggal_akhir'] ?>">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <label for="keterangan">Keterangan</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="deskripsi" aria-label="With textarea"><?php echo $data['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <label for="keterangan">File :</label>
                                <div>
                                    <a href="file/<?php echo $data['file'] ?>"><?php echo $data['file'] ?></a>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="file" name="file"></input>
                                </div>
                                <small class="text-danger">Kosongkan Jika tidak ingin Mengganti File</small>
                            </div>
                        </div>
                        <button class=" btn btn-primary" type="submit" name="submit">Update</button>
                        <a class=" btn btn-danger" href="info.php" name="submit">Kembali</a>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>