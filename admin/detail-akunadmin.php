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
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">1.ID Akun Admin :</label>
                    <div class="col-sm-9">
                        <?php echo $data['id']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">2. Username :</label>
                    <div class="col-sm-9">
                        <?php echo $data['username']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">3. Email :</label>
                    <div class="col-sm-9">
                        <?php echo $data['email']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">4. Password :</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" value=" <?php echo $data['password']; ?>"
                            readonly="readonly" />
                    </div>
                </div>
                <!-- Buttom -->
                <div class="buttom col-sm-12 my-5 text-center">
                    <a href="akun-admin.php" class="btn btn-info">KEMBALI</a>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>