<?php include "include/head.php" ?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>

<div class="contaner">
    <div class="row">
        <div class="col-sm-12 text-center mt-5 mb-3">
            <h4>Cek Status Pendaftaran</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <section>
                <div class="container">
                    <input type="text" id="live_search" class="form-control" autocomplete="off" placeholder="Input No Nik Pendaftaran ...">
                </div>
                <div id="searchresult">
                </div>
            </section>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#live_search").keyup(function() {
            var input = $(this).val();
            // alert(input);
            if (input != "") {
                $.ajax({
                    url: "get_status_pendaftaran.php",
                    method: "POST",
                    data: {
                        input: input
                    },

                    success: function(data) {
                        $("#searchresult").html(data);
                        $("#searchresult").css("display", "block");
                    }
                })
            } else {
                $("#searchresult").css("display", "none");
            }
        })
    })
</script>
<?php include 'include/footer.php'; ?>