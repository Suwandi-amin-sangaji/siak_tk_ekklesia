<div class="mainheader-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a>
                        <TK href="index.html" style="font-size: 20px; color:black; font-weight:700 ;">TK EKLESIA
                    </a>
                </div>
            </div>

            <div class="col-md-9 clearfix text-right">
                <div class="d-md-inline-block d-block mr-md-4">
                    <ul class="notification-area">
                        <li id="full-view"><i class="ti-fullscreen"></i></li>
                        <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                    </ul>
                </div>
                <div class="clearfix d-md-inline-block d-block">
                    <div class="user-profile m-0">
                        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                            <?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../logout.php">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>