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
    <div class="container">
        <div class="row">
            <h2 class="main-heading ">
                foto Fasilitas
            </h2>
            <p class="text-center">
                TK EKKLESIA
            </p>
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_fasilitas";
            $get_data = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($get_data)) { ?>
                <div class="col-sm-4">

                    <div class="card">

                        <div class="card-body">
                            <img class="card-img-top" src="admin/fotofasilitas/<?php echo $row['foto']; ?> " width="50px" alt="Card image cap">
                            <p class="mt-3"><?php echo $row['deskripsi'] ?></p>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <?php include "inc/footer.php" ?>