<?php $this->load->view('templates/_partials/header.php') ?>

<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom: 30px">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: right"> Sistem Informasi Geografis</h1>
                <p style="text-align: right; color: #808080 ">Pemetaan Absen Karyawan BRT Dinas Perhubungan Provinsi Jawa Tengah Secara Geografis</p>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
                <div class="row">
                    <div class="card mr-3" style="width: 18rem">
                        <img src="<?= base_url('assets/img/Pemetaan.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Pemetaan Absen</h5>
                            <p class="card-text">Pemetaan Absen Karyawan BRT Dinas Perhubungan Jawa Tengah secara Geografis.</p>
                            <a href="<?= base_url('pemetaan'); ?>" class="btn btn-success">Go to Map</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem">
                        <img src="<?= base_url('assets/img/trans-jateng.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Lokasi Shelter</h5>
                            <p class="card-text">Lokasi Shelter BRT Trans Jateng Rute Tawang-Bawen.</p>
                            <br><br>
                            <a href="<?= base_url('pemetaan/shelter'); ?>" class="btn btn-success">Go to Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('templates/_partials/footer'); ?>
    </div>
</div>
</body>

</html>