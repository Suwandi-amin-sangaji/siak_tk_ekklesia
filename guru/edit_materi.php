<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Jadwal Pembelajaran</h4>
            <?php
            include "koneksi.php";
            $id_materi = $_GET['id_materi'];
            $query_mysql = mysqli_query($koneksi, "SELECT * from tb_jadwal_mapel where id_jadwal_mapel = '$id_materi'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form action="update_materi.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_materi" value="<?php echo $data['id_jadwal_mapel'] ?>">
                <div class=" form-group  mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Hari :</label>
                    <input type="text" class="form-control" id="id_hari" name="id_hari"
                        value="<?php echo $data['id_hari']; ?>">
                </div>
                <div class="input-group mb-3">
                    <label for="materi">Materi Kegitaan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi Kegiatan"
                            required="" value="<?php echo $data['materi_kegiatan'] ?>">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="keterangan">Keterangan</label>
                    <div class="input-group">
                        <textarea class="form-control" name="keterangan"
                            aria-label="With textarea"><?php echo $data['keterangan'] ?></textarea>
                    </div>
                </div>
                <div class="buttom col-sm-12 ">
                    <button type="submit" class="btn btn-primary">update</button>
                    <a href="v_materi.php" class="btn btn-danger"> Kembali</a>
                </div>

            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>