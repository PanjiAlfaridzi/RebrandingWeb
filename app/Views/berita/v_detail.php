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
    <style>
        /* Berita Styles */
        .berita-detail {
            padding: 40px 0;
            background: #f8f9fa;
        }

        .entry {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .entry-img-container {
            width: 100%;
            height: 450px;
            /* Fixed height */
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .entry-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .entry-img:hover {
            transform: scale(1.02);
        }

        .entry-title {
            color: #2c4964;
            font-size: 28px;
            font-weight: 700;
            margin-top: 20px;
        }

        .entry-meta {
            margin: 15px 0;
            color: #777;
        }

        .entry-meta span {
            margin-right: 20px;
            font-size: 14px;
        }

        .entry-meta i {
            color: #5fcf80;
            margin-right: 5px;
        }

        .entry-content {
            color: #444;
            line-height: 1.8;
            font-size: 16px;
        }

        .entry-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .article-tags a {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            color: #5fcf80;
            margin-right: 8px;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .article-tags a:hover {
            background: #5fcf80;
            color: #fff;
        }

        .article-share {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .share-icon {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            transition: transform 0.3s;
        }

        .share-icon:hover {
            transform: translateY(-3px);
        }

        .share-icon.facebook {
            background: #3b5998;
        }

        .share-icon.twitter {
            background: #1da1f2;
        }

        .share-icon.whatsapp {
            background: #25d366;
        }

        .berita-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding: 20px 0;
        }

        .btn-nav {
            padding: 10px 20px;
            background: #5fcf80;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-nav:hover {
            background: #3ac162;
            color: #fff;
            transform: translateY(-2px);
        }

        .berita-not-found {
            text-align: center;
            padding: 60px 0;
        }

        .berita-not-found i {
            font-size: 60px;
            color: #5fcf80;
            margin-bottom: 20px;
        }

        .berita-not-found h3 {
            color: #2c4964;
            margin-bottom: 10px;
        }

        .btn-back-home {
            display: inline-block;
            padding: 12px 30px;
            background: #5fcf80;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: all 0.3s;
        }

        .btn-back-home:hover {
            background: #3ac162;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Breadcrumbs styling */
        .breadcrumbs {
            margin-top: 80px;
            padding: 30px 0;
            background: linear-gradient(135deg, #5fcf80 0%, #3ac162 100%);
            color: #fff;
        }

        .breadcrumbs h2 {
            font-size: 28px;
            font-weight: 600;
        }

        .breadcrumbs p {
            margin: 0;
            opacity: 0.8;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .entry-img-container {
                height: 300px;
            }

            .entry {
                padding: 20px;
            }

            .entry-title {
                font-size: 24px;
            }

            .entry-footer {
                flex-direction: column;
                gap: 20px;
            }
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
                            <li><a href="#">Visi, Misi dan Tujuan</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Tugas dan Fungsi</a></li>
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


    <!-- Main Content -->
    <main id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2><?= $judul ?></h2>
                <p>Detail berita terkini dari Dinas Perikanan Kota Semarang </p>
            </div>
        </div>

        <!-- ======= Detail Berita Section ======= -->
        <section class="berita-detail pt-4">
            <div class="container">
                <?php if (isset($berita) && !empty($berita)): ?>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <!-- Berita Card -->
                            <article class="entry">
                                <!-- Berita Image Container -->
                                <div class="entry-img-container mb-4">
                                    <img src="<?= base_url('foto/' . $berita['gambar_berita']) ?>"
                                        alt="<?= $berita['judul_berita'] ?>"
                                        class="entry-img">
                                </div>

                                <h2 class="entry-title mb-3">
                                    <?= $berita['judul_berita'] ?>
                                </h2>

                                <div class="entry-meta mb-4">
                                    <span><i class="bi bi-calendar-event"></i> <?= date('d F Y') ?></span>
                                    <span><i class="bi bi-eye"></i> 123 Views</span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>

                                <div class="entry-content">
                                    <?= $berita['isi_berita'] ?>
                                </div>

                                <!-- Tags & Share -->
                                <div class="entry-footer mt-4">
                                    <div class="article-tags">
                                        <i class="bi bi-tags"></i>
                                        <a href="#">Perikanan</a>
                                        <a href="#">Berita</a>
                                    </div>

                                    <div class="article-share">
                                        <span>Bagikan:</span>
                                        <a href="#" class="share-icon facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="share-icon twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="share-icon whatsapp"><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </article>

                            <!-- Navigation -->
                            <div class="berita-nav">
                                <a href="<?= base_url('home') ?>" class="btn-nav back">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <a href="#" class="btn-nav next">
                                    Berita Selanjutnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="berita-not-found">
                        <i class="bi bi-journal-x"></i>
                        <h3>Berita Tidak Ditemukan</h3>
                        <p>Maaf, berita yang Anda cari tidak tersedia</p>
                        <a href="<?= base_url('home') ?>" class="btn-back-home">Kembali ke Beranda</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>






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
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
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