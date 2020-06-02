<?php $this->load->view('templates/_partials/header.php') ?>


<!-- memuat sidebar -->
<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom:80px">
            <div class="container-fluid">
                <h1 class="mt-2">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Absen</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>User ID</th>
                                        <th>Absen Masuk</th>
                                        <th>Absen Keluar</th>
                                        <th class="text-left">Lat</th>
                                        <th class="text-left">long</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $u) :
                                        $userid = $u['user_id'];
                                        $startdate = $u['start_date'];
                                        $enddate = $u['end_date'];
                                        $latitude = $u['lat'];
                                        $longitude = $u['lang'];
                                    ?>
                                        <tr>
                                            <td data-field="user"><?php echo $no++ ?></td>
                                            <td data-field="user"><?php echo $userid ?></td>
                                            <td data-field="start-date"><?php echo $startdate ?></td>
                                            <td data-field="end-date"><?php echo $enddate ?></td>
                                            <td data-field="lat"><?php echo $latitude ?></td>
                                            <td data-field="lang"><?php echo $longitude ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('maps/view/');
                                                            echo $u['id'] ?>" style="color: #fd7e15; margin-right: 5px" data-toggle="tooltip" data-placement="top" title="Lihat Detail Lokasi">
                                                    <span><img src="<?php echo base_url('assets/img/icons/map-marked.svg') ?>" width="25" height="25"></span>
                                                </a>
                                                <a href="<?= base_url('maps/delete/');
                                                            echo $u['id'] ?>" id="delete" style="color: #fd7e15" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                    <span><img src="<?php echo base_url('assets/img/icons/trash.svg') ?>" width="25" height="25"></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('templates/_partials/footer.php'); ?>
    </div>
</div>


<!-- JS untuk tooltip -->
<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>

</html>