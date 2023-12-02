<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banswong Cafe`</title>

    <link rel="icon" type="image/x-icon" href="<?php echo $this->data['base_url'] ?>favicon.ico">

    <!-- bootstap 5 -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/jquery-ui.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/sweetalert2.min.css">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/bs-select/bs-select.css" />

    <!-- datatable -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/js/table5/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/js/table5/buttons.bootstrap5.min.css">

    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/_var_main.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/master.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/style_custom.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/loading.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/icomoon/style.css">

    <?php print_r($this->data['another_css']) ?>

    <style>
        span.select2 {
            width: 100% !important;
        }
    </style>

</head>


<body id="page-top">
    <!-- loading page -->
    <!-- <div class="loading-page">
        <svg class="pl" viewBox="0 0 200 200" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="pl-grad1" x1="1" y1="0.5" x2="0" y2="0.5">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
                <linearGradient id="pl-grad2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
            </defs>
            <circle class="pl__ring" cx="100" cy="100" r="82" fill="none" stroke="url(#pl-grad1)" stroke-width="36" stroke-dasharray="0 257 1 257" stroke-dashoffset="0.01" stroke-linecap="round" transform="rotate(-90,100,100)" />
            <line class="pl__ball" stroke="url(#pl-grad2)" x1="100" y1="18" x2="100.01" y2="182" stroke-width="36" stroke-dasharray="1 165" stroke-linecap="round" />
        </svg>
        <div>L O A D I N G . . .</div>
    </div> -->


    <!-- Page wrapper start -->
    <div id="wrapper">
        <!-- Sidebar start -->
        <?php include $this->data['left_sidebar']; ?>
        <!--Sidebar End -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="d-flex w-100 align-items-center">
                        <div class="breadcrumb-container">
                            <?php include $this->data['breadcrumb_list']; ?>

                        </div>
                        <!-- Topbar Navbar -->
                        <?php include $this->data['top_navbar']; ?>
                    </div>
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- breadcrumb_list Starts -->
                    <!-- breadcrumb_list End -->
                    <div class="main-container">
                        <?php include $this->data['content']; ?>
                    </div>

                </div>
                <!-- Begin Page Content -->
            </div>

            <!-- App footer -->
            <footer class="sticky-footer bg-white ">
                <div class="w-100 my-auto px-2">
                    <div class="copyright text-end my-auto ">
                        <span>Copyright © </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- jquery -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery.cookie.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery.easing.min.js"></script>

    <!-- bootstap 5 -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Sweetalert2 -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/sweetalert2.all.min.js"></script>
    <!-- select2 -->
    <script src="<?php echo $this->data['base_url'] ?>assets/bootstrap_extras/select2/select2.full.min.js"></script>

    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- DataTables -->
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/table5/dataTables.buttons.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/table5/buttons.bootstrap5.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/table5/buttons.html5.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/table5/buttons.print.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/table5/buttonsvis.min.js"></script>


    <!-- Sortable -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/Sortable.js"></script>

    <script src="<?php echo $this->data['base_url'] ?>assets/js/master.min.js"></script>

    <script src="<?php echo $this->data['base_url'] ?>assets/js/moment.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Main java Script -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/ci_utilities.js?ft=<?= date('His') ?>"></script>

    <script>
        var baseURL = ' <?php echo $this->data['base_url'] ?>';
        $.widget.bridge('uibutton', $.ui.button)
        var mobile = false


        // $('#sidebarToggle').click(() => {
        //     $('#accordionSidebar').hasClass('toggled') ? $('#sidebarToggle i').addClass('active') : $('#sidebarToggle i').removeClass('active')
        // })

        $('.loading-page').fadeOut(1000)
    </script>

    <!-- another js -->
    <?php echo $this->data['another_js'] ?>
</body>

</html>