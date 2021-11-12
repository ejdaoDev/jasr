<?php $title = "Dashboard | Crear Usuario" ?>
@include('dashboard.layouts.app')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear Usuario</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Crear Usuario</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Crear Usuario</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>-->
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="create-user">{{csrf_field()}}
                        @if(count($errors)>0)
                        <div class="alert alert-danger alert-dismissible" role="success">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @include('dashboard.exits.seguridadExits')
                        @include('dashboard.errors.seguridadErrors')
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Identificación*
                                <input type="text" class="form-control" name="idnumber" maxlength="20" value="{{ old('idnumber') }}" required autofocus>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Celular
                                <input type="text" class="form-control" name="phonenumber" maxlength="20" value="{{ old('phonenumber') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Primer nombre*
                                <input type="text" class="form-control" name="firstname" maxlength="50" value="{{ old('firstname') }}" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Segundo nombre
                                <input type="text" class="form-control" name="secondname" maxlength="50" value="{{ old('secondname') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Primer apellido*
                                <input type="text" class="form-control" name="firstlastname" maxlength="50" value="{{ old('firstlastname') }}" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Segundo apellido
                                <input type="text" class="form-control" name="secondlastname" maxlength="50" value="{{ old('secondlastname') }}">
                            </div>
                        </div>                               
                        <div class="form-group">
                            Rol*
                            <select name="role" class="form-control" required>
                                <option selected disabled hidden style='display: none' value=''></option> 
                                @foreach($roles as $rol)
                                <option value ="{{$rol->id}}">{{$rol->name}}</option>    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            Email*
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="70" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                password*
                                <input type="password" class="form-control" name="password" maxlength="20">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Confirmar password*
                                <input type="password" class="form-control" name="password_confirmation" maxlength="20"></div>
                        </div>
                        <button class="btn btn-user btn-primary btn-block" type="submit" data-turbolinks="false">Registrar</button>
                        <button class="btn btn-user btn-secondary btn-block" type="reset">Limpiar</button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </section><br>
</div>
@include('dashboard.layouts.footer')