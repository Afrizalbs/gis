<?php $this->load->view('templates/_partials/header.php') ?>

<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
<<<<<<< Updated upstream
        <main>
            <div class="container-fluid">
                <h1 class="mt-5" style="text-align: right">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Pemetaan Absen</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="<?= base_url('pemetaan'); ?>">Look For More</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
=======
        <main style="padding-bottom: 30px">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: right"> Sistem Informasi Geografis</h1>
                <p style="text-align: right; color: #808080 ">Pemetaan Absen Karyawan BRT Dinas Perhubungan Provinsi Jawa Tengah Secara Geografis</p>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
                <div class="card" style="width: 18rem">
                    <img src="<?= base_url('assets/img/Pemetaan.jpg') ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Pemetaan Absen</h5>
                        <p class="card-text">Pemetaan Absen Karyawan BRT Dinas Perhubungan Jawa Tengah secara Geografis.</p>
                        <a href="<?= base_url('pemetaan'); ?>" class="btn btn-secondary">Go to Map</a>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('templates/_partials/footer'); ?>
    </div>
</div>
</body>

</html>