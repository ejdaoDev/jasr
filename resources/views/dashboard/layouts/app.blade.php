<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{{$title}}</title>
        <meta name="description" content="" />
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />    
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="turbolinks-cache-control" content="no-cache">

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <script src="assets/dashboard/dist/js/pages/dashboard.js"></script>
        <!-- Modals -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
        <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/app.js"></script>
        <!-- Datatables -->
       
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/dashboard/dist/css/adminlte.min.css">
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
        <script>
  $(function () {
    $("#datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
  });
</script>
    </head>
    <body class="hold-transition layout-fixed">
        <div class="wrapper">
            @include('dashboard.layouts.header')
            @include('dashboard.layouts.sidebar')