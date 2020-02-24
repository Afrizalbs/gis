<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gis Absen Dishub</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/leaflet/leaflet.css') ?>">\

    <style type="text/css">
        #mapid {
            height: 570px;
        }
    </style>
</head>


<body>
    <div class="header">
        <div class="container">
            <nav class="company">
                <h2 class="judul"><img src="<?php echo base_url('assets/img/logo dishub.png') ?>" width="30" height="33"> Sistem Informasi Absen</h2>
            </nav>
            <!-- Use any element to open the sidenav -->

        </div>
        <div class="wrapper">
            <div class="page-wrapper">
                <div id="mapid"></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="copyright text-center">
                    <span>Copyright © Dishub Jateng, <?php echo Date('d-M-Y') ?></span>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url('assets/js/script.js') ?> "></script>
        <script src="<?php echo base_url('assets/js/jquery.js') ?> "></script>
        <script src="<?php echo base_url('assets/js/popper.js') ?> "></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?> "></script>

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