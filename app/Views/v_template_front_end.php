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
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('your-background-image.jpg'); /* Gantilah dengan URL gambar background Anda */
            background-size: cover;
            background-attachment: fixed;
        }

        .card-berita {
            overflow: hidden;
        }

        .card-berita img {
            transition: transform 0.2s ease;
        }

        .card-berita:hover img {
            transform: scale(1.1);
            /* Zoom-in gambar saat kursor berada di atas kartu */
            filter: brightness(70%);
        }

        .pagination a, .pagination-links-container a, .pagination-links-container span {
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 40px; /* pastikan semua elemen memiliki tinggi yang sama */
}

.pagination-links-container {
    display: flex;
    align-items: center;
}

.pagination a:hover, .pagination-links-container a:hover, .pagination-links-container span:hover {
    background-color: #0056b3;
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
                            <h4 class="mx-auto mt-2">
                                <a href="<?= base_url('berita/' . esc($item['id_berita'])) ?>"><?= esc($item['judul_berita']) ?></a>
                            </h4>
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
            <?php if ($pager->getPreviousPageURI() !== null) : ?>
                <a href="<?= $pager->getPreviousPageURI() ?>" class="btn btn-primary mx-1">Previous</a>
            <?php endif; ?>

            <div class="pagination-links-container d-flex align-items-center">
                <?= $pager->links() ?>
            </div>

            <?php if ($pager->getNextPageURI() !== null) : ?>
                <a href="<?= $pager->getNextPageURI() ?>" class="btn btn-primary mx-1">Next</a>
            <?php endif; ?>
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
    <script>
        var offcanvasMenu = document.getElementById('offcanvasMenu');
        offcanvasMenu.addEventListener('show.bs.offcanvas', function () {
            document.body.classList.add('blur-effect');
        });
        offcanvasMenu.addEventListener('hide.bs.offcanvas', function () {
            document.body.classList.remove('blur-effect');
        });

        // Menambahkan event listener untuk mengatur tautan aktif
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>

</body>

</html>