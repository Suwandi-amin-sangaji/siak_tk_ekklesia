<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="contaner">
    <div class="row">
        <div class="col-sm-12 text-center mt-5">
            <h4>Cari Report Siswa</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <form class="form text-center my-5" action="report_siswa.php" method="post">
                <label for="no_induk">Nomor Induk Siswa : </label>
                <input class="form-control mr-sm-5" type="text" placeholder="Nomor Induk" id="no_induk" name="no_induk" required><br>
                <button type="submit" name="submit" class="btn btn-warning">Search</button>
            </form>
        </div>
    </div>
</div>



<?php include 'include/footer.php'; ?>