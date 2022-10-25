<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>




<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Detail Guru</h4>
            <?php
            include "koneksi.php";
            $nip = $_GET['nip'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_pegawai where nip = '$nip'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form class="needs-validation" novalidate="">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">NIP</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                            value="<?php echo $data['nip']; ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Nama Guru</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                            value="<?php echo $data['nama_guru']; ?>" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Guru Kelompok</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['gr_kelompok']; ?>"
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
                        <label for="validationCustomUsername">Pendidikan Terakhir</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['pend_terakhir']; ?>"
                                required="">
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
                        <label for="validationCustomUsername">Tahun Ijazah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value=" <?php echo $data['th_ijazah_terakhir']; ?>"
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
                        <label for="validationCustomUsername">Status</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['status']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Jabatan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['jabatan']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">No Telfon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['telp']; ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">No Sertifikasi</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['no_sertifikasi']; ?>"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Foto Guru</label>
                        <div class="col-sm-8">
                            <?php
                                if ($data['foto'] == "") { ?>
                            <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA"
                                style="width:100px;height:100px;">
                            <?php } else { ?>
                            <?php echo "<img src='fotoguru/$data[foto]' width='125' height='150' />"; ?>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <a class="btn btn-primary" type="submit" href="data-guru.php">Kembali</a>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Server side end -->

<?php include "include/footer.php" ?>