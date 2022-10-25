<?php

use function PHPSTORM_META\type;

include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Detail Guru</h4>
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($koneksi, "select * from tb_user where id = '$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                            aria-describedby="inputGroupPrepend" value="<?php echo $data['username']; ?>">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                            aria-describedby="inputGroupPrepend" value="<?php echo $data['email']; ?>">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="validationCustomUsername" placeholder="Username"
                            aria-describedby="inputGroupPrepend" value="<?php echo $data['password']; ?>">
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12">
                    <a href="akun-guru.php" class="btn btn-info">Kembali</a>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>