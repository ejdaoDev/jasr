<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{{$title}}</title>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />    
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="turbolinks-cache-control" content="no-cache">
        <script src="assets/turbolinks/app.js"></script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/dashboard/dist/img/AdminLTELogo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/dashboard/dist/img/AdminLTELogo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/dashboard/dist/img/AdminLTELogo.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/dashboard/dist/img/AdminLTELogo.png" color="#5bbad5">
        <!-- Dependencias de la fuente y los iconos usados -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/fontawesome-free/css/all.min.css">
        <!-- Jquery 3.6.0 y Bootstrap v4.6.0 -->
        <script src="assets/dashboard/js/jquery/3.6.0/jquery-3.6.0.min.js"></script>
        <script src="assets/dashboard/js/popper/popper.min.js"></script>
        <script src="assets/dashboard/js/bootstrap/4.6.0/bootstrap.bundle.min.js"></script>
        <!-- estilos de AdminLTE -->
        <script src="assets/dashboard/dist/js/adminlte.js"></script>
        <link rel="stylesheet" href="assets/dashboard/dist/css/adminlte.min.css">
        <script src="assets/dashboard/js/sweetalert/sweetalert.js"></script>
        <!-- Datatables -->
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <script src="assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/dashboard/plugins/jszip/jszip.min.js"></script>
        <script src="assets/dashboard/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="assets/dashboard/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Summernote & CodeMirror -->
        <link rel="stylesheet" href="assets/dashboard/plugins/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/codemirror/codemirror.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/codemirror/theme/monokai.css">
        <script src="assets/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="assets/dashboard/plugins/codemirror/codemirror.js"></script>
        <script src="assets/dashboard/plugins/codemirror/mode/css/css.js"></script>
        <script src="assets/dashboard/plugins/codemirror/mode/xml/xml.js"></script>
        <script src="assets/dashboard/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    </head>
    <body class="hold-transition layout-fixed">
        <div class="wrapper">
            @include('dashboard.layouts.header')
            @include('dashboard.layouts.sidebar')