<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<!-- Pendaftaran -->
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Report</h4>
                        <div class="card-body">
                            <div class="tambahdata text-right">
                                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah Nilai</i>
                                </button>
                            </div>
                            <div class="table-responsive">
                                <?php
                                if (isset($_GET['pesan'])) {
                                    $pesan = $_GET['pesan'];
                                    if ($pesan == "input") {
                                        echo "Report berhasil di input";
                                    } elseif ($pesan == "update") {
                                        echo "Report berhasil di update";
                                    } elseif ($pesan == "hapus") {
                                        echo "Report berhasil di hapus";
                                    }
                                }
                                ?> <br>
                                <table id="dataTable" class="table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Induk</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelompok</th>
                                            <th>Laporan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * from tb_report");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['tgl_report']; ?></td>
                                                <td><?php echo $d['no_induk']; ?></td>
                                                <td><?php echo $d['nama_siswa'] ?></td>
                                                <td><?php echo $d['kelas']; ?></td>
                                                <td><?php echo $d['laporan']; ?></td>
                                                <td>
                                                    <a class="btn btn-info" href="edit_laporan.php?no_induk=<?php echo $d['no_induk']; ?>">EDIT</a>
                                                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus_laporan.php?no_induk=<?php echo $d['no_induk']; ?>">HAPUS</a>
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
                <!-- MODAL ADD -->
                <div class="modal fade bd-example-modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="aksi_uploadreport.php">
                                    <div class="form-group row">
                                        <label for="tgl_report" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tgl_report" id="tgl_report" placeholder="Tanggal" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_induk" class="col-sm-2 col-form-label">No Induk :</label>
                                        <div class="col-sm-10">
                                            <select onchange="cek_database()" id="no_induk" name="no_induk" class="form-control">
                                                <option value='' selected>- Pilih -</option>
                                                <?php
                                                include "koneksi.php";
                                                $siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_status = '1' ORDER BY id_siswa ASC");
                                                while ($row = mysqli_fetch_array($siswa)) {
                                                    echo "<option>$row[no_induk]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Siswa :</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="nama" id="nama" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kelas" class="col-sm-2 col-form-label">Kelompok :</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kelas" class="form-control" id="kelas">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="laporan" class="col-sm-2 col-form-label">Laporan :</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" placeholder="Laporan" id="laporan" name="laporan" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database() {
        var no_induk = $("#no_induk").val();
        $.ajax({
            url: 'ajax.php',
            data: "no_induk=" + no_induk,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $('#no_induk').val(obj.no_induk);
            $('#nama').val(obj.nama);
            $('#kelas').val(obj.kelas);
        });
    }
</script>

<?php include 'include/footer.php'; ?>