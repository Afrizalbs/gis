<!-- membuat sidebar -->
<!-- <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="menu">
        <a href="<?= base_url('home'); ?>"><i class="fas fa-home"></i>Beranda</a>
        <a href="<?= base_url('pagination'); ?>"><i class="fas fa-users"></i>Pegawai</a>
        <a href="#"><i class="fas fa-address-card"></i>About</a>
        <a href="<?= base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div> -->
<!--<button href="<?= base_url('login/logout'); ?>" class="btn-logout" type="submit">Logout</button>-->
<!-- </div> -->

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">GIS | Absen</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <img src="<?= base_url('assets/img/logo jateng.png') ?>" width="50%" height="60%" style="margin-left: 50px; margin-top: 15px;">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url('home'); ?> ">
                            <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                            Beranda
                        </a>
                        <div class="sb-sidenav-menu-heading">Pegawai</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts Absen
                        </a><a class="nav-link" href="<?= base_url('pagination'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tabel Absen
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    ADMIN
                </div>
            </nav>
        </div>
    </div>