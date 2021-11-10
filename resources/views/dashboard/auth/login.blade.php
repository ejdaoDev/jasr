<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Login</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="assets/dashboard/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="assets/dashboard/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>JASR</b> Desarrollo Web</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Accede para iniciar tu sesión</p>

                    <form  method="POST" action="login"> 
                        {{csrf_field()}}
                        @if(Session::has('msj'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
                            <b>{{Session('msj')}}</b>
                        </div> 
                        @endif
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>                       
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Recuerdame
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mb-1">
                        <a href="forgot-password.html">Olvidé mi contraseña</a>
                    </p>
                    <!--<p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>-->
                </div>
            </div>
        </div>
        <script src="assets/dashboard/plugins/jquery/jquery.min.js"></script>
        <script src="assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/dashboard/dist/js/adminlte.min.js"></script>
    </body>
</html>