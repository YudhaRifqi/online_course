<?php
include '../koneksi.php';


$id = $_GET["id"];
$query = "SELECT * FROM kursus WHERE id = $id";
$result = mysqli_query($conn, $query);
$row_kursus = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $durasi = $_POST["durasi"];

    $query = "UPDATE kursus SET 
    judul_kursus  = '$judul',
    deskripsi  = '$deskripsi',
    durasi  = '$durasi'
    WHERE id = $id";
    $update = mysqli_query($conn, $query);

    if ($update) {
        echo "<script>
                alert ('Data Berhasil Diubah')
                document.location.href = 'kursus.php';
                </script>";
    } else {
        echo "<script>
                alert ('Data Gagal Diubah')
                history.go(-1);
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Form Ubah Kursus</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link href="../vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
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
                                Kursus
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
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Ubah Kursus</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label>Judul :</label>
                                            <input type="text" class="form-control input-default " name="judul" value="<?= $row_kursus["judul_kursus"] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi :</label>
                                            <textarea class="form-control" rows="4" id="comment" name="deskripsi" required><?= $row_kursus["deskripsi"] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Durasi :</label>
                                            <input type="text" class="form-control input-default " name="durasi" value="<?= $row_kursus["durasi"] ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary mt-4">Ubah</button>
                                            <button type="reset" class="btn btn-secondary mt-4">Batal</button>
                                        </div>
                                    </form>
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
    <script src="../vendor/sweetalert2/dist/sweetalert2.min.js"></script>
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