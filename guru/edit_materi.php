<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Materi Pembelajaran</h4>
            <?php
            include "koneksi.php";
            $id_materi = $_GET['id_materi'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_akademik where id_materi = '$id_materi'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form action="update_materi.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_materi" value="<?php echo $data['id_materi'] ?>">
                <input type="hidden" name="materiLama" value="<?php echo $data['materi'] ?>">
                <div class=" form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="<?php echo $data['tanggal']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kel_materi" class="col-sm-2 col-form-label">Kelompok :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="kel_materi" name="kel_materi"
                            value="<?php echo $data['kel_materi']; ?>">
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tema" class="col-sm-2 col-form-label">Tema :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tema" name="tema"
                            value="<?php echo $data['tema']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="materi" class="col-sm-2 col-form-label">Upload Materi :</label>
                    <div class="col-sm-5">
                        <?php echo $data['materi'] ?>
                        <input type="file" name="materi" id="materi">
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