<!-- membuat navbar -->
<div class="nav">
    <div class="container">
        <nav class="header">
            <h2 class="judul"><img src="<?php echo base_url('assets/img/logo dishub.png') ?>" width="30" height="33"> Sistem Informasi Absen</h2>
        </nav>
        <!-- Use any element to open the sidenav -->
        <span onclick="openNav()"><img class="ico_sidebar" src="<?php echo base_url('assets/img/icons/list.svg') ?>" width="32" height="32"></span>
    </div>
</div>
<!-- akhir navbarr -->

<!-- membuat sidebar -->
<div id="mySidenav" class="sidenav">
    <img src="<?php echo base_url('assets/img/logo dishub.png') ?>" class="logo"></<img>
    <h3>Dinas Perhubungan</h3>
    <p>Provinsi Jawa Tengah</p>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="menu">
        <ul>
            <li><a href="<?php base_url(); ?>"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-users"></i>Daftar Pegawai</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
        </ul>
    </div>

    <button class="btn-logout" type="button" href="<?= site_url('login/logout') ?>">Logout</button>
</div>