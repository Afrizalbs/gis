<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>GIS Absen | Login</title>
    <link rel="icon" href="<?= base_url('assets/img/Logo jateng.png') ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/OcOrato---Login-form-1.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/OcOrato---Login-form.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">

</head>

<body>
    <!-- membuat form -->
    <form id="form" method="POST" action="<?php echo base_url('login/aksi_login') ?>">
        <h1 id="head" style="color: rgb(193,166,83)">Login</h1>
        <img class="rounded img-fluid" id="image" style="width:auto;height:auto;margin-left:42px;" src="<?php echo base_url('assets/img/Logo jateng.png') ?>">
        <div></div>

        <div class="form-group">
            <input class="form-control" type="text" name="username" id="formum" placeholder="Username">
            <small><span class="text-danger"><?= form_error('username') ?></span></small>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" id="formum2" placeholder="Password">
            <small><span class="text-danger"><?= form_error('password') ?></span></small>
        </div>
        <button class="btn btn-light" id="butonas" type="submit">Login</button>
    </form>
    <!-- akhir form -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>