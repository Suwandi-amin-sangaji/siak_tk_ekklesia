<?php include "inc/head.php"; ?>
<?php include "inc/navbar.php"; ?>
<section class="hero_section ">
    <div class="hero-container container">
        <div class="hero_detail-box">
            <h3>
                Welcome to <br>
                Best educations
            </h3>
            <h1>
                school
            </h1>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in
                some form, by injected humour, or randomised
            </p>
            <div class="hero_btn-continer">
                <a href="" class="call_to-btn btn_white-border">
                    <span>
                        Contact
                    </span>
                    <img src="assets/images/right-arrow.png" alt="">
                </a>
            </div>
        </div>
        <div class="hero_img-container">
            <div>
                <img src="assets/images/hero.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
</div>
<!-- end header section -->

<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Tentang Tk Ekklesia
        </h2>
        <p class="text-center">
            There are many variations of passages of Lorem Ipsum available, but the majority hThere are many
            variations of
            passages of Lorem Ipsum available, but the majority h
        </p>
        <div class="about_img-box ">
            <img src="assets/images/kids.jpg" alt="" class="img-fluid w-100">
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="" class="call_to-btn  ">

                <span>
                    Read More
                </span>
                <img src="assets/images/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</section>


<!-- about section -->


<!-- vehicle section -->
<section class="vehicle_section layout_padding mb-5">
    <div class="container">
        <h2 class="main-heading ">
            Fasilitas Tk Ekklesia
        </h2>
        <div class="layout_padding-top">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="vehicle_img-box ">
                            <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="vehicle_img-box ">
                            <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="vehicle_img-box ">
                            <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- teacher section -->
<section class="teacher_section layout_padding mt-5">
    <div class="container">
        <h2 class="main-heading ">
            Guru Tk Ekklesia
        </h2>
        <div class="teacher_container layout_padding2">

            <div class="card-deck">
                <?php
                include "koneksi.php";
                $query = "SELECT * FROM tb_pegawai";
                $data = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                    <div class="card">
                        <img class="card-img-top" src="admin/fotoguru/<?php echo $row['foto'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama_guru'] ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>

<!-- teacher section -->
<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Our Students Feedback
        </h2>
        <p class="text-center">
            There are many variations of passages of Lorem Ipsum available, but the majority hThere are many
            variations of
            passages of Lorem Ipsum available, but the majority h
        </p>
        <div class="layout_padding2">
            <div class="client_container d-flex flex-column">
                <div class="client_detail d-flex align-items-center">
                    <div class="client_img-box ">
                        <img src="assets/images/student.png" alt="">
                    </div>
                    <div class="client_detail-box">
                        <h4>
                            Veniam Quis
                        </h4>
                        <span>
                            (exercitation)
                        </span>
                    </div>
                </div>
                <div class="client_text mt-4">
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu
                        fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit
                        anim id est laborum."


                    </p>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- client section -->

<!-- contact section -->

<section class="contact_section layout_padding-bottom">
    <div class="container">

        <h2 class="main-heading">
            Contact Now

        </h2>
        <p class="text-center">
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla

        </p>
        <div class="">
            <div class="contact_section-container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="contact-form">
                            <form action="send.php" method="POST">
                                <div>
                                    <input type="text" name="nama" placeholder="Name">
                                </div>
                                <div>
                                    <input type="text" name="no_hp" placeholder="Phone Number">
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <input type="text" placeholder="Message" name="pesan" class="input_message">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn_on-hover">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- end landing section -->
<?php include "inc/footer.php"; ?>