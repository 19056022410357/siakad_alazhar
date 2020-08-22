<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progate</title>
    <!--syles costume kita-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylesheet.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive1.css'); ?>">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="https://prog-8.com/images/html/advanced/main_logo.png">
        </div>
        <a href="#" class="menu-icon"><span class="fa fa-bars"></span></a>
        <div class="header-right">
          <a href="#">Pelajaran</a>
          <a href="#">Daftar</a>
          <a href="#" class="login">Log in</a>
        </div>
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <img src="<?php echo base_url('assets/img/elearning/elearning4.png'); ?>">
        <h1>E-LEARNING SYSTEM MANAGEMENT</h1>
        <h1> SEKOLAH AL-AZHAR BEHJI SURABAYA </h1>
        <p>E-LEARNING SYSTEM MANAGEMENT adalah platform online untuk Pembelajaran yang berbasi online untuk tingkat sekolah.</p>
        <p>PEMBELAJARAN YANG EFEKTIF, EFISIEN DAN KREATIF</p>
        <div class="btn-wrapper">
          <a href="#" class="btn signup">Daftar dengan Email</a>
          <p>atau</p>
          <a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Daftar dengan Facebook</a>
          <a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Daftar dengan Twitter</a>
        </div>
      </div>
    </div>
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Cari tau dari mana anda mau memulai!</h2>
        </div>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/html.png">
               <p>HTML & CSS</p>
            </div>
             <p class="text-contents">Bahasa yang digunakan untuk membuat struktur dan design tampilan situs web Anda.</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/jQuery.png">
              <p>jQuery</p>
            </div>
            <p class="text-contents">Library JavaScript yang cepat, kaya akan fitur, dan mudah digunakan yang menangani animasi dan permintaan Ajax.</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/ruby.png">
              <p>Ruby</p>
            </div>
            <p class="text-contents">Bahasa dinamis, serba guna yang sederhana dan produktif. Ruby sering digunakan untuk membuat aplikasi web yang responsive.</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/php.png">
              <p>PHP</p>
            </div>
            <p class="text-contents">Bahasa skrip open source yang dapat disematkan ke dalam HTML, dan cocok untuk pengembangan web.</p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Apakah anda siap untuk menjadi programer yang handal?</h2>
          <h3>Ayo belajar coding, ayo belajar menjadi lebih kreatif!</h3>
        </div>
        <span class="btn message">Mulai Belajar</span>
      </div>
    </div>
    <footer>
      <div class="container">
        <img src="https://prog-8.com/images/html/advanced/footer_logo.png">
        <p>Learn to code, learn to be creative.</p>
      </div>
    </footer>
</body>
</html>