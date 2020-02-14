<!-- Awal Tabel -->
<table class="table">
    <thead class="thead">
        <tr>
            <th>No.</th>
            <th>User ID</th>
            <th>Absen Masuk</th>
            <th>Absen Keluar</th>
            <th class="text-left">Izin</th>
            <th class="text-center">Approve by</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($tb_geoatt_brt as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->user_id ?></td>
                <td><?php echo $u->start_date ?></td>
                <td><?php echo $u->end_date ?></td>
                <td><?php echo $u->ijin_pulang_cepat ?></td>
                <td><?php echo $u->approve_by ?></td>
                <td class="text-center">
                    <a href="javascript:void(0)" id="jwpopupLink" style="color: #fd7e15; margin-right: 5px" data-toggle="tooltip" data-placement="top" title="Lihat Detail Lokasi">
                        <span><img src="<?php echo base_url('assets/img/icons/map-marked.svg') ?>" width="25" height="25"></span>
                    </a>
                    <a id="delete" style="color: #fd7e15" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                        <span><img src="<?php echo base_url('assets/img/icons/trash.svg') ?>" width="25" height="25"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Akhir Table -->