<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB Dinas Perikanan Kota Semarang - <?= $judul ?></title>

    <!-- Favicons -->
    <link href="<?= base_url('front-end') ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('front-end') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
        /* Custom styles for elegant cards */
        #visi-misi {
            background: #fff;
            padding: 100px 15px;
            padding-top: 120px;
            /* Add space above to avoid overlap with fixed header */
        }

        .visi-misi h2 {
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 60px;
            color: #343a40;
            font-family: 'Poppins', sans-serif;
            animation: fadeInUp 1.5s ease-out;
        }

        /* Animasi fade in */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .row-cols-1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-lg-4 {
            margin-bottom: 30px;
            padding: 0 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .col-lg-4:hover {
            transform: translateY(-10px);
        }

        .content-box {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            animation: slideIn 1.2s ease-out forwards;
            border: 2px solid transparent;
            background-clip: padding-box;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            /* Light shadow without prominent effect */
        }

        /* Hover effect for content box */
        .content-box:hover {
            border-color: #0066cc;
            transition: border-color 0.3s ease;
        }

        /* Animasi slide in */
        @keyframes slideIn {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .content-box i {
            font-size: 50px;
            color: #0066cc;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        /* Hover effect for icon */
        .content-box:hover i {
            transform: scale(1.2);
        }

        .content-box h4 {
            font-size: 26px;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-family: 'Poppins';
            position: relative;
            z-index: 1;
        }

        .content-box p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            font-family: 'Poppins';
            position: relative;
            z-index: 1;
        }

        .content-box ul {
            list-style-type: none;
            padding-left: 0;
        }

        .content-box ul li {
            margin-bottom: 12px;
            text-align: left;
            font-size: 16px;
            position: relative;
            z-index: 1;
            font-family: 'Poppins';
        }

        .content-box ul li::before {
            content: "\2022";
            color: #0066cc;
            font-weight: bold;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .col-lg-4 {
                flex: 1 0 100%;
                margin-bottom: 20px;
            }

            .visi-misi h2 {
                font-size: 30px;
            }

            .content-box h4 {
                font-size: 22px;
            }

            .content-box p {
                font-size: 14px;
            }

            .content-box ul li {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .visi-misi h2 {
                font-size: 24px;
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .content-box h4 {
                font-size: 20px;
            }

            .content-box p {
                font-size: 12px;
            }
        }

        .visi-misi .content-box {
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .visi-misi .content-box i {
            font-size: 48px;
            color: #3498db;
        }

        .visi-misi .content-box h4 {
            font-size: 24px;
            font-weight: 700;
            margin: 20px 0 15px 0;
        }

        .visi-misi .content-box p,
        .visi-misi .content-box ul {
            font-size: 14px;
            margin-bottom: 0;
        }

        .visi-misi .content-box ul {
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <img src=<?= base_url('logo/logo.png') ?> width=50px>
            <h1 class="logo me-auto"><a href="index.html">Perikanan</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="" href="index.html">Beranda</a></li>

                    <li class="dropdown"><a class="active" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('/index.php/Visi') ?>">Visi, Misi dan Tujuan</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="<?= base_url('/index.php/Struktur') ?>">Struktur Organisasi</a></li>
                            <li><a href="<?= base_url('/index.php/Tugas') ?>">Tugas dan Fungsi</a></li>
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

    <!-- ======= Visions Section ======= -->
    <section id="visi-misi" class="visi-misi">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1000">Visi, Misi dan Tujuan</h2>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="content-box">
                        <i class="bi bi-eye"></i>
                        <h4>Visi</h4>
                        <p>Mewujudkan Dinas Perikanan Kota Semarang sebagai lembaga yang profesional dalam pengelolaan sumber daya perikanan yang berkelanjutan.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                    <div class="content-box">
                        <i class="bi bi-flag"></i>
                        <h4>Misi</h4>
                        <ul>
                            <li>Menjamin pengelolaan perikanan yang berkelanjutan dengan pendekatan ekosistem.</li>
                            <li>Melakukan peningkatan kualitas sumber daya manusia di bidang perikanan.</li>
                            <li>Menyediakan layanan yang efisien dan mudah diakses masyarakat.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1400">
                    <div class="content-box">
                        <i class="bi bi-arrow-repeat"></i>
                        <h4>Tujuan</h4>
                        <ul>
                            <li>Meningkatkan kesejahteraan masyarakat melalui pengelolaan perikanan yang efektif.</li>
                            <li>Melestarikan sumber daya alam melalui upaya konservasi sumber daya perikanan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

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