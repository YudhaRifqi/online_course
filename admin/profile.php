<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile</title>
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
                                Profile
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
                    <div class="col-xl-6 col-xxl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="media d-sm-flex d-block text-center text-sm-left pb-4 mb-4 border-bottom">
                                    <img alt="image" class="rounded mr-sm-4 mr-0" width="130" src="../images/avatar/1.png">
                                    <div class="media-body align-items-center">
                                        <div class="d-sm-flex d-block justify-content-between my-3 my-sm-0">
                                            <div>
                                                <h3 class="fs-22 text-black font-w600 mb-0"><?= $_SESSION['username']; ?></h3>
                                                <p class="mb-2 mb-sm-2">Akun Dibuat Pada , <?= date("d F Y", strtotime($_SESSION['created'])); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="media">
                                            <span class="p-3 border border-primary-light rounded-circle mr-3">
                                                <svg width="22" height="22" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.14344 5.14331H25.7168C27.1312 5.14331 28.2884 6.30056 28.2884 7.71498V23.145C28.2884 24.5594 27.1312 25.7166 25.7168 25.7166H5.14344C3.72903 25.7166 2.57178 24.5594 2.57178 23.145V7.71498C2.57178 6.30056 3.72903 5.14331 5.14344 5.14331Z" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M28.2884 7.71503L15.4301 16.7159L2.57178 7.71503" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <div class="media-body">
                                                <span class="d-block text-light mb-2">Email</span>
                                                <p class="fs-18 text-dark font-w600 mb-0"><?= $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                    </div>
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