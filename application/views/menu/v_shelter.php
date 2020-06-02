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
                <h1 class="mt-2">Shelter BRT Trans Jateng Rute Tawang - Bawen</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active">Shelter BRT</li>
                </ol>
                <div class="mt-3" id="map_div">
                    <div style="height:440px;" id="map"></div> <!-- Map Div -->
                </div>
            </div>
        </main>
        <?php $this->load->view('templates/_partials/footer.php'); ?>
    </div>
</div>
<script>
    function initMap() {
        var tengah = {
            lat: -7.108491,
            lng: 110.4848261
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: tengah
        });

        var iconBase = 'http://gis.perhubungan.jatengprov.go.id/assets/theme/img/';
        var icons = {
            TB: {
                icon: iconBase + 'shelter_tawang_bawen.png'
            },
            BT: {
                icon: iconBase + 'shelter_bawen_tawang.png'
            },
            P: {
                icon: iconBase + 'point.png'
            }
        };
        var features = [{
                position: new google.maps.LatLng(-6.965586, 110.426946),
                type: 'P',
                shelter: 'Stasiun Tawang',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'POINT',
            },
            {
                position: new google.maps.LatLng(-6.968508, 110.426624),
                type: 'TB',
                shelter: 'Kota Lama',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.970243, 110.423680),
                type: 'TB',
                shelter: 'Kantor Pos Besar',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.972159, 110.421801),
                type: 'TB',
                shelter: 'Bata Pemuda',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.975905, 110.418125),
                type: 'TB',
                shelter: 'BCA Pemuda',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.979754, 110.414260),
                type: 'TB',
                shelter: 'Balai Kota Pemuda',
                status: 'PROVINSI',
                tipe: 'Portable',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.985978, 110.409113),
                type: 'TB',
                shelter: 'Gereja Katredal',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.992462, 110.406475),
                type: 'TB',
                shelter: 'RS. Karyadi',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-6.996645, 110.407600),
                type: 'TB',
                shelter: 'Ngaglik 1',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.004437, 110.408874),
                type: 'TB',
                shelter: 'Gajah Mungkur',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.008019, 110.416653),
                type: 'TB',
                shelter: 'Elishabeth',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.011801, 110.416174),
                type: 'TB',
                shelter: 'Kagok',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.016683, 110.418662),
                type: 'TB',
                shelter: 'Akpol',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.022228, 110.420116),
                type: 'TB',
                shelter: 'Don Bosco',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.029864, 110.418444),
                type: 'TB',
                shelter: 'Ksatrian - PLN',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.032215, 110.418140),
                type: 'TB',
                shelter: 'Pasar Jatingaleh',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.044212, 110.421567),
                type: 'TB',
                shelter: 'Gombel',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.047605, 110.420406),
                type: 'TB',
                shelter: 'Ngesrep',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.049987, 110.418894),
                type: 'TB',
                shelter: 'Tembalang',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.051208, 110.417944),
                type: 'TB',
                shelter: 'Srondol',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.060225, 110.414125),
                type: 'TB',
                shelter: 'Ada Setiabudi',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.063681, 110.412673),
                type: 'TB',
                shelter: 'Sukun 1',
                status: 'PROVINSI',
                tipe: 'Tipe A',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.065433, 110.412282),
                type: 'TB',
                shelter: 'Sukun Kota',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.074206, 110.411329),
                type: 'TB',
                shelter: 'Pasar Banyumanik',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.082106, 110.410976),
                type: 'TB',
                shelter: 'Makodam',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.093967, 110.409791),
                type: 'TB',
                shelter: 'SD Pudak Payung',
                status: 'KOTA',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.098125, 110.409693),
                type: 'TB',
                shelter: 'BPK 1',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.110598, 110.412761),
                type: 'TB',
                shelter: 'Taman Unyil',
                status: 'PROVINSI',
                tipe: 'Tipe B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.115524, 110.413309),
                type: 'TB',
                shelter: 'PT. Mas',
                status: 'PERUSAHAAN',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.121263, 110.409310),
                type: 'TB',
                shelter: 'Assalamah',
                status: 'PROVINSI',
                tipe: 'TIpe B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.125426, 110.406158),
                type: 'TB',
                shelter: 'Pasar Bandarharjo',
                status: 'PERUSAHAAN',
                tipe: '-',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.129504, 110.404294),
                type: 'TB',
                shelter: 'Beteng 1',
                status: 'PROVINSI',
                tipe: 'Portable',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.134732, 110.404306),
                type: 'TB',
                shelter: 'SMA N 1 Ungaran 1',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.147220, 110.407676),
                type: 'TB',
                shelter: 'Undaris 1',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.162749, 110.412856),
                type: 'TB',
                shelter: 'Pasar Babadan',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.168695, 110.414227),
                type: 'TB',
                shelter: 'Langensari 1',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.17542, 110.41706),
                type: 'TB',
                shelter: 'Wujil 1',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.179089, 110.421756),
                type: 'TB',
                shelter: 'Lemah Abang',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.183929, 110.426349),
                type: 'TB',
                shelter: 'Pasar Karangjati',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.194225, 110.426038),
                type: 'TB',
                shelter: 'Sido Muncul',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.205414, 110.423787),
                type: 'TB',
                shelter: 'Bergas 1',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.221043, 110.431011),
                type: 'TB',
                shelter: 'Harjosari 1',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.225972, 110.431111),
                type: 'TB',
                shelter: 'APAC Inti',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'TAWANG - BAWEN',
            },
            {
                position: new google.maps.LatLng(-7.24508, 110.43334),
                type: 'P',
                shelter: 'Terminal Bawen',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'POINT',
            },
            {
                position: new google.maps.LatLng(-7.245098, 110.433328),
                type: 'P',
                shelter: 'Terminal Bawen',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'POINT',
            },
            {
                position: new google.maps.LatLng(-7.223487, 110.431152),
                type: 'BT',
                shelter: 'Kecamatan Bawen',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.218483, 110.429760),
                type: 'BT',
                shelter: 'Harjosari 2',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.204222, 110.423542),
                type: 'BT',
                shelter: 'Bergas 2',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.191157, 110.425573),
                type: 'BT',
                shelter: 'SMA 1 Bergas',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.184051, 110.426161),
                type: 'BT',
                shelter: 'Sub Terminal Karangjati',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.181788, 110.424544),
                type: 'BT',
                shelter: 'Ngobo',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.17486, 110.41675),
                type: 'BT',
                shelter: 'Wujil 2',
                status: 'PROVINSI',
                tipe: 'TIPE B-1',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.167565, 110.413679),
                type: 'BT',
                shelter: 'Langensari 2',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.145780, 110.406949),
                type: 'BT',
                shelter: 'Undaris 2',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.143259, 110.406038),
                type: 'BT',
                shelter: 'Mang Engking',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.135270, 110.404323),
                type: 'BT',
                shelter: 'SMA N 1 Ungaran 2',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.129652, 110.404138),
                type: 'BT',
                shelter: 'Beteng 2',
                status: 'PROVINSI',
                tipe: 'TIPE B',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.103116, 110.409157),
                type: 'BT',
                shelter: 'Pudak Payung',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.097592, 110.409729),
                type: 'BT',
                shelter: 'BPK 2',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.093440, 110.409439),
                type: 'BT',
                shelter: 'Pudak Payung 2',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.080043, 110.411246),
                type: 'BT',
                shelter: 'Makodam',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.073630, 110.411041),
                type: 'BT',
                shelter: 'Terminal Banyumanik',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.063482, 110.412631),
                type: 'BT',
                shelter: 'Sukun 2',
                status: 'PROVINSI',
                tipe: 'TIPE A',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.059995, 110.414156),
                type: 'BT',
                shelter: 'Ada Banyumanik',
                status: 'KOTA',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.051552, 110.417516),
                type: 'BT',
                shelter: 'Srondol 2',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.047588, 110.420287),
                type: 'BT',
                shelter: 'Tembalang',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.043885, 110.421471),
                type: 'BT',
                shelter: 'Gombel',
                status: 'KOTA',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.031741, 110.417959),
                type: 'BT',
                shelter: 'Pasar Jatingaleh',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.029271, 110.418203),
                type: 'BT',
                shelter: 'Ksatrian',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.022442, 110.420118),
                type: 'BT',
                shelter: 'Don Bosco',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.015225, 110.418121),
                type: 'BT',
                shelter: 'AKPOL',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.011118, 110.415622),
                type: 'BT',
                shelter: 'Papandayan',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.008027, 110.416591),
                type: 'BT',
                shelter: 'Elisabeth',
                status: 'PROVINSI',
                tipe: 'Portable',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-7.004559, 110.408828),
                type: 'BT',
                shelter: 'Gajah Mungkur',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.996492, 110.407741),
                type: 'BT',
                shelter: 'Ngaglik2',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.993430, 110.406610),
                type: 'BT',
                shelter: 'RS Kariyadi',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.987267, 110.408365),
                type: 'BT',
                shelter: 'RST',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.981533, 110.410334),
                type: 'BT',
                shelter: 'Udinus',
                status: 'PROVINSI',
                tipe: 'PORTABLE',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.976860, 110.412344),
                type: 'BT',
                shelter: 'Beringin 2',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.972939, 110.415977),
                type: 'BT',
                shelter: 'Stasiun Poncol',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.970315, 110.421496),
                type: 'BT',
                shelter: 'Petek 2',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.968379, 110.422038),
                type: 'BT',
                shelter: 'Layur',
                status: 'KOTA',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
            {
                position: new google.maps.LatLng(-6.967514, 110.425094),
                type: 'BT',
                shelter: 'Damri',
                status: 'PROVINSI',
                tipe: '-',
                arah: 'BAWEN - TAWANG',
            },
        ];

        features.forEach(function(feature) {
            var marker = new google.maps.Marker({
                position: feature.position,
                icon: icons[feature.type].icon,
                map: map
            });
            var contentString = '' +
                '<div class="marker-holder">' +
                '<div class="marker-company-thumbnail"><img src="' + feature.image + '" alt="">' +
                '</div>' +
                '<div class="map-item-info">' +
                '<h5 class="title">' + feature.shelter + '</h5>' +
                '<div class="describe">' +
                '<div class="grup-info">' +
                '<label class="title">Status</label>' +
                '<label class="isi">' + feature.status + '</label>' +
                '</div>' +
                '<div class="grup-info">' +
                '<label class="title">Tipe</label>' +
                '<label class="isi">' + feature.tipe + '</label>' +
                '</div>' +
                '<div class="grup-info">' +
                '<label class="title">Arah</label>' +
                '<label class="isi">' + feature.arah + '</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        });
    }
</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1HBqMYvcjI161URlIQ96gkmiPlSYPpyc&callback=initMap"></script>

</body>

</html>