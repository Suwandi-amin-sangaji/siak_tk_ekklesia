<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Guru</h4>
            <?php
            include "koneksi.php";
            $nip = $_GET['nip'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_guru where nip = '$nip'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form action="update-guru.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="fotoLama" value="<?php echo $data['foto'] ?>">
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data['nip'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_guru" class="col-sm-3 col-form-label">Nama Guru :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru"
                            value="<?php echo $data['nama_guru'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gr_kelompok" class="col-sm-3 col-form-label">Guru Kelompok :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="gr_kelompok" name="gr_kelompok"
                            value="<?php echo $data['gr_kelompok'] ?>">
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $data['ttl'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-3 col-form-label">enis Kelamin :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="jenkel" name="jenkel" value="<?php echo $data['jenkel'] ?>">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir"
                            value="<?php echo $data['pend_terakhir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="agama" name="agama" value="<?php echo $data['agama'] ?>">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Katolik</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">Tahun Ijazah Terakhir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="th_ijazah_terakhir" name="th_ijazah_terakhir"
                            value="<?php echo $data['th_ijazah_terakhir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat"
                            name="alamat"><?php echo $data['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="status" name="status" value="<?php echo $data['status'] ?>">
                            <option>Kawin</option>
                            <option>Belum Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jabatan" name="jabatan"
                            value="<?php echo $data['jabatan'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-3 col-form-label">No Telp :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telp" name="telp"
                            value="<?php echo $data['telp'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_sertifikasi" class="col-sm-3 col-form-label">No Sertifikasi :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi"
                            value="<?php echo $data['no_sertifikasi'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label"> Foto Guru :</label>
                    <div class="col-sm-9">
                        <img src="fotoguru/<?= $data['foto']; ?>" width="200">
                        <input type="file" name="foto" id="foto">
                    </div>
                </div>

                <!-- Buttom -->
                <div class="buttom col-sm-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a type="submit" href="data-guru.php" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>