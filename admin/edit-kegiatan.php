<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class=" bg-white">
    <div class="row">
        <div class="col-sm-10 offset-sm-1 bg-gradient-info text-center text-white">
            <h4>Edit Kegiatan</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_kegiatan where id = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form action="update-kegiatan.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                <input type="hidden" name="fotoLama" value="<?php echo $data['foto'] ?>" />
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">Foto :</label>
                    <div class="col-sm-9">
                        <img src="fotokegiatan/<?= $data['foto']; ?>" width="200">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input type="file" name="foto" id="foto">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="deskripsi"
                            name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                </div>

                <!-- Buttom -->
                <div class="buttom">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>