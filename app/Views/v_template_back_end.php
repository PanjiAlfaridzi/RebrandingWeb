<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AAdmin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('back-end') ?>/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['<?= base_url('back-end') ?>/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/azzara.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/demo.css">

    <!--   Core JS Files   -->
    <script src="<?= base_url('back-end') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url('back-end') ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url('back-end') ?>/assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Moment JS -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/moment/moment.min.js"></script><!-- DateTimePicker -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
    <!-- Bootstrap Toggle -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('back-end') ?>/assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Azzara JS -->
    <script src="<?= base_url('back-end') ?>/assets/js/ready.min.js"></script>
    <!-- Azzara DEMO methods, don't include it in your project! -->
    <script src="<?= base_url('back-end') ?>/assets/js/setting-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="<?= base_url('summernote') ?>/summernote-bs4.min.css" rel="stylesheet">
    <script src="<?= base_url('summernote') ?>/summernote-bs4.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
        <div class="main-header" data-background-color="purple">
            <!-- Logo Header -->
            <div class="logo-header">

                <a href="index.html" class="logo">
                    <img src="<?= base_url('logo') ?>/logo.png" width="40px" height="40px">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">

                            <div class="input-group-prepend">
                            </div>
                            <a>Dinas perikanan</a>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>


                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4><?= session()->get('nama_user') ?></h4>
                                            <p class="text-muted">Admin</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('/index.php/Auth') ?>">Logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">

            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?= session()->get('nama_user') ?>
                                    <span class="user-level">Admin</span>
                                    <span class="caret"></span>
                                </span>
                            </a>

                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="<?= base_url('/index.php/Admin') ?>">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="badge badge-count">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Master Data</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?= base_url('/index.php/Nelayan') ?>">
                                            <span class="sub-item">Nelayan</span>
                                        </a>
                                    </li>
                                    <li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#dokumen">
                                <i class="fas fa-layer-group"></i>
                                <p>Dokumen</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dokumen">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?= base_url('/index.php/Dokumen') ?>">
                                            <span class="sub-item">Dokumen Perencanaan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Layanan') ?>">
                                            <span class="sub-item">Dokumen Layanan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Berkala') ?>">
                                            <span class="sub-item">Dokumen Berkala</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Hukum') ?>">
                                            <span class="sub-item">Dokumen Hukum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Merta') ?>">
                                            <span class="sub-item">Dokumen Merta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Merta') ?>">
                                            <span class="sub-item">Dokumen Merta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/index.php/Saat') ?>">
                                            <span class="sub-item">Dokumen Saat</span>
                                        </a>
                                    </li>
                        </li>
                        <li>
                    </ul>
                </div>


                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#setting">
                        <i class="fas fa-cog"></i>
                        <p>Setting</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse" id=setting>
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">visi misi</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </div>


                <li class="nav-item">
                    <a href="<?= base_url('/index.php/Nelayan') ?>">
                        <i class="fas fa-users"></i>
                        <p>Nelayan</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/index.php/Berita') ?>">
                        <i class="fas fa-newspaper"></i>
                        <p>Berita</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/index.php/Dokumen') ?>">
                        <i class="fas fa-newspaper"></i>
                        <p>Dokumen</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/index.php/Galeri') ?>">
                        <i class="fas fa-newspaper"></i>
                        <p>Galeri</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>


                </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <h4 class="page-title"><?= $judul ?></h4>
                <?php if ($page) {
                    echo view($page);
                } ?>
            </div>
        </div>
    </div>

    </div>

    <!-- End Custom template -->
    </div>

</body>

</html>