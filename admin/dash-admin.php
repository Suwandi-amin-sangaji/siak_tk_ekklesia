<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3 mt-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <?php
                                    // mengambil data siswa
                                    $data_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa");

                                    // menghitung data siswa
                                    $total_siswa = mysqli_num_rows($data_siswa);
                                    ?>
                                    <div class="seofct-icon"><i class="ti-user"></i> Total Siswa</div>
                                    <h2><?php echo $total_siswa; ?></h2>
                                </div>
                                <canvas id="seolinechart1" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg2">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <?php
                                    // mengambil data guru
                                    $data_guru = mysqli_query($koneksi, "SELECT * FROM tb_guru");

                                    // menghitung data guru
                                    $total_guru = mysqli_num_rows($data_guru);
                                    ?>
                                    <div class="seofct-icon"><i class="ti-user"></i> Total Guru</div>
                                    <h2><?php echo $total_guru ?></h2>
                                </div>
                                <canvas id="seolinechart2" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <?php
                                    // mengambil data guru
                                    $data_aktif = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_status = '1' ORDER BY id_siswa ASC");

                                    // menghitung data guru
                                    $total_aktif = mysqli_num_rows($data_aktif);
                                    ?>
                                    <div class="seofct-icon"><i class="ti-user"></i>Siswa Aktif</div>
                                    <h2><?php echo $total_aktif ?></h2>
                                </div>
                                <canvas id="seolinechart1" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg2">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <?php
                                    // mengambil data guru
                                    $data_lulus = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_status = '3' ORDER BY id_siswa ASC");

                                    // menghitung data guru
                                    $total_lulus = mysqli_num_rows($data_lulus);
                                    ?>
                                    <div class="seofct-icon"><i class="ti-user"></i>Siswa Lulus</div>
                                    <h2><?php echo $total_lulus ?></h2>
                                </div>
                                <canvas id="seolinechart2" height="50"></canvas>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <h1>TK EKLESIA</h1>
                                <p>KOTA SORONG</p>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "include/footer.php"; ?>