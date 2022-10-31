<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Siswa</h4>
                        <?php if (isset($_GET['pesan'])) {
                        ?>
                        <?php if ($_GET['pesan'] == "berhasil") {
                            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <?php } elseif ($_GET['pesan'] == "gagal") {
                            ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <?php } elseif ($_GET['pesan'] == "ekstensi") {
                            ?>
                        <div class="alert alert-warning" role="alert">
                            Ekstensi File Harus PNG Dan JPG
                        </div>
                        <?php } elseif ($_GET['pesan'] == "size") {
                            ?>
                        <div class="alert alert-warning" role="alert">
                            Size File Tidak Boleh Lebih Dari 2 MB
                        </div>
                        <?php } elseif ($_GET['pesan'] == "hapus") {
                            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil Menghapus</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <?php } elseif ($_GET['pesan'] == "gagalhapus") {
                            ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal !</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <div class="data-tables">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal"
                                    data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah</i>
                                </button>
                                <a href="cetak-siswa.php" target="_blank" class="btn btn-success mb-3 pl-5 pr-5"><i
                                        class="fa fa-file-excel-o"> Cetak</i></a>
                            </div>

                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Siswa</th>
                                        <th>No Induk</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelompok</th>
                                        <th>Status Siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * from tb_siswa WHERE id_status = '1' OR id_status= '2' ORDER BY id_siswa ASC ");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td class="text-center">
                                            <?php
                                                if ($d['foto_siswa'] == "") { ?>
                                            <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA"
                                                style="width:100px;height:100px;">
                                            <?php } else { ?>
                                            <img src="fotosiswa/<?php echo $d['foto_siswa']; ?>"
                                                style="width:100px;height:100px;">
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $d['no_induk']; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['kelas']; ?></td>
                                        <td>
                                            <?php
                                                if ($d['id_status'] == 1) {
                                                    echo "AKTIF";
                                                } elseif ($d['id_status'] == 2) {
                                                    echo "TIDAK AKTIF";
                                                } else {
                                                    echo "LULUS";
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="detail-siswa.php?id=<?php echo $d['id_siswa']; ?>">Detail</a>
                                            <a class="btn btn-info"
                                                href="edit-siswa.php?id=<?php echo $d['id_siswa']; ?>">Edit</a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"
                                                href="hapus-siswa.php?id=<?php echo $d['id_siswa']; ?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD -->
<div class="modal fade bd-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="aksi-siswa.php" method="post">
                    <div class="alert alert-primary">
                        <strong>Pendaftaran</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Tanggal Pendaftaran:</label>
                                <input type="date" name="tgl_pendaftaran" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-primary">
                        <strong>Data Diri</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Lengkap:</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nomor Identitas (NIK):</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tempat Lahir:</label>
                                <input type="text" name="tempat_lahir" class="form-control"
                                    placeholder="Masukan Tempat Lahir">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir:</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Agama:</label>
                                <select class="form-control" name="agama">
                                    <option>Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jenis Kelamin:</label>
                                <select class="form-control" name="jk">
                                    <option>Pilih</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Anak Ke :</label>
                                <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Jumlah Saudara Kandung:</label>
                                <input type="text" name="jml_saudara" class="form-control"
                                    placeholder="Masukan Jumlah Saudara">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Status Anak:</label>
                                <input type="text" name="status_anak" class="form-control"
                                    placeholder="Masukan Status anak">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Ibu Kandung:</label>
                                <input type="text" name="nama_ibu" class="form-control"
                                    placeholder="Masukan Nama Ibu Kandung">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Ayah Kandung:</label>
                                <input type="text" name="nama_ayah" class="form-control"
                                    placeholder="Masukan Nama Ayah Kandung">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>No Telp Orang Tua:</label>
                                <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>foto:</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-primary">
                        <strong>Data Alamat Asal</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label>Alamat:</label>
                                <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Kode Pos:</label>
                                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Provinsi:</label>
                                <select class="form-control" name="provinsi" id="provinsi">
                                    <?php
                                    include "koneksi.php";
                                    //Perintah sql untuk menampilkan semua data pada tabel provinsi
                                    $sql = "select * from provinsi";
                                    $hasil = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    ?>
                                    <option value="<?php echo $data['id_prov']; ?>"><?php echo $data['nama']; ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Kabupaten:</label>
                                <input class="form-control" name="kabupaten" id="kabupaten">
                                <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                                </input>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Kecamatan:</label>
                                <input class="form-control" name="kecamatan" id="kecamatan">
                                <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                                </input>
                            </div>
                        </div>

                    </div>

                    <div class="alert alert-primary">
                        <strong>Kelas Pendafataran</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Kelas:</label>
                                <select class="form-control" name="kelas">
                                    <option>Pilih</option>
                                    <option value="A">Kelas - A</option>
                                    <option value="B">Kelas - B</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>No induk:</label>
                                <input type="text" class="form-control" name="no_induk"
                                    placeholder="Masukkan Nomor Induk Siswa">
                            </div>
                        </div>

                    </div>

                    <div class="alert alert-primary">
                        <strong>Registrasi Akun</strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ulangi Password:</label>
                                <input type="password" name="password2" class="form-control"
                                    placeholder="Ulangi password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <?php include "include/footer.php"; ?>