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
     <title>PSB-ONLINE</title>
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
     <script src="jquery/jquery-3.4.1.min.js"></script>
     <link rel="stylesheet" href="assets/css/css-circular-prog-bar.css">
 </head>

 <body>
     <div class="top_container sub_pages">
         <?php include "inc/navbar.php"; ?>
     </div>
     <!-- end header section -->
     <section class="teacher_section layout_padding-bottom">
         <div class="container">
             <h2 class="main-heading ">
                 FORMULIR PENDAFTARAN
             </h2>
             <p class="text-center">
                 Pendaftaran Siswa Baru TK EKKLESIA
             </p>

             <?php
                //Include file koneksi, untuk koneksikan ke database
                include "koneksi.php";

                //Fungsi untuk mencegah inputan karakter yang tidak sesuai
                function input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                //Cek apakah ada kiriman form dari method post
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tgl_pendaftaran = input($_POST["tgl_pendaftaran"]);
                    $nama = input($_POST["nama"]);
                    $nik = input($_POST["nik"]);
                    $tempat_lahir = input($_POST["tempat_lahir"]);
                    $tanggal_lahir = input($_POST["tanggal_lahir"]);
                    $jk = input($_POST["jk"]);
                    $agama = input($_POST["agama"]);

                    $anak_ke = input($_POST["anak_ke"]);
                    $jml_saudara = input($_POST["jml_saudara"]);
                    $status_anak = input($_POST["status_anak"]);

                    $nama_ibu = input($_POST["nama_ibu"]);
                    $nama_ayah = input($_POST["nama_ayah"]);
                    $no_telp = input($_POST["no_telp"]);
                    $alamat = input($_POST["alamat"]);
                    $kode_pos = input($_POST["kode_pos"]);
                    $provinsi = input($_POST["provinsi"]);
                    $kabupaten = input($_POST["kabupaten"]);
                    $kecamatan = input($_POST["kecamatan"]);
                    $kelas = input($_POST["kelas"]);

                    $username = input($_POST["username"]);
                    $email = input($_POST["email"]);
                    $password = input(md5($_POST["password"]));
                    $password2 = input(md5($_POST["password2"]));
                    $level = "siswa";

                    if ($password !== $password2) {
                        echo "<script>
                        alert('kata sandi harus sama!');
                        </script>";
                        header("location:psb_online.php?pesan=gagal");
                    } else {
                        $sql1 = "INSERT INTO tb_siswa (tgl_pendaftaran,nama,nik,tempat_lahir,tanggal_lahir,jk,agama,anak_ke,jml_saudara,status_anak,nama_ibu,nama_ayah,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,kelas,username,password) values
		                ('$tgl_pendaftaran','$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$agama','$anak_ke','$jml_saudara','$status_anak','$nama_ibu','$nama_ayah','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$kelas','$username','$password')";
                        $sql2 = "INSERT INTO tb_user values('','$username','$email','$password','$level')";
                        $hasil = mysqli_query($koneksi, $sql1);
                        $hasil = mysqli_query($koneksi, $sql2);
                        // //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                        if ($hasil) {
                            echo "<div class='alert alert-success'><alert>Selamat $nama anda telah berhasil mendaftar. silahkan <a href='login/login.php'>Login</a></alert></div>";
                        } else {
                            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
                        }
                    }
                }
                ?>
             <form id="form" method="post">
                 <div class="alert alert-primary">
                     <strong>Pendaftaran</strong>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="form-group">
                             <label>Tanggal Pendaftaran:</label>
                             <input type="date" name="tgl_pendaftaran" class="form-control" placeholder="">
                         </div>
                     </div>
                 </div>
                 <div class="alert alert-primary">
                     <strong>Data Diri</strong>
                 </div>
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nama Lengkap:</label>
                             <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nomor Identitas (NIK):</label>
                             <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Tempat Lahir:</label>
                             <input type="text" name="tempat_lahir" class="form-control"
                                 placeholder="Masukan Tempat Lahir">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Tanggal Lahir:</label>
                             <input type="date" name="tanggal_lahir" class="form-control">
                         </div>
                     </div>

                 </div>

                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Agama:</label>
                             <select class="form-control" name="agama">
                                 <option>Pilih</option>
                                 <option value="Islam">Islam</option>
                                 <option value="Kristen">Kristen</option>
                                 <option value="Katolik">Katolik</option>
                                 <option value="Hindu">Hindu</option>
                                 <option value="Budha">Budha</option>
                                 <option value="Lainnya">Lainnya</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Jenis Kelamin:</label>
                             <select class="form-control" name="jk">
                                 <option>Pilih</option>
                                 <option value="1">Laki-laki</option>
                                 <option value="2">Perempuan</option>
                             </select>
                         </div>
                     </div>

                 </div>
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Anak Ke :</label>
                             <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke">
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Jumlah Saudara Kandung:</label>
                             <input type="text" name="jml_saudara" class="form-control"
                                 placeholder="Masukan Jumlah Saudara">
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Status Anak:</label>
                             <input type="text" name="status_anak" class="form-control"
                                 placeholder="Masukan Status anak">
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nama Ibu Kandung:</label>
                             <input type="text" name="nama_ibu" class="form-control"
                                 placeholder="Masukan Nama Ibu Kandung">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nama Ayah Kandung:</label>
                             <input type="text" name="nama_ayah" class="form-control"
                                 placeholder="Masukan Nama Ayah Kandung">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>No Telp Orang Tua:</label>
                             <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                         </div>
                     </div>
                     <!-- <div class="col-sm-6">
                         <div class="form-group">
                             <label>foto:</label>
                             <input type="file" name="foto" class="form-control">
                         </div>
                     </div> -->
                 </div>
                 <div class="alert alert-primary">
                     <strong>Data Alamat Asal</strong>
                 </div>
                 <div class="row">
                     <div class="col-sm-10">
                         <div class="form-group">
                             <label>Alamat:</label>
                             <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                         </div>
                     </div>
                     <div class="col-sm-2">
                         <div class="form-group">
                             <label>Kode Pos:</label>
                             <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                         </div>
                     </div>
                 </div>


                 <div class="row">
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Provinsi:</label>
                             <select class="form-control" name="provinsi" id="provinsi">
                                 <?php
                                    include "koneksi.php";
                                    //Perintah sql untuk menampilkan semua data pada tabel provinsi
                                    $sql = "select * from provinsi";
                                    $hasil = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    ?>
                                 <option value="<?php echo $data['id_prov']; ?>"><?php echo $data['nama']; ?>
                                 </option>
                                 <?php
                                    }
                                    ?>
                             </select>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Kabupaten:</label>
                             <select class="form-control" name="kabupaten" id="kabupaten">
                                 <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                             </select>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="form-group">
                             <label>Kecamatan:</label>
                             <select class="form-control" name="kecamatan" id="kecamatan">
                                 <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                             </select>
                         </div>
                     </div>

                 </div>
                 <script>
                 $("#provinsi").change(function() {
                     // variabel dari nilai combo provinsi
                     var id_provinsi = $("#provinsi").val();

                     // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                     $.ajax({
                         type: "POST",
                         dataType: "html",
                         url: "ambil-data.php",
                         data: "provinsi=" + id_provinsi,
                         success: function(data) {
                             $("#kabupaten").html(data);
                         }
                     });
                 });

                 $("#kabupaten").change(function() {
                     // variabel dari nilai combo box kabupaten
                     var id_kabupaten = $("#kabupaten").val();

                     // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                     $.ajax({
                         type: "POST",
                         dataType: "html",
                         url: "ambil-data.php",
                         data: "kabupaten=" + id_kabupaten,
                         success: function(data) {
                             $("#kecamatan").html(data);
                         }
                     });
                 });
                 </script>
                 <div class="alert alert-primary">
                     <strong>Kelas Pendafataran</strong>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="form-group">
                             <label>Kelas:</label>
                             <select class="form-control" name="kelas">
                                 <option>Pilih</option>
                                 <option value="A">Kelas - A</option>
                                 <option value="B">Kelas - B</option>
                             </select>
                         </div>
                     </div>

                 </div>

                 <div class="alert alert-primary">
                     <strong>Registrasi Akun</strong>
                 </div>
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Username:</label>
                             <input type="text" name="username" class="form-control" placeholder="Username">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Email:</label>
                             <input type="email" name="email" class="form-control" placeholder="email">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Password:</label>
                             <input type="password" name="password" class="form-control" placeholder="password">
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label>Ulangi Password:</label>
                             <input type="password" name="password2" class="form-control" placeholder="Ulangi password">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-4">
                         <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                         <button type="reset" class="btn btn-secondary">Reset</button>
                     </div>
                 </div>
             </form>
         </div>
     </section>
     <?php include "inc/footer.php" ?>