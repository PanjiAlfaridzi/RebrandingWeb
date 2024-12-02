<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB Dinas Perikanan Kota Semarang- <?= $judul ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('front-end') ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('front-end') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front-end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <style>
        .body{
            font-family: "Plus Jakarta Sans", sans-serif;
        }
        .card-berita { 
            overflow: hidden; 
        } 
        .card-berita img { 
            transition: transform 0.2s ease; 
        } 
        .card-berita:hover img { 
            transform: scale(1.1); /* Zoom-in gambar saat kursor berada di atas kartu */ 
            filter: brightness(70%);
        }
    </style>

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <img src=<?= base_url('logo/logo.png') ?> width=50px>
            <h1 class="logo me-auto"><a href="index.html">Perikanan</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="index.html">Beranda</a></li>

                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="<?= base_url('/index.php/Visi')?>">Visi, Misi dan Tujuan</a></li>
                            <li><a href="">Sejarah</a></li>
                            <li><a href="<?= base_url('/index.php/Struktur')?>">Struktur Organisasi</a></li>
                            <li><a href="<?= base_url('/index.php/Tugas')?>">Tugas dan Fungsi</a></li>
                            <li><a href="#">Kepegawaian</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Layanan 1</a></li>
                            <li><a href="#">Layanan 2</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Berita</a></li>
                            <li><a href="#">Pengumuman</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Media Informasi</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profil PPID</a></li>
                            <li><a href="#">Dasar Hukum</a></li>
                            <li><a href="#">Struktur PPID</a></li>
                            <li><a href="#">Maklumat Pelayanan</a></li>
                            <li><a href="#">Standar Layanan</a></li>
                            <li><a href="#">Prosedur Layanan</a></li>
                            <li><a href="#">Biaya Layanan</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Dokumen Perencanaan</a></li>
                    <li><a href="#">Peraturan Perundangan</a></li>

                    <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Foto</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h2>Dinas Perikanan</h2>
            <h1>Kota semarang</h1>
        </div>
    </section><!-- End Hero -->

    <!-- ======= News Section ======= -->
    <section id="news" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Berita</h2>
                <p>Berita Terbaru</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php foreach ($berita as $item) : ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                        <div class="card-berita shadow-sm h-100">
                        <img src="<?= base_url('image/iberita/' . $item['gambar_berita']) ?>" class="card-img-top" alt="...">
                            <div class="card-body my-1 d-flex flex-column">
                                <h4 class="mx-auto mt-2"><a href="<?= base_url('berita/' . esc($item['id_berita'])) ?>"><?= esc($item['judul_berita']) ?></a></h3>
                                <p class="mx-2">
                                    <?= esc(substr(strip_tags($item['isi_berita']), 0, 150)) . '...' ?>
                                </p>
                                <div class="mt-auto text-center mb-3">
                                    <div class="trainer-profile">
                                        <a href="<?= base_url('berita/detail/' . esc($item['id_berita'])) ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination d-flex justify-content-center">
                <?= $pagination_links ?>
            </div>
        </div>
    </section>

    <!-- End News Section -->

    <!-- Profile-->
    <main id="main">

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-1 content">
                        <h3>Tentang Kami</h3>
                        <p class="fst-italic">
                            Dinas Perikanan Kota Semarang Jl. Pemuda No.175, Sekayu, Semarang Tengah,
                            Kota Semarang, Jawa Tengah 50132 (024) 3547998
                        </p>
                    </div>
                    <div class="col-lg-6 order-2" data-aos="fade-left" data-aos-delay="100">
                        <img src=<?= base_url('logo/about.jpg') ?> class=" img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="bg-light text-dark py-4">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <!-- Left Section: About, Quick Links, Contact, and Social Media -->
            <div class="d-flex flex-wrap align-items-start">
                <!-- About Section -->
                <div class="footer-about me-4">
                    <h5><i class="bx bx-info-circle"></i> About Us</h5>
                    <p>Terwujudnya Sumberdaya Perikanan dan Masyarakat yang</p>
                    <p>Mampu Menampung Aktivitas Perekonomian</p>
                    <p>Kota Semarang.</p>

                </div>
                <!-- Quick Links Section -->
                <div class="footer-links me-4">
                    <h5><i class="bx bx-link"></i> Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="bx bx-home"></i> Home</a></li>
                        <li><a href="#"><i class="bx bx-cog"></i> Servis</a></li>
                        <li><a href="#"><i class="bx bx-news"></i> Berita</a></li>
                        <li><a href="#"><i class="bx bx-phone"></i> Kontak</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="footer-contact me-4">
                    <h5><i class="bx bx-envelope"></i> Contact</h5>
                    <p>
                        <i class="bx bx-map"></i> Jl. Pemuda No.175, Sekayu, Semarang Tengah<br>
                        <i class="bx bx-mail-send"></i> Email: perikanan@semarangkota.go.id<br>
                        <i class="bx bx-phone"></i> Phone: (024) 3547998
                    </p>
                </div>
                <!-- Social Media Section -->
                <div class="footer-social">
                    <h5><i class="bx bxl-share-alt"></i> Ikuti Kami</h5>
                    <div class="d-flex">
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fperikanansmg" class="twitter me-2">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/DinasPerikananKotaSemarang/" class="facebook me-2">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/dinasperikanankotasemarang" class="instagram">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Right Section: Logo -->
            <div class="footer-logo">
                <img src="<?= base_url('logo/Lambang_Kota_Semarang.png') ?>"
                    style="width: 100px; height: auto;"
                    alt="Logo Kota Semarang">
            </div>
        </div>
        <!-- Bottom Section -->
        <div class="text-center mt-3">
            <p>&copy; <?= date('Y') ?> Kominfo Semarang. All Rights Reserved.</p>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('front-end') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('front-end') ?>/assets/js/main.js"></script>

</body>

</html>