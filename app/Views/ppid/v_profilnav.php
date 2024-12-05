<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Dinas Perikanan Kota Semarang - <?= $judul_dokumen ?></title>

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

    <!-- Add custom CSS for animations and styling -->
    <style>
        /* Adjust the padding to ensure the navbar does not overlap */
        body {
            padding-top: 100px;
            /* Adjust this value to the height of your fixed navbar */
        }

        /* Center and style the gallery title */
        .gallery-title {
            text-align: center;
            font-size: 36px;
            font-weight: weight;
            margin-bottom: 60px;
            margin-top: 100px;
            /* Added margin-top for spacing from navbar */
            color: #333;
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
        }


        /* Animation for gallery items */
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Keyframes for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Center and style the gallery title */
        .gallery-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }

        /* Navbar styling */
        header#header {
            z-index: 9999;
            /* Ensures the navbar stays above other content */
        }

        /* Navbar links styling */
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Hover effect for navbar items */
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Styling for the gallery cards */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for cards */
        .card:hover {
            transform: translateY(-10px);
            /* Card lifts slightly */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            /* Enhanced shadow */
        }

        /* Card image styling */
        .card-img-top {
            border-radius: 10px;
            object-fit: cover;
            height: 200px;
        }

        /* Styling for card body */
        .card-body {
            padding: 20px;
        }

        .card-body .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-body .card-text {
            color: #555;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">
            <!-- Top Header with Logo -->
            <div class="d-flex align-items-center py-2">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Dinas Perikanan" class="me-3" style="width: 50px; height: auto;">
                    <h1 class="logo mb-0">
                        <a href="<?= base_url() ?>" class="text-decoration-none">
                            <span class="fs-4 fw-bold d-block">Dinas Perikanan</span>
                            <span class="fs-6 text-secondary">Kota Semarang</span>
                        </a>
                    </h1>
                </div>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Main Navigation -->
            <nav id="mainNavbar" class="navbar navbar-expand-lg py-0">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100 justify-content-around">
                        <!-- Beranda -->
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                        </li>

                        <!-- Profil -->
                        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('/index.php/Visi') ?>">Visi, Misi dan Tujuan</a></li>
                                <li><a href="<?= base_url('/index.php/Struktur') ?>">Struktur Organisasi</a></li>
                                <li><a href="#">Kepala Dinas</a></li>
                                <li><a href="#">Tupoksi</a></li>
                                <li><a href="<?= base_url('/index.php/Tugas') ?>">Tugas dan Fungsi</a></li>
                                <li><a href="#">Bidang & UPTD</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Kartu Nelayan</a></li>
                                <li><a href="#">Asuransi Nelayan</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('/index.php/Beritanav') ?>">Berita</a></li>
                                <li><a href="<?= base_url('/index.php/Artikel') ?>">Artikel</a></li>
                                <li><a href="<?= base_url('/index.php/Agenda') ?>">Agenda (Rencana Kegiatan)</a></li>
                                <li><a href="<?= base_url('/index.php/Soprenja') ?>">Sop Renja</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('/index.php/nav/Hukumnav') ?>">Dasar Hukum</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Layanannav') ?>">Layanan Informasi</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Berkalanav') ?>">Informasi Berkala</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Mertanav') ?>">Informasi Serta Merta</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Saatnav') ?>">Informasi Setiap Saat</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Kecualinav') ?>">Informasi Dikecualikan</a></li>
                                <li><a href="<?= base_url('/index.php/nav/Profilnav') ?>">Profil PPID</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('/index.php/nav/Dokumennav') ?>">Dokumen Perencanaan</a></li>
                        <li><a href="#">Peraturan Perundangan</a></li>

                        <li><a href="<?= base_url('/index.php/nav/Gallerynav') ?>"><span>Galeri</span></a>
                        </li>

                        <li><a href="<?= base_url('/index.php/Contact') ?>">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- ======= Gallery Section ======= -->
    <div class="col-sm-12">
        <div class="card">
            <main id="main" data-aos="fade-up">
                <!-- ======= Breadcrumbs ======= -->
                <div class="breadcrumbs">
                    <div class="container">
                        <h2><?= $judul_dokumen ?></h2>
                        <p>isi dokumen</p>
                    </div>
                </div>

                <table id="basic-datatables" class="table table-striped table-hover table-bordered-bd-primary table-head-bg-primary mt-3">
                    <thead>
                        <tr class="text-center">
                            <th width="50px">#</th>
                            <th scope="col">Judul Dokumen</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($dokumen as $key => $p) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="text-center"><?= $p['judul_dokumen'] ?></td>
                                <td class="text-center">
                                    <embed
                                        src="<?= base_url('/image/fprofil/' . $p['file_dokumen']) ?>"
                                        type="application/pdf"
                                        width="250px"
                                        height="200px">
                                    <!-- Tambahkan tombol download -->
                                    <br>
                                    <a href="<?= base_url('/image/fprofil/' . $p['file_dokumen']) ?>"
                                        class="btn btn-sm btn-primary mt-2"
                                        download>
                                        <i class="fa fa-download"></i> Download PDF
                                    </a>
                                </td>
                                <td><?= $p['tgl_dokumen'] ?> <?= $p['jam_dokumen'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    </div>

    <!-- Pagination Section -->
    <div class="container mt-4">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <!-- Previous Button -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <!-- Page Numbers -->
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <!-- Next Button -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


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