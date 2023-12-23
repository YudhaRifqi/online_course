<?php
include '../koneksi.php';

$query_materi = "SELECT
K.judul_kursus,
M.*
FROM kursus K, materi M
WHERE K.id = M.kursus_id
ORDER BY M.id ASC;";
$result = mysqli_query($conn, $query_materi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Materi</title>
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
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Materi
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Materi</h4>
                            </div>
                            <div class="card-header">
                                <a href="tambahmateri.php" class="btn btn-rounded btn-primary">
                                    <span class="btn-icon-left text-primary"><i class="fa fa-plus color-info"></i></span>Tambah Data
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table primary-table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>NO</th>
                                                <th>Kursus</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Link Embed</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($data = mysqli_fetch_assoc($result)) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['judul_kursus']; ?></td>
                                                    <td><?= $data['judul']; ?></td>
                                                    <td><?= $data['deskripsi']; ?></td>
                                                    <td><a href="<?= $data['link_embed']; ?>" target="_blank"><span class="badge light badge-success">Buka Materi</span></a></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="ubahmateri.php?id=<?= $data["id"]; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                            <a href="hapusmateri.php?id=<?= $data["id"]; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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