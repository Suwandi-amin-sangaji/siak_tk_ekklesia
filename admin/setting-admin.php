<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>
<?php
include 'koneksi.php';
$username = $_SESSION['username'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
while ($d = mysqli_fetch_array($data)) {
?>
<div class="container">
    <div class="row" style="margin:100px auto;">
        <div class="col-sm-10 offset-sm-1">
            <form class="setting mx-auto" style="width: 800px;" method="POST" action="update-akun.php">
                <h3 class="text-center mt-2">Setting Akun</h3>
                <div class="form-group row mt-5">
                    <label for="username" class="col-sm-2 col-form-label"><i class="fa fa-users"></i> Username</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo $d['username'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label"><i class="fa fa-envelope"></i> Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label"><i class="fa fa-unlock"></i>
                        Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center mt-5">
                        <button onclick="return confirm('Apakah anda yakin ingin merubah akun???')" href=""
                            type="submit" class="btn btn-primary">UPDATE</button>
                        <a href="dash-admin.php" class="btn btn-success">KEMBALI</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>
<?php include "include/footer.php"; ?>