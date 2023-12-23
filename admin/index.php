<?php
include '../koneksi.php';
$kursus = mysqli_query($conn, 'select * from kursus');
$totalkursus = mysqli_num_rows($kursus);

$materi = mysqli_query($conn, 'SELECT * FROM materi');
$totalmateri = mysqli_num_rows($materi);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link href="../vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <!-- <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../images/logo.png" alt="">
                <img class="logo-compact" src="../images/logo-text.png" alt="">
                <img class="brand-title" src="../images/logo-text.png" alt="">
            </a> -->

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <?php include 'template_headerprofile.php' ?>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'template_sidebar.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h3 class="text-black font-w600">Selamat Datang!</h3>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card gradient-bx text-white bg-info rounded">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-1 font-weight-bold">DATA KURSUS</p>
                                        <div class="d-flex flex-wrap">
                                            <h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?= $totalkursus; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card gradient-bx text-white bg-warning rounded">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-1 font-weight-bold">DATA MATERI</p>
                                        <div class="d-flex flex-wrap">
                                            <h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?= $totalmateri; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $tampil = mysqli_query($conn, "SELECT * FROM kursus");
                while ($data = mysqli_fetch_assoc($tampil)) :
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title"><?= $data['judul_kursus']; ?> | <?= $data['durasi']; ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th>Judul Materi</th>
                                                    <th>Deskripsi</th>
                                                    <th>Link Embed</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $id = $data['id'];
                                            $data_kursus = mysqli_query($conn, "SELECT judul AS materi_judul, deskripsi AS materi_deskripsi, link_embed FROM materi WHERE kursus_id = $id");
                                            while ($datak = mysqli_fetch_assoc($data_kursus)) :
                                            ?>
                                                <tbody>
                                                    <tr>
                                                        <td> <?= $datak['materi_judul'] ?></td>
                                                        <td> <?= $datak['materi_deskripsi'] ?></td>
                                                        <td><a href="<?= $datak['link_embed']; ?>" target="_blank"><span class="badge light badge-success">Buka Materi</span></a></td>
                                                    </tr>
                                                </tbody>
                                            <?php endwhile; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Yudha Rifqi Ananta <?= date('Y'); ?></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../vendor/global/global.min.js"></script>
    <script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/deznav-init.js"></script>
    <script src="../vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Apex Chart -->
    <script src="../vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="../js/dashboard/dashboard-1.js"></script>
    <script>
        function assignedDoctor() {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.assigned-doctor').owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                dots: false,
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1600: {
                        items: 5
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                assignedDoctor();
            }, 1000);
        });
    </script>

</body>

</html>