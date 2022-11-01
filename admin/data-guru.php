<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Guru</h4>
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
                                <a href="cetak-guru.php" target="_blank" class="btn btn-success mb-3 pl-5 pr-5"><i
                                        class="fa fa-file-excel-o"> Cetak</i></a>
                            </div>

                            <table id="dataTable" class="table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Guru Kelompok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $data = mysqli_query($koneksi, "select * from tb_guru");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $d['nip']; ?></td>
                                        <td><?php echo $d['nama_guru']; ?></td>
                                        <td><?php echo $d['gr_kelompok']; ?></td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="detail-guru.php?nip=<?php echo $d['nip']; ?>">Detail</a>
                                            <a class="btn btn-info"
                                                href="edit-guru.php?nip=<?php echo $d['nip']; ?>">Edit</a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"
                                                href="hapus-guru.php?nip=<?php echo $d['nip']; ?>">Hapus</a>
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
                <h5 class="modal-title">Input Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="aksi-guru.php" class="formpendaftaran" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">1. NIP :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" autofocus
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_guru" class="col-sm-3 col-form-label">2. Nama Guru :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru"
                                name="nama_guru" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gr_kelompok" class="col-sm-3 col-form-label">3. Guru Kelompok :</label>
                        <div class="col-sm-2">
                            <select class="form-control" id="gr_kelompok" name="gr_kelompok" required>
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-3 col-form-label">4. Tempat, Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir"
                                name="ttl" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-3 col-form-label">5. Jenis Kelamin :</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="jenkel" name="jenkel" required>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pend_terakhir" class="col-sm-3 col-form-label">6. Pendidikan terakhir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pend_terakhir" placeholder="Pendidikan Terakhir"
                                name="pend_terakhir" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label">7. Agama :</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="agama" name="agama" required>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Katolik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="th_ijazah_terakhir" class="col-sm-3 col-form-label">8. Tahun Ijazah Terakhir
                            :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="th_ijazah_terakhir" name="th_ijazah_terakhir"
                                placeholder="Tahun Ijazah Terakhir" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">9. Alamat :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">10. Status :</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="status" name="status">
                                <option>Kawin</option>
                                <option>Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">11. Jabatan :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">12. No. Telepon :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon"
                                required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_sertifikasi" class="col-sm-3 col-form-label">13. No. Sertifikasi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi"
                                placeholder="No. Sertifikasi" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">14. Upload Foto :</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control-file" id="foto" name="foto" required />
                        </div>
                    </div>

                    <!-- Akun Guru -->
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>
                    </div>
                    <!-- Buttom -->
                    <div class="buttom col-sm-12 my-5">
                        <div class="kelompok mt-5 text-center my-3">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary" id="kirim" name="kirim"
                                value="kirim">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>