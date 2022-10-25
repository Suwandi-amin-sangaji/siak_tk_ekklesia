<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<!-- Pendaftaran -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Report Pembelajaran</h6>

        </div>
        <div class="card-body">
            <div class="tambahdata text-right">
                <button type="button" class="btn btn-primary mb-3 pl-5 pr-5" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "> Tambah Materi</i>
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
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Lengkap</th>
                            <th>Kelompok</th>
                            <th>Tanggal</th>
                            <th>Laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_report");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['no_induk']; ?></td>
                                <td><?php echo $d['nama_siswa']; ?></td>
                                <td><?php echo $d['kel_report']; ?></td>
                                <td><?php echo $d['tgl_report']; ?></td>
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
                <h5 class="modal-title">Input Materi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="aksi_uploadreport.php">
                    <div class="form-group row">
                        <label for="tgl_report" class="col-sm-2 col-form-label">Hari, Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tgl_report" id="tgl_report" placeholder="Tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kel_report" class="col-sm-2 col-form-label">Kelompok :</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="kel_report" name="kel_report" required>
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_induk" class="col-sm-2 col-form-label">No Induk :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_induk" name="no_induk" placeholder="Nomor Induk" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="laporan" class="col-sm-2 col-form-label">Laporan :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Laporan" id="laporan" name="laporan" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-dark">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php'; ?>