<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/_partials/header.php') ?>

</head>

<body>
    <?php $this->load->view('templates/_partials/header-content.php'); ?>
    <!-- memuat sidebar -->
    <?php $this->load->view('templates/_partials/sidenav.php'); ?>

    <div class="wrapper">
        <div id="main">

            <div class="table-responsive">
                <div class="input-group col-4 mb-3">
                    <input type="text" class="form-control" placeholder="Cari user" id="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                    </div>
                </div>

                <!-- memuat tabel -->
                <?php $this->load->view('templates/_partials/tabel.php'); ?>
                <!-- akhir table -->
                <?php
                if (isset($links)) {
                    echo $links;
                }
                ?>

                <!--konten pop up box -->
                <div id="jwpopupBox" class="jwpopup">
                    <div class="jwpopup-content">
                        <div class="jwpopup-head">
                            <span class="close"><img src="<?php echo base_url('assets/img/icons/x.svg') ?>"></span>
                            <h3>LETAK LOKASI SAAT USER ABSEN</h3>
                        </div>
                        <div class="jwpopup-main" id="googleMap" style="width:100%; height:100%;">

                        </div>
                        <div class="jwpopup-footer">

                        </div>
                    </div>
                </div>
                <!-- akhir konten pop up box -->
            </div>
        </div>
    </div>
    <?php $this->load->view('templates/_partials/footer.php'); ?>



    <?php $this->load->view('templates/_partials/js.php'); ?>

    <script type="text/javascript">
        var $u = $('#tabel tr');

        $('#search').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, '').toLowerCase();
            $u.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, '').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>

    <!-- JS untuk tooltip -->
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Js untuk google maps -->
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.1212641, 110.4093027),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-7.1212641, 110.4093027),
                map: peta,
                animation: google.maps.Animation.BOUNCE
            });
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>


</html>