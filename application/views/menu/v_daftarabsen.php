<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/_partials/header.php') ?>

</head>

<body>
    <!-- memuat sidebar -->
    <?php $this->load->view('templates/_partials/sidenav.php'); ?>

    <div class="wrapper">
        <div id="main">
            <div class="col-4" id="cari">
                <div class="form-group">
                    <input type="text" class="form-control" id="search" placeholder="Search Data">
                </div>
            </div>
            <div class="table-responsive">
                <!-- memuat tabel -->
                <?php $this->load->view('templates/_partials/tabel.php'); ?>
                <!-- akhir table -->
                <nav>
                    <ul class="pagination justify-content-end">
                        <li>
                            <span class="page-link">Sebelumnya</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li>
                            <span class="page-link">Selanjutnya</span>
                        </li>
                    </ul>
                </nav>

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


    <?php $this->load->view('templates/_partials/js.php'); ?>

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