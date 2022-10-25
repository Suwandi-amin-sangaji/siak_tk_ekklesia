<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Detail Siswa</h4>
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_siswa where id = '$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form class="needs-validation" novalidate="">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Nis</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                            value="<?php echo $data['no_induk']; ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Nama Lengkap</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                            value="<?php echo $data['nama_lengkap']; ?>" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Kelas/Kelompok</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['kelompok']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Tempat Tanggal lahir</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value=" <?php echo $data['ttl']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Jenis Kelamin</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['jenkel']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Agama</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['agama']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Nama Ayah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ayah']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Pekerjaan Ayah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['kelompok']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Nama Ibu</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ibu']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Pekerjaan Ibu</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['pekerjaan_ibu']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Anak ke</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['anak_ke']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Hobi</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['hobi']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Hubungan Keluarga</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['hubungan_keluarga']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Pendidikan Terakhir Ayah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['pend_terakhir_ayah']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Pendidikan Terakhir Ayah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['pend_terakhir_ibu']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Alamat</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['alamat']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['email']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">No-Telfon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['telp']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Tahun Pelajaran</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['tapel']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Foto Siswa</label>
                        <div class="col-sm-8">
                            <?php echo "<img src='../siswa/foto/$data[foto]' width='125' height='150' />"; ?>
                        </div>
                    </div>

                </div>
                <a class="btn btn-primary" type="submit" href="bio_siswa.php">Kembali</a>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Server side end -->



<?php include "include/footer.php" ?>