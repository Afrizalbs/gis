<!-- membuat sidebar -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="menu">
        <a href="<?= base_url('home'); ?>"><i class="fas fa-home"></i>Beranda</a>
        <a href="<?= base_url('pagination'); ?>"><i class="fas fa-users"></i>Pegawai</a>
        <a href="#"><i class="fas fa-address-card"></i>About</a>
        <a href="<?= base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    <!--<button href="<?= base_url('login/logout'); ?>" class="btn-logout" type="submit">Logout</button>-->
</div>