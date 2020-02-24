<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gis Absen Dishub</title>

    <link href="<?php echo base_url('assets/bootstrap/dist/css/styles.css') ?> " rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('assets/leaflet/leaflet.css') ?>">

    <style type="text/css">
        #mapid {
            height: 570px;
        }
    </style>
</head>


<?php $this->load->view('templates/_partials/sidenav.php'); ?>

<div id="layoutSidenav_content">
    <main style="padding-top: 50px; padding-bottom:80px">
        <div class="container-fluid">
            <h1 class="mt-4">Maps</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('pagination'); ?>">Tables Absen</a></li>
                <li class="breadcrumb-item active">Map</li>
            </ol>
            <div id="mapid"></div>
        </div>
    </main>
</div>

<?php $this->load->view('templates/_partials/footer.php'); ?>

<script src="https://kit.fontawesome.com/10e53f85be.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/leaflet/leaflet.js') ?> "></script>

<script type="text/javascript">
    var map = L.map('mapid').setView([-6.9932, 110.4203], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    $.getJSON("<?= base_url() ?>map/absen_json", function(data) {
        $.each(data, function(i, field) {

            var v_lat = parseFloat(data[i].lat);
            var v_long = parseFloat(data[i].lang);

            L.marker([v_lat, v_long]).addTo(map)
                .bindPopup(data[i].user_id)
        });
    });
</script>
</body>


</html>