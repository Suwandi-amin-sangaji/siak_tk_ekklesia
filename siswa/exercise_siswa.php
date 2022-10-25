<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>


<div class="container-fluid">
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Hari, Tanggal</th>
                            <th>Tema</th>
                            <th>Kelompok</th>
                            <th>Materi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from tb_akademik");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['tema']; ?></td>
                                <td><?php echo $d['kel_materi']; ?></td>
                                <td><?php echo $d['materi']; ?></td>
                                <td>
                                    <a download="<?php echo $d['materi'] ?>" class="btn btn-success" href="../guru/materi/<?php echo $d['materi'] ?>">Download</a>
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

<?php include 'include/footer.php'; ?>