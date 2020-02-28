<?php $this->load->view('templates/_partials/header.php') ?>

<style>
    #map {
        height: 100%;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<!-- Navigation -->
<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<!-- Page Content -->
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom:80px">
            <div class="container-fluid">
                <h1 class="mt-2">Maps Detail</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('pagination'); ?>">Tables Absen</a></li>
                    <li class="breadcrumb-item active">Maps Detail</li>
                </ol>
                <div class="mt-3" id="map_div">
                    <div style="height:440px;" id="map"></div> <!-- Map Div -->
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    function initMap() {
        var marker;
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            zoom: <?php if (isset($view_lokasi)) {
                        echo '17';
                    } else {
                        echo '6.5';
                    } ?>,
            center: new google.maps.LatLng(<?php if (isset($view_lokasi)) {
                                                echo $view_lokasi->lat;
                                            } else {
                                                echo '39.015137';
                                            } ?>, <?php if (isset($view_lokasi)) {
                                                        echo $view_lokasi->lang;
                                                    } else {
                                                        echo '32.979530';
                                                    } ?>)
        });


        <?php if (isset($view_lokasi)) { ?>

            var marker = new google.maps.Marker({
                position: {
                    lat: <?php echo $view_lokasi->lat ?>,
                    lng: <?php echo $view_lokasi->lang ?>
                },
                map: map
            });

        <?php } ?>

        google.maps.event.addListener(map, 'click', function(event) {
            document.getElementById("lat").value = event.latLng.lat();
            document.getElementById("lang").value = event.latLng.lng();
        });

        map.addListener('click', function(e) {
            placeMarker(e.latLng, map);
        });

        function placeMarker(location, map) {
            if (marker) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
            map.panTo(location);
        }

    }
</script>

<?php $this->load->view('templates/_partials/footer.php'); ?>

</body>

</html>