<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI KMI AL-AZHAR</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!---owl carausel-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
    <!--font awesome-->
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">
    <!--syles costume kita-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <!------>   
    <script src="<?php echo base_url('assets/js/jquery-slim.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
<section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="top-contact">
                        <li><a href=""><i class="fas fa-phone"></i> 031-741-0171</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>smaalazhar.beji@sch.id</a></li>
                        <li><a href=""><i class="fas fa-bullhorn"></i>PPDB TA 2020/2021 TELAH DIBUKA</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="sosmed">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand">
                        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="">
                        <div class="brand-name">
                            <h1>SEKOLAH AL-AZHAR BEHJI</h1>
                            <h3>PONDOK PESANTREN DARUSSALAM BEHJI</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 searchbox-wrapper">
                    <div class="searchbox">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" class="from control" name="cari"
                                placeholder="Anda Ingin Cari Sesuatu..." aria-label="Tombol Cari" aria-describedby="Tombol Cari">
                                <div class="input-group-append">
                                    <button class="btn btn-utama" id="my-addon">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--section menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
        <div class="container">
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url();?>">BERANDA<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= base_url();?>index.php/beranda/#sambutan" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> INFORMASI</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url();?>index.php/informasi/profil">PROFIL YAYASAN DAN SEKOLAH</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/informasi/visi_misi">VISI DAN MISI</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/informasi/dasar">DASAR DAN TUJUAN</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/informasi/kegiatan">JADWAL KEGIATAN</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= base_url();?>index.php/beranda/#berita-terbaru" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> BERITA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url();?>index.php/berita/berita_sekolah"> BERITA SEKOLAH</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/berita/pengumuman"> PENGUMUMAN</a>
                            <a class="dropdown-item" href="#"> KALENDER PENDIDIKAN</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> SARANA & PRASARANA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url();?>index.php/sarana/bangunan"> SARANA INFRASTRUKTUR</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/sarana/sarana_ruang"> SARANA RUANG</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/sarana/sarana_alat"> SARANA ALAT PEMBELAJARAN</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>index.php/beranda/#tenaga-pendidik"> TENAGA PENDIDIK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>index.php/beranda/#peserta-didik"> PESERTA DIDIK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>index.php/beranda/#ekstrakulikuler"> EKSTRA KULIKULER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>index.php/beranda/#prestasi"> PRESTASI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= base_url();?>index.php/beranda/#galeri-document" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> GALERI</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url();?>index.php/galeri/galeri_foto"> GALERI FOTO</a>
                            <a class="dropdown-item" href="<?= base_url();?>index.php/galeri/galeri_vidio"> GALERI VIDIO</a>
                            <a class="dropdown-item" href="#"> GALERI PENDIDIKAN</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>index.php/informasi/kontak"> KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>