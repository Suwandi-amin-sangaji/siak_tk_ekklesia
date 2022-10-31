<!DOCTYPE html>
<html>

<head>
    <title>Jadwal Belajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1>Jadwal Pemebelajaran TK EKKLESIA</h1>
                <p>Jalan Rufei Star,RT03/RW02,Kelurahan Klawasi Distrik Sorong Papua Barat.</p>
                <hr>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Materi Kegiatan</th>
                <th>Keterengan</th>
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $id = $_GET['id'];
            // menampilkan data pegawai
            $data = mysqli_query($koneksi, "SELECT * from tb_jadwal_mapel");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td>
                    <?php
                        if ($d['id_hari'] == 1) {
                            echo "Senin";
                        } elseif ($d['id_hari'] == 2) {
                            echo "Selasa";
                        } elseif ($d['id_hari'] == 3) {
                            echo "Rabu";
                        } elseif ($d['id_hari'] == 4) {
                            echo "Kamis";
                        } elseif ($d['id_hari'] == 5) {
                            echo "Jumat";
                        } else {
                            echo "Sabtu";
                        }
                        ?>
                </td>
                <td><?php echo $d['materi_kegiatan']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-9">
            </div>
            <div class="col-3">
                Sorong , <?php echo date('d/m/Y') ?>
            </div>
        </div>
    </div>
    <script>
    window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>