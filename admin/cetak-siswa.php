<html lang="en">

<head>
    <title>Cetak Report Siswa</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Siswa.xls");
    ?>

    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">Data Siswa TK EKKLESIA</h1>
        <hr>
    </center>

    <!-- DataTales Example -->
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Induk</th>
                <th>Nama Lengkap</th>
                <th>Kelompok</th>
                <th>Tempat lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Anak Ke-</th>
                <th>Jumlah Saudara Kandung</th>
                <th>Status Keluarga</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>No Telfon Orangtua</th>
                <th>Alamat</th>
                <th>Status Siswa</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY no_induk ASC");
            $nomor = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['no_induk']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['anak_ke']; ?></td>
                <td><?php echo $d['jml_saudara']; ?></td>
                <td><?php echo $d['status_anak']; ?></td>
                <td><?php echo $d['nama_ayah']; ?></td>
                <td><?php echo $d['nama_ibu']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php
                        if ($d['id_status'] == 1) {
                            echo "AKTIF";
                        } elseif ($d['id_status'] == 2) {
                            echo "TIDAK AKTIF";
                        } else {
                            echo "LULUS";
                        }
                        ?>
                </td>
                <!-- <td><?php echo "<img src='../siswa/foto/$d[foto]' width='70' height='90' />"; ?></td> -->
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>

</html>