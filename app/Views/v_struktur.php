<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>WEB Dinas Perikanan Kota Semarang - <?= $judul ?></title>
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
        #struktur-organisasi {
        background-color: #fff;
        padding: 80px 15px; /* Mengurangi padding atas untuk mendekatkan ke navbar */
        text-align: center;
        margin-top: 60px; /* Mengurangi margin atas untuk mendekatkan ke navbar */
    }

    #struktur-organisasi h2 {
        font-size: 36px;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 60px;
            margin-top: 100px;
            /* Added margin-top for spacing from navbar */
            color: #333;
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
        animation: fadeInUp 1.5s ease-out;
    }

        .team-card {
            position: relative;
            margin: 20px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .team-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .team-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .team-card-body h4 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .team-card-body p {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            padding: 10px;
            font-size: 18px;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .social-links a:hover {
            background-color: #0066cc;
            color: #fff;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
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

    <!-- ======= Struktur Organisasi Section ======= -->
    <section id="struktur-organisasi">
        <div class="container">
            <h2 data-aos="fade-down">Struktur Organisasi</h2>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col" data-aos="fade-up">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 1">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Dinas Perikanan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Sekretariat Dinas Perikanan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 3">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Sub Bagian Perencanaan Evaluasi dan Keuangan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Sub Bagian Umum dan Kepegawaian</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Pengelolaan Pembudidayaan Ikan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Pemberdayaan Usaha Kecil Pembudidayaan Ikan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Perikanan Tangkap</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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