<?php $title = "Dashboard | Crear Usuario" ?>
@extends('dashboard.layouts.app')
@section("content")
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
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="create-user">{{csrf_field()}}
                        @include('dashboard.alerts.exits')
                        @include('dashboard.alerts.errors')
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Identificaci&#243n*
                                <input type="text" class="form-control" name="idnumber" maxlength="20" value="{{ old('idnumber') }}" required>
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
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Rol*
                            <select name="role" class="form-control" required>
                                <option selected disabled hidden style='display: none' value=''></option> 
                                @foreach($roles as $rol)
                                <option value ="{{$rol->id}}">{{$rol->name}}</option>    
                                @endforeach
                            </select>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Email*
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="70" required>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                             <button class="btn btn-user btn-primary btn-block" type="submit" data-turbolinks="false">Registrar</button>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-user btn-secondary btn-block" type="reset">Limpiar</button>
                        </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </section><br>
</div>
@endsection