<?php $title = "Dashboard | Editar Usuarios" ?>
@include('dashboard.layouts.app')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Editar Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">

            <div class="card shadow mb-4">                    
                <div class="card-body">
                    @include('dashboard.exits.seguridadExits')
                    @include('dashboard.errors.seguridadErrors')
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th style="width: 60px;">Cambiar estado</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th style="width: 60px;">Cambiar estado</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($users as $user)
                                <tr>                                                
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->firstname}} {{$user->secondname}}</td>
                                    <td>{{$user->firstlastname}} {{$user->secondlastname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>                                                                           
                                    @if($user->active == true)      
                                    <td><a href="inactivateUser/{{$user->id}}"> <img src="assets/dashboard/img/activo.png" style="width: 60px; height: 50px; margin-left: 10px;"></td>
                                            @endif
                                            @if($user->active == false)      
                                    <td><a href="activateUser/{{$user->id}}"> <img src="assets/dashboard/img/inactivo.png" style="width: 60px; height: 50px; margin-left: 10px;"></td>
                                            @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
</div>
@include('dashboard.layouts.footer')