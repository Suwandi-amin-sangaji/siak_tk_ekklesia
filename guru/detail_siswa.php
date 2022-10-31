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
            $query_mysql = mysqli_query($koneksi, "SELECT * from tb_siswa WHERE id_status = '1' OR id_status= '2' ORDER BY '$id'  DESC");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form class="needs-validation" novalidate="">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Nis</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                            value="<?php echo $data['no_induk']; ?>" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Nama Lengkap</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                            value="<?php echo $data['nama']; ?>" required="" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Kelas/Kelompok</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['kelas']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Tempat</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value=" <?php echo $data['tempat_lahir']; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value=" <?php echo $data['tanggal_lahir']; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Jenis Kelamin</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['jk']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Agama</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['agama']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Nama Ayah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ayah']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Nama Ibu</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['nama_ibu']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Anak ke</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['anak_ke']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Jumlh Saudara</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['jml_saudara']; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Hubungan Keluarga</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['status_anak']; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Alamat</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['alamat']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">No Telfon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['no_telp']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Tanggal Pedaftaran</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" value="<?php echo $data['tgl_pendaftaran']; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Status Siswa</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend"
                                value="<?php
                                                                                                                                                    if ($data['id_status'] == 1) {
                                                                                                                                                        echo "AKTIF";
                                                                                                                                                    } elseif ($data['id_status'] == 2) {
                                                                                                                                                        echo "TIDAK AKTIF";
                                                                                                                                                    } else {
                                                                                                                                                        echo "LULUS";
                                                                                                                                                    }
                                                                                                                                                    ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Foto Siswa</label>
                        <div class="col-sm-8">
                            <img src="../admin/fotosiswa/<?php echo $data['foto_siswa']; ?>"
                                style="width: 120px;float: left;margin-bottom: 5px;">
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