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

    <title>Galery</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="assets/css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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
                Gallery
            </h2>
            <p class="text-center">
                Tk Ekklesia
            </p>

            <div class="teacher_container layout_padding2">
                <div class="card-deck">
                    <?php
                    include "koneksi.php";
                    $query = "SELECT * FROM tb_kegiatan";
                    $get_data = mysqli_query($koneksi, $query);

                    while ($row = mysqli_fetch_assoc($get_data)) { ?>
                    <div class="card">
                        <img class="card-img-top" src="admin/fotokegiatan/<?php echo $row['foto']; ?> " width="50px"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['deskripsi']; ?></h5>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>


            <div class="d-flex justify-content-center mt-3">

            </div>
        </div>
    </section>

    <?php include "inc/footer.php" ?>