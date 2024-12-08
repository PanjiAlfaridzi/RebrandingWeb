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
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

    <style>
        #tugas-fungsi {
            background-color: #ffffff;
            padding: 100px 15px;
            padding-top: 100px;

        }

        .tugas-fungsi h2 {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 60px;
            margin-top: 100px;
            /* Added margin-top for spacing from navbar */
            color: #333;
            font-size: 36px;
            font-family: 'Poppins', sans-serif;

        }

        .row-cols-1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-lg-4 {
            margin-bottom: 30px;
            padding: 0 15px;
            position: relative;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        .col-lg-4:nth-child(1) {
            animation-delay: 0.3s;
        }

        .col-lg-4:nth-child(2) {
            animation-delay: 0.6s;
        }

        .col-lg-4:nth-child(3) {
            animation-delay: 0.9s;
        }

        .content-box {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .content-box:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .content-box i {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .content-box:hover i {
            color: #0056b3;
        }

        .content-box h4 {
            font-size: 24px;
            color: #343a40;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 1px;
        }

        .content-box p {
            font-size: 16px;
            color: #6c757d;
            line-height: 1.6;
            font-family: 'Roboto', sans-serif;
        }

        .content-box ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 20px;
        }

        .content-box ul li {
            margin-bottom: 12px;
            text-align: left;
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
        }

        .content-box ul li::before {
            content: "\2022";
            color: #007bff;
            font-weight: bold;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .col-lg-4 {
                flex: 1 0 100%;
                margin-bottom: 20px;
            }

            .tugas-fungsi h2 {
                font-size: 28px;
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
            .tugas-fungsi h2 {
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

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }

            50% {
                opacity: 0.5;
                transform: translateX(20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .tugas-fungsi .content-box {
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

        .tugas-fungsi .content-box i {
            font-size: 48px;
            color: #3498db;
        }

        .tugas-fungsi .content-box h4 {
            font-size: 24px;
            font-weight: 700;
            margin: 20px 0 15px 0;
        }

        .tugas-fungsi .content-box p,
        .tugas-fungsi .content-box ul {
            font-size: 14px;
            margin-bottom: 0;
        }

        .tugas-fungsi .content-box ul {
            padding-left: 20px;
        }

        .equal-height {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 20px;
            /* Sesuaikan padding sesuai kebutuhan */
            box-sizing: border-box;
        }

        .row.row-cols-1.row-cols-md-2 {
            display: flex;
            flex-wrap: wrap;
        }

        .row.row-cols-1.row-cols-md-2>.col-lg-4 {
            display: flex;
            flex: 1;
            flex-direction: column;
            /* Pastikan setiap kolom adalah kolom vertikal */
        }

        .icon-text {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            /* Agar teks dan elemen ul sejajar di tengah */
            margin-bottom: 10px;
            /* Jarak antara icon dan teks */
        }

        .icon-text i {
            font-size: 2rem;
            /* Sesuaikan ukuran ikon sesuai kebutuhan */
            margin-bottom: 5px;
            /* Jarak antara ikon dan teks */
        }

        .icon-text h4 {
            margin-bottom: 10px;
            /* Jarak antara h4 dan ul */
        }

        .list-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Agar list sejajar di tengah */
            margin-top: 10px;
            /* mt-2 equivalent, jarak antara ul dan h4 */
            flex-grow: 1;
            /* Agar elemen ul memenuhi tinggi yang tersedia */
        }

        .custom-list {
            padding: 0;
            list-style-type: none;
            display: flex;
            flex-direction: column;
            /* Pastikan list vertikal */
            justify-content: flex-start;
            /* Isi dari ul mulai dari atas */
            width: 100%;
            /* Pastikan ul memenuhi lebar wrapper */
        }

        .custom-list-item {
            margin: 5px 0;
            /* Jarak antara item list */
        }

        .offcanvas {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi pada offcanvas */
            color: black;
        }
        .offcanvas-header {
            justify-content: flex-end;
        }
        .offcanvas-body .nav-item {
            margin: 10px 0;
        }
        .offcanvas-body .nav-link {
            color: black;
            background-color: #e9ecef;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: block;
        }
        .offcanvas-body .nav-link:hover {
            color: #1e90ff;
            background-color: #dee2e6;
        }
        .offcanvas-body .nav-link.active {
            color: #1e90ff;
            background-color: #dee2e6;
        }
        .btn.btn-secondary {
            flex: 0 1 auto;
            background-color: white;
            border-color: white;
        }
        .btn.btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.8); /* Warna tombol saat hover */
            border-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <nav class="navbar navbar-light ms-5 me-2"> <!-- navbar-light untuk teks gelap -->
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Dinas Perikanan" style="height: 40px;">
        </a>
        <ul class="navbar-nav-center">
            <li class="nav-item">
                <a class="nav-link active" id="nav-beranda" href="<?= base_url() ?>">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/Visi') ?>">Visi, Misi dan Tujuan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Struktur') ?>">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Kepala Dinas</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Tugas') ?>">Tupoksi</a></li>
                            <li><a class="dropdown-item" href="#">Bidang & UPTD</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                    <li><a class="dropdown-item" href="#">Kartu Nelayan</a></li>
                    <li><a class="dropdown-item" href="#">Asuransi Nelayan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
                <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/Beritanav') ?>">Berita</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Artikel') ?>">Artikel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Agenda') ?>">Agenda (Rencana Kegiatan)</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Soprenja') ?>">Sop Renja</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ppidDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PPID</a>
                <ul class="dropdown-menu" aria-labelledby="ppidDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Hukumnav') ?>">Dasar Hukum</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Layanannav') ?>">Layanan Informasi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Berkalanav') ?>">Informasi Berkala</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Mertanav') ?>">Informasi Serta Merta</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Saatnav') ?>">Informasi Setiap Saat</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Kecualinav') ?>">Informasi Dikecualikan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Profilnav') ?>">Profil PPID</a></li>
                </ul>
            </li>
        </ul>
        
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/nav/Dokumennav') ?>">Dokumen Perencanaan</a>
                </li>

                <!-- Peraturan Perundangan -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Peraturan Perundangan</a>
                </li>

                <!-- Galeri -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/nav/Gallerynav') ?>">Galeri</a>
                </li>

                <!-- Kontak -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/Contact') ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</header>

    <!-- ======= Tugas dan Fungsi Section ======= -->
    <section id="tugas-fungsi" class="tugas-fungsi">
        <div class="container">
            <header data-aos="fade-up" data-aos-duration="1000">
                <h2>Tugas dan Fungsi</h2>
            </header>
            <div class="row row-cols-1 row-cols-md-2">
                <article class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="content-box equal-height">
                        <div class="icon-text">
                            <i class="bi bi-check-circle" aria-hidden="true"></i>
                            <h4>Tugas</h4>
                        </div>
                        <div class="list-wrapper">
                            <ul class="custom-list">
                                <li class="custom-list-item">Melaksanakan pengelolaan sumber daya perikanan.</li>
                                <li class="custom-list-item">Menetapkan kebijakan sektor perikanan di Kota Semarang.</li>
                                <li class="custom-list-item">Menyelenggarakan pengawasan dan pengendalian kegiatan perikanan.</li>
                                <li class="custom-list-item">Memberikan izin usaha perikanan kepada pihak yang berwenang.</li>
                                <li class="custom-list-item">Melakukan pemberdayaan masyarakat dalam bidang perikanan.</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                    <div class="content-box equal-height">
                        <div class="icon-text">
                            <i class="bi bi-tools" aria-hidden="true"></i>
                            <h4>Fungsi</h4>
                        </div>
                        <div class="list-wrapper">
                            <ul class="custom-list">
                                <li class="custom-list-item">Fungsi pengawasan perikanan.</li>
                                <li class="custom-list-item">Fungsi penelitian dan pengembangan.</li>
                                <li class="custom-list-item">Fungsi edukasi dan pelatihan kepada masyarakat.</li>
                                <li class="custom-list-item">Fungsi penyuluhan tentang cara pengelolaan sumber daya perikanan secara berkelanjutan.</li>
                                <li class="custom-list-item">Fungsi penguatan kelembagaan masyarakat terkait perikanan.</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- End Tugas dan Fungsi Section -->

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