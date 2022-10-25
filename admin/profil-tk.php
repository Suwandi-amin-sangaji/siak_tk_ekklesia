<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pb-4">
                    <div class="list-group">
                        <div class="list-group-item shadow-sm bold">
                            Profile TK Ekklesia
                        </div>

                        <div class="list-group-item shadow-sm">
                            <?php
                            $query = "SELECT * FROM tb_profil";
                            $data = mysqli_query($koneksi, $query);
                            $row = mysqli_fetch_assoc($data);
                            ?>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img src="profiletk/6008e6c90f273.jpg" class="rounded mb-3 img-thumbnail">
                                </div>
                                <div class="col-sm-8">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col-3">Nama Web</div>
                                                <div class="col-9"><?php echo $row['nama_web']; ?></div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col-3">No Hp</div>
                                                <div class="col-9"><?php echo $row['no_hp']; ?></div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col-3">Email</div>
                                                <div class="col-9"><?php echo $row['email']; ?></div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col-3">Alamat</div>
                                                <div class="col-9"><?php echo $row['alamat']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>