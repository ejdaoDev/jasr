<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="assets/dashboard/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/jqvmap/jqvmap.min.css">
        <link rel="stylesheet" href="assets/dashboard/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/summernote/summernote-bs4.min.css">
        <script src="assets/dashboard/plugins/jquery/jquery.min.js"></script>
        <script src="assets/dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>$.widget.bridge('uibutton', $.ui.button);</script>
        <script src="assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/dashboard/plugins/chart.js/Chart.min.js"></script>
        <script src="assets/dashboard/plugins/sparklines/sparkline.js"></script>
        <script src="assets/dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="assets/dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/dashboard/plugins/moment/moment.min.js"></script>
        <script src="assets/dashboard/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="assets/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="assets/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="assets/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="assets/dashboard/dist/js/adminlte.js"></script>
        <script src="assets/dashboard/dist/js/demo.js"></script>
        <script src="assets/dashboard/dist/js/pages/dashboard.js"></script>
        <!-- datatables -->
        <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
        <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/dashboard/js/sb-admin-2.min.js"></script>
        <script src="assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/dashboard/js/demo/datatables-demo.js"></script>
    </head>
    <body class="hold-transition layout-fixed">
        <div class="wrapper">
            @include('dashboard.layouts.header')
            @include('dashboard.layouts.sidebar')