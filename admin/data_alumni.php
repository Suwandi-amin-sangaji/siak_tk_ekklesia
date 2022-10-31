<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<div class="main-content-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Alumni Tk Ekklesia</h4>
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
                            <a href="" class="btn btn-primary mb-3 pl-5 pr-5"><i class="fa fa-plus "> Cetak</i>
                            </a>
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
                                    $data = mysqli_query($koneksi, "SELECT * from tb_siswa WHERE id_status = '3' ORDER BY nama ASC");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($d['foto_siswa'] == "") { ?>
                                                    <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
                                                <?php } else { ?>
                                                    <img src="fotosiswa/<?php echo $d['foto_siswa']; ?>" style="width:100px;height:100px;">
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
                                                <a class="btn btn-success" href="detail-siswa.php?id=<?php echo $d['id_siswa']; ?>">Detail</a>
                                                <a class="btn btn-info" href="edit-siswa.php?id=<?php echo $d['id_siswa']; ?>">Edit</a>
                                                <a onclick="return confirm('Yakin Hapus?')" class="btn btn-danger" href="hapus-siswa.php?id=<?php echo $d['id_siswa']; ?>">Hapus</a>
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

<?php include "include/footer.php"; ?>