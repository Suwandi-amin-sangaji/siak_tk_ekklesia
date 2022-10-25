<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="pendaftaran bg-white">
    <?php
    include 'koneksi.php';
    $username = $_SESSION['username'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username='$username'");
    $d = mysqli_num_rows($data);
    ?>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 text-center mt-4">
            <h4>Formulir Pendaftaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 my-5">
            <form method="POST" action="aksi_pendaftaran.php" class="formpendaftaran" enctype="multipart/form-data">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>" />
                <input type="hidden" class="form-control" id="username" name="username" value="<?= $d['username']; ?>" />
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-sm-3 col-form-label">1. Nama Lengkap :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" autofocus required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">2. Tempat, Tanggal Lahir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-3 col-form-label">3. Jenis Kelamin :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="jenkel" name="jenkel" required>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">4. Agama :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="katolik">Katolik</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label">5. HOBI :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="hobi" name="hobi" placeholder="hobi" required />
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-3 col-form-label">5. Nama Ayah :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">6. Pekerjaan Ayah :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-3 col-form-label">7. Nama Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">8. Pekerjaan Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="anak_ke" class="col-sm-3 col-form-label">9. Anak Ke- :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak Ke-" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hubungan_keluarga" class="col-sm-3 col-form-label">10. Hubungan Keluarga :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" placeholder="Hubungan Keluarga" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir_ayah" class="col-sm-3 col-form-label">11. Pendidikan Terakhir
                        Ayah:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir_ayah" name="pend_terakhir_ayah" placeholder="Pendidikan terakhir Ayah" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pend_terakhir_ibu" class="col-sm-3 col-form-label">12. Pendidikan Terakhir Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pend_terakhir_ibu" name="pend_terakhir_ibu" placeholder="Pendidikan Terakhir ibu" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">13. Alamat :</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Masukkan Alamat Lengkap" id="alamat" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">14. E-mail :</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-3 col-form-label">15. No Telp :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telephone" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kelompok" class="col-sm-3 col-form-label">17. Kelompok :</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="kelompok" name="kelompok" required>
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">16. Upload Foto :</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="foto" name="foto" required />
                        <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tapel" class="col-sm-3 col-form-label">18. Tahun Ajaran :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tapel" name="tapel" placeholder="Tahun Ajaran" required />

                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-warning" id="kirim" name="kirim" value="kirim">Daftar</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

<?php include 'include/footer.php'; ?>