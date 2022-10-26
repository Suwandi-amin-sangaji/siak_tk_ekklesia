<!DOCTYPE html>
<html>

<head>
    <title>Bukti Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- <style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }

    .tengah {
        text-align: center;
    }
    </style> -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1>BUKTI PEMBAYARAN TK EKKLESIA</h1>
                <p>Jalan Rufei Star,RT03/RW02,Kelurahan Klawasi Distrik Sorong Papua Barat.</p>
                <hr>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Tanggal Pembayaran</th>
                <th>Nama Bank</th>
                <th>Nama pengirim</th>
                <th>Kelompok </th>
                <th>Status </th>
                <th>Bukti Pembayaran</th>
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $id = $_GET['id'];
            // menampilkan data pegawai
            $data = mysqli_query($koneksi, "SELECT * from tb_pembayaran WHERE id=$id ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['tgl_pembayaran'] ?></td>
                <td><?php echo $d['nasabah']; ?></td>
                <td><?php echo $d['nama_siswa']; ?></td>
                <td><?php echo $d['kelompok']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td>
                    <img src="bukti/<?php echo $d['bukti'] ?>" alt="" width="100px">
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-9">
                <p class="text-danger">Silahkan Tujukkan Bukti pembayaran Ke Sekolah</p>
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