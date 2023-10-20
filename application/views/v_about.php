<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template sederhana dengan
        codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">

</head>

<body>
    <section>
        <h1><?php echo $judul ?></h1>
        <img src="<?= base_url('assets/patrick.jpg') ?>" alt="">
        <h4>Nama</h4>
        <ul type="disc">
            <li>Nama Depan : Has Adhi</li>
            <li>Nama Belakang : Rian</li>
        </ul>
        <br>
        <h4>Alamat</h4>
        <ul type="none">
            <li> Jl. Ujung Harapan GG. Al-Ikhlas IX No.33 RT/RW 007/015</li>
        </ul>

        <h4>Tempat Lahir</h4>
        <ul type="none">
            <li>Bekasi</li>
        </ul>
        <h4>Olah Raga Favorit</h4>
        <ul type="square">
            <li>Bulutangkis</li>
            <li>Catur</li>
        </ul>
    </section>
</body>

</html>