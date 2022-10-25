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

    <title>Info-Pendaftaran</title>



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
                INFO PENDAFTARAN
            </h2>
            <p class="text-center">
                Informasi terkait pendaftaran siswa baru TK EKKLESIA
            </p>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Kelas
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kelompok Bermain (KB) usia anak minimal 2,7 tahun di hitung perbulan
                            juli, TK A usia anak minimal 3,7 thn dihitung per bulan juli, TK B usia anak minimal 4,7 thn
                            dihitung per bulan juli.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Jadwal Pendaftaran
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Pendaftaran dibuka mulai bulan juli 2022</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Biaya
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php
                            include "koneksi.php";
                            $data = mysqli_query($koneksi, 'SELECT * FROM tb_rincianbayar');
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                            <h1>Rincian Biaya Anak</h1>
                            <h2>Tahun Ajaran <?php echo date('Y') ?></h2>
                            <ol>
                                <li>Baju Seragam = Rp. <?php echo $row['biaya_seragam']; ?></li>
                                <li>Sampul Raport = Rp. <?php echo $row['raport']; ?></li>
                                <li>Iuran IGTKI anak Untuk 12 Bulan = Rp. <?php echo $row['iuran']; ?></li>
                                <li>Biaya Alat tulis Dan Buku = Rp. <?php echo $row['biaya_buku']; ?></li>
                            </ol>
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                        $jumlah = $row['biaya_seragam'] + $row['raport'] + $row['iuran'] +  $row['biaya_buku'];
                                        ?>
                                    <h5>Total Biaya : Rp. <?php echo $jumlah ?></h5>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

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