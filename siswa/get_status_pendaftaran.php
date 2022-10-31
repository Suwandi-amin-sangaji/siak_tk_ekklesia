<?php
include "koneksi.php";

if (isset($_POST['input'])) {

    $input = $_POST['input'];
    $query = "SELECT * FROM tb_pembayaran  WHERE nama_siswa LIKE '{$input}%' LIMIT 2";

    $resul = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($resul) > 0) { ?>
        <div class="container-fluid mt-3">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Kelompok</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($resul)) {
                        $nama = $row['nama_siswa'];
                        $kelompok = $row['kelompok'];
                        $status = $row['status'];
                    ?>
                        <tr>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $kelompok; ?></td>
                            <td><?php echo $status; ?></td>
                            <td>
                                <a href="print_pendaftaran.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> Cetak</a>
                            </td>
                        </tr>

                    <?php
                    }

                    ?>
                </tbody>
            </table>

        </div>
<?php
    } else {
        echo "<h6 class='text-danger text-center mt-3'>Tidiak ada Data<h6>";
    }
}
?>