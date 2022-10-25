<?php session_start();
if (isset($_SESSION['status'])) { ?>

<div class="header-area header-bottom">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-9  d-none d-lg-block">
                <div class="horizontal-menu">
                    <nav>
                        <ul id="nav_menu">
                            <li>
                                <a href="dash_siswa.php"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)"><i
                                        class="ti-layout-sidebar-left"></i><span>Akademik</span></a>
                                <ul class="submenu">
                                    <li><a href="exercise_siswa.php">Jadwal Kegiatan belajar</a></a></li>
                                    <li><a href="#">Jadwal Studi Tour</a></a></li>
                                    <li><a href="search_report.php">Report</a></li>
                                    <li><a href="games.php">Games</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i
                                        class="ti-layout-sidebar-left"></i><span>Pendaftaran</span></a>
                                <ul class="submenu">
                                    <?php
                                        // include "koneksi.php";
                                        // $data = mysqli_query($koneksi, "select * from tb_pembayaran");
                                        // $hasil = mysqli_fetch_array($data);
                                        // if ($hasil['status'] == 'Lunas') {
                                        //     echo "<li><a  href='berhasil_daftar.php'>Konfirmasi Pendaftaran</a></li>";
                                        // } elseif ($hasil['status'] != 'Lunas' or '') {
                                        //     echo  "<li><a href='berhasil_daftar.php'>Konfirmasi Pendaftaran</a></li>";
                                        // }
                                        ?>
                                    <li><a href='berhasil_daftar.php'>Konfirmasi Pendaftaran</a></li>
                                    <!-- <li><a href="pembayaran.php">Cetak Bukti Pendaftaran</a></li> -->
                                    <li><a href="status_pendaftaran.php">Cek Status Pendaftaran</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="ti-settings"></i> <span>Setting</span></a>
                                <ul class="submenu">
                                    <li><a href="Biodata.php">Biodata</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-3 clearfix">
                <div class="search-box">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..." required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div>

            <div class="col-12 d-block d-lg-none">
                <div id="mobile_menu"></div>
            </div>
        </div>
    </div>
</div>

<?php } ?>