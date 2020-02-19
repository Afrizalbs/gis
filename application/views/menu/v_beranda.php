<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/_partials/header.php') ?>

</head>


<body>
    <?php $this->load->view('templates/_partials/header-content.php'); ?>
    <?php $this->load->view('templates/_partials/sidenav.php'); ?>
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="col-12 col-md-12">
                <div style="text-align: center">
                    <h1>Sistem Informasi Geografis</h1>
                    <p>Pemetaan Absen Pegawai Shelter BRT Trans Jateng secara Geografis</p>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('templates/_partials/footer'); ?>
    <?php $this->load->view('templates/_partials/js.php'); ?>
</body>


</html>