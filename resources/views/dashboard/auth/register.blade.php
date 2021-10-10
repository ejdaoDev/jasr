@include('layouts.head1')
<title>registrarse</title>
@include('layouts.head2')
@include('layouts.header')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Registro</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>Home</li>
                    <li>Registro</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>¿No tienes cuenta? Registrate</h3>
                        <p>El registro demora menos de un minuto pero le brinda control total sobre sus pedidos.</p>
                    </div>
                    <form class="row" method="POST" action="register">@csrf
                        @include('layouts.errors')
                        @include('layouts.exits')
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-fn">Nombres</label>
                                <input class="form-control" type="text" name="names" value="{{ Request::old('names') }}" required maxlength="50">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-ln">Apellidos</label>
                                <input class="form-control" type="text" name="lastnames" value="{{ Request::old('lastnames') }}" required maxlength="50">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-email">Dirección de correo electrónico</label>
                                <input class="form-control" type="email" name="email" value="{{ Request::old('email') }}" required maxlength="70">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Número de teléfono</label>
                                <input class="form-control" type="text" name="phonenumber" value="{{ Request::old('phonenumber') }}" required maxlength="20">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass">Contraseña</label>
                                <input class="form-control" type="password" name="password" required maxlength="20">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass-confirm">Confirmar contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation" required maxlength="20">
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Registrarse</button>
                        </div>
                        <p class="outer-link">¿Ya tienes una cuenta? <a href="login">Inicia sesión ahora</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')