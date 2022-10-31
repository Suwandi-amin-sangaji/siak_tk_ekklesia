<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Pengumuman</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="assets/css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets/css/responsive.css" rel="stylesheet" />




    <link rel="stylesheet" href="assets/css/css-circular-prog-bar.css">


</head>

<body>
    <div class="top_container sub_pages">
        <?php include "inc/navbar.php"; ?>
    </div>
    <!-- end header section -->


    <!-- teacher section -->
    <section class="teacher_section layout_padding-bottom">
        <div class="container">
            <h2 class="main-heading ">
                Pengumuman
            </h2>
            <p class="text-center">
                Pengumuman baru TK EKKLESIA
            </p>

            <table class="table mt-5 table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Berakhir</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pengumuman");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['judul'] ?></td>
                        <td><?php echo $data['tanggal_mulai'] ?></td>
                        <td><?php echo $data['tanggal_akhir'] ?></td>
                        <td><?php echo $data['deskripsi'] ?></td>
                        <td><?php echo $data['file'] ?></td>
                        <td>
                            <a href="admin/file/<?php echo $data['file'] ?>" download class="btn btn-primary">Download</a><br />
                        </td>
                </tbody>
            <?php } ?>
            </tbody>
            </table>
            <div class="row">
                <div class="col-12 text-center">
                    <h6>Silahkan Hubungi Admin Untuk Info Selanjutnya</h6>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <a href="" class="call_to-btn  ">
                    <span>
                        Contact Admin
                    </span>
                    <img src="assets/images/right-arrow.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <?php include "inc/footer.php" ?>