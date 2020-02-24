<!-- Awal Tabel -->
<table class="table">
    <thead class="thead">
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
    <tbody id="tabel">
        <?php
        $no = 1;
        foreach ($tb_geoatt_brt as $u) {
        ?>
            <tr>
                <td data-field="no"><?php echo $no++ ?></td>
                <td data-field="user"><?php echo $u->user_id ?></td>
                <td data-field="start-date"><?php echo $u->start_date ?></td>
                <td data-field="end-date"><?php echo $u->end_date ?></td>
                <td data-field="lat"><?php echo $u->lat ?></td>
                <td data-field="lang"><?php echo $u->lang ?></td>
                <td class="text-center">
                    <a href="<?= base_url() ?>map" style="color: #fd7e15; margin-right: 5px" data-toggle="tooltip" data-placement="top" title="Lihat Detail Lokasi">
                        <span><img src="<?php echo base_url('assets/img/icons/map-marked.svg') ?>" width="25" height="25"></span>
                    </a>
                    <a id="delete" style="color: #fd7e15" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                        <span><img src="<?php echo base_url('assets/img/icons/trash.svg') ?>" width="25" height="25"></span>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Akhir Table -->