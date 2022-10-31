<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="container">
    <?php
    include "koneksi.php";
    $username = $_SESSION['username'];
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username='$username'");
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>

        <div class="card mt-5">
            <div class="card-body">
                <h4 class="header-title">Biodata Siswa</h4>
                <div class="row my-5 mx-5">
                    <div class="col-sm-4">
                        <label for="">Foto Siswa</label>
                        <div class="col-sm-8">
                            <?php
                            if ($data['foto_siswa'] == "") { ?>
                                <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:200;height:250;">
                            <?php } else { ?>
                                <img src="../admin/fotosiswa/<?= $data['foto_siswa']; ?>" style="width:200;height:250;">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <form class="needs-validation" novalidate="">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">No Induk</label>
                                    <input type="text" class="form-control" id="" placeholder="No Induk" value="<?php echo $data['no_induk']; ?>" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>" required="" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Kelas/Kelompok</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['kelas']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Tempat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value=" <?php echo $data['tempat_lahir']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value=" <?php echo $data['tanggal_lahir']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php
                                                                                                                            if ($data['jk'] == 1) {
                                                                                                                                echo "Laki-Laki";
                                                                                                                            } else {
                                                                                                                                echo "Perempuan";
                                                                                                                            }
                                                                                                                            ?>" readonly>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Agama</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['agama']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Nama Ayah</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ayah']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Nama Ibu</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ibu']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Anak ke</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['anak_ke']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Jumlh Saudara</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['jml_saudara']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Hubungan Keluarga</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['status_anak']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Alamat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['alamat']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">No Telfon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['no_telp']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Tanggal Pedaftaran</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php echo $data['tgl_pendaftaran']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Status Sekolah</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" value="<?php
                                                                                                                            if ($data['id_status'] == 1) {
                                                                                                                                echo "AKTIF";
                                                                                                                            } elseif ($data['id_status'] == 2) {
                                                                                                                                echo "TIDAK AKTIF";
                                                                                                                            } else {
                                                                                                                                echo "LULUS";
                                                                                                                            }
                                                                                                                            ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-warning" type="submit" href="dash_siswa.php">Kembali</a>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

<?php include 'include/footer.php'; ?>