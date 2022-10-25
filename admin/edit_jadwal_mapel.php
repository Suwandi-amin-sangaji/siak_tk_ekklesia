<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Mapel</h4>
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_jadwal_mapel where id_jadwal_mapel = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <div class="col-sm-10 offset-sm-1 my-5">
                    <form class="needs-validation" action="aksi_jadwal_mapel.php" method="POST">
                        <div class="form-row">
                            <div class="input-group mb-3">
                                <input type="hidden" name="id" value="<?php echo $data['id_jadwal_mapel'] ?>" />
                                <label for="keterangan">Hari</label>
                                <div class="input-group">
                                    <select class="form-control" name="id_hari">
                                        <option value="<?php echo $row['nama_hari'] ?>">Pilih Hari</option>
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
                                    <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi Kegiatan" value="<?php echo $data['materi_kegiatan'] ?>">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <label for="keterangan">Keterangan</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="keterangan" aria-label="With textarea"><?php echo $data['keterangan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <button class=" btn btn-primary" type="submit" name="submit">Update</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>