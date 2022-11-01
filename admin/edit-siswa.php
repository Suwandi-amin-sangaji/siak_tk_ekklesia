<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Edit Siswa</h4>
            <?php
            // memanggil file koneksi.php untuk membuat koneksi
            include 'koneksi.php';

            // mengecek apakah di url ada nilai GET id
            if (isset($_GET['id'])) {
                // ambil nilai id dari url dan disimpan dalam variabel $id
                $id = ($_GET["id"]);

                // menampilkan data dari database yang mempunyai id=$id
                $query = "SELECT * FROM tb_siswa WHERE id_siswa='$id'";
                $result = mysqli_query($koneksi, $query);
                // jika data gagal diambil maka akan tampil error berikut
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi) .
                        " - " . mysqli_error($koneksi));
                }
                // mengambil data dari database
                $data = mysqli_fetch_assoc($result);
                // apabila data tidak ada pada database maka akan dijalankan perintah ini
                if (!count($data)) {
                    echo "<script>alert('Data tidak ditemukan pada database');window.location='siswa.php';</script>";
                }
            } else {
                // apabila tidak ada data GET id pada akan di redirect ke index.php
                echo "<script>alert('Masukkan data id.');window.location='siswa.php';</script>";
            }
            ?>
            <form action="update-siswa.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-9">
                        <input type="text" hidden class="form-control" id="id" name="id"
                            value="<?php echo $data['id_siswa'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_induk" class="col-sm-3 col-form-label">Nomor Induk :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_induk" name="no_induk"
                            value="<?php echo $data['no_induk'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $data['nama'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelompok" class="col-sm-3 col-form-label">Kelas :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="kelas" name="kelas" value="<?php echo $data['kelas'] ?>">
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                            value="<?php echo $data['tempat_lahir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                            value="<?php echo $data['tanggal_lahir'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="jk" name="jk" value="<?php echo $data['jk'] ?>" readonly>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
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
                    <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                            value="<?php echo $data['nama_ayah'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                            value="<?php echo $data['nama_ibu'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-sm-3 col-form-label">No Telfon Orang Tua:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            value="<?php echo $data['no_telp'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="anak_ke" class="col-sm-3 col-form-label">Anak Ke :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="anak_ke" name="anak_ke"
                            value="<?php echo $data['anak_ke'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jml_saudara" class="col-sm-3 col-form-label">Jumlah Saudara Kandung :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jml_saudara" name="jml_saudara"
                            value="<?php echo $data['jml_saudara'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status_anak" class="col-sm-3 col-form-label">Hubungan Keluarga :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="status_anak" name="status_anak"
                            value="<?php echo $data['status_anak'] ?>" readonly>
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
                    <label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos :</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="kode_pos" name="kode_pos"
                            value="<?php echo $data['kode_pos'] ?>" readonly></input>
                    </div>
                </div>

                <div class="form-group row">
                    <?php include "koneksi.php";
                    ?>
                    <label for="status" class="col-sm-3 col-form-label">Status Sekolah :</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="id_status" required>
                            <option>Aktif</option>
                            <?php $a = mysqli_query($koneksi, "SELECT * FROM tb_status");
                            while ($b = mysqli_fetch_assoc($a)) {
                                echo "<option value='$b[id_status]'>$b[nama_status]</option>";
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tahun_lulus" class="col-sm-3 col-form-label">Tahun Lulus :</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="tahun_lulus" name="tahun_lulus"
                            value="<?php echo $data['tahun_lulus'] ?>"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">Upload Foto :</label>
                    <div class="col-sm-9">
                        <img src="fotosiswa/<?php echo $data['foto_siswa']; ?>"
                            style="width: 120px;float: left;margin-bottom: 5px;">
                        <input type="file" name="foto" class="form-control" />
                        <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 ">
                    <button type="submit" class="btn btn-primary">update</button>
                    <a href="siswa.php" class="btn btn-danger"> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>