<?php include "inc/head.php"; ?>
<?php include "inc/navbar.php"; ?>
<section class="hero_section ">
    <div class="hero-container container">
        <div class="hero_detail-box">
            <h3>
                Welcome to <br>
            </h3>
            <h1>
                TK EKKLESIA
            </h1>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in
                some form, by injected humour, or randomised
            </p>
            <div class="hero_btn-continer">
                <a href="contact.php" class="call_to-btn btn_white-border">
                    <span>
                        Contact
                    </span>
                    <img src="assets/images/right-arrow.png" alt="">
                </a>
            </div>
        </div>
        <div class="hero_img-container">
            <div>
                <img src="assets/images/hero.png" alt="" class="img-fluid" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            </div>
        </div>
    </div>
</section>
</div>
<!-- end header section -->

<!-- about section -->
<section class="about_section layout_padding" id="profile">
    <div class="container">
        <h2 class="main-heading ">
            Profile
        </h2>
        <p class="text-center mb-5">
            Tk Ekklesia
        </p>
        <div class="row">
            <div class="col-sm-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="admin/profiltk/tk.png" alt="" class="img-fluid w-100">

            </div>
            <div class="col-sm-7">
                <h5 class="card-title">Sejarah</h5>
                <p class="card-text" align="justify">
                    Taman Kanak-kanak Ekklesia merupakan sekolah taman kanak-kanak usia dini.Pada tahun 2015 sebuah Tk
                    yang bernama Tk Papua Kasih dari Yayasan Amal Kasih di Km.7 Kota Sorong ditutup dan dipindahkan ke
                    Flores Nusa Tenggara Timur,sehingga semua bahan belajar mengajar dari Tk tersebut diserahkan oleh
                    pihak Yayasan kepada Saudari Yuliana Wambrauw,S.Pd yang saat ini menjabat sebagai kepala TK tersebut
                    dengan harapan dapat bermanfaat baginya dikemudian hari.Pada tahun ajaran baru,yakni pada bulan
                    Juni-Juli 2015 ada warga dari Remu, Hbm, Rufei yang mencari Tk Papua Kasih untuk menyekolahkan
                    anak-anak mereka,namun karena telah ditutup dan mereka mengetahui bahwa semua bahan belajar mengajar
                    telah diberikan kepada Miss.Yuli,maka mereka meminta agar Miss.Yuli bisa membuka Tk untuk mendidik
                    anak-anak mereka,walaupun tanpa Yayasan terdahulu. Maka dengan itu dari pihak Gereja Persekutuan
                    Alkitab Indonesia(GPKAI) Ekklesia Klawasi,akhirnya menyetujui dan memberikan ruang konsistori
                    sebagai ruang kelas dan memberikan nama menjadi Tk Ekklesia setelah itu gereja meminta rekomendasi
                    dari pihak yayasan pendidikan dan persekolahan gereja-gereja injili ditanah papua (YPPGI) untuk
                    mendukung berdirinya Tk Yppgi Ekklesia Klawasi yang beralamat dijalan Rufei Star,RT03/RW02,Kelurahan
                    Klawasi Distrik Sorong Papua Barat.Kemudian Pemerintah Kora Sorong Dinas Pendidikan kota dapat
                    memberikan Surat Ijin Operasional Nomor :02/TK-EK/VIII?2016,tanggakl 16 agustus 2016 dengan demikian
                    TK.Yppgi Ekklesia boleh ada dan aktivitas belajar mengajar terus berjalan hingga saat ini.
                </p>
            </div>
        </div>
</section>

<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Visi Dan Misi
        </h2>
        <p class="text-center mb-5">
            Tk Ekklesia
        </p>
        <div class="row">
            <div class="col-sm-7">
                <h5 class="card-title">Visi</h5>
                <p class="card-text" align="justify">
                    TK Ekklesia ikut serta untuk mencerdaskan anak yang aktif,kreaktif dan inovatif serta hidup takut
                    akan Tuhan Yesus
                </p>
                <h5 class="card-title">Misi</h5>
                <p class="card-text" align="justify">
                    1.Melaksanakan pembelajaran yang membuat anak aktif,kreatif,dan inovatif. <br>
                    2.Membentuk anak untuk menjadi saksi Kristus di tengah-tengah keluarga,lingkungan,dan masyarakat.
                    <br>
                    3.Menyiapkan potensi anak yang cerdas untuk siap lanjut ke Sekolah Dasar. <br>

                </p>
            </div>
            <div class="col-sm-5" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="admin/profiltk/tk.png" alt="" class="img-fluid w-90">

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

            <div class="row">
                <?php
                include "koneksi.php";
                $query = "SELECT * FROM tb_guru";
                $data = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="admin/fotoguru/<?php echo $row['foto'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nama_guru'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <input type="text" name="no_hp" placeholder="Phone Number">
                                </div>
                                <div>
                                    <input type="text" placeholder="Message" name="pesan" class="input_message">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="submit" class="btn_on-hover">
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