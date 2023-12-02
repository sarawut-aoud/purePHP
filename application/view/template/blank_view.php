<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <!-- Title -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Banswong Cafe`</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $this->data['base_url'] ?>favicon.ico">

    <!-- bootstap 5 -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/jquery-ui.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/sweetalert2.min.css">

    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Main Css -->
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/_var_main.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/master.min.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/style_custom.css">
    <link rel="stylesheet" href="<?php echo $this->data['base_url'] ?>assets/css/loading.css">


    <?php echo $this->data['another_css'] ?>


</head>

<body>
    <!-- Page wrapper start -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column w-100">
            <!-- Main Content -->
            <div id="content" class="w-100">
                <!-- Begin Page Content -->
                <div class="main-container" class="w-100">
                    <?php include $this->data['content']; ?>
                </div>
                <!-- Begin Page Content -->
            </div>

        </div>
    </div>

    <!-- jquery -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/js/jquery.cookie.min.js"></script>

    <!-- bootstap 5 -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Sweetalert2 -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/sweetalert2.all.min.js"></script>

    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- DataTables -->
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- Sortable -->
    <script src="<?php echo $this->data['base_url'] ?>assets/js/master.min.js"></script>


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

    <?php echo $this->data['another_js'] ?>



</body>

</html>