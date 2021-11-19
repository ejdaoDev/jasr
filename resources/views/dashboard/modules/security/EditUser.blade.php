<?php $title = "Dashboard | Editar Usuario" ?>
@extends('dashboard.layouts.app')
@section("content")
@include('dashboard.js.JSuser')
<script>$(function () {$("#datatable").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false, "buttons":
    ["copy", "csv", "excel", "pdf", "print", "colvis"]}).buttons().container()
            .appendTo('#datatable_wrapper .col-md-6:eq(0)'); });</script>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Usuario</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Editar Usuario</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!--<div class="card-header">
                          <h3 class="card-title">DataTable with default features</h3>
                        </div>-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>                                                
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->firstname}} {{$user->secondname}}</td>
                                        <td>{{$user->firstlastname}} {{$user->secondlastname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        @if($user->active == false)      
                                        <td><a onclick="unlock({{$user}})" type="button" class="btn btn-outline-danger"><i class="fas fa-lock"></i></a></td>
                                        @else  
                                        <td><a onclick="lock({{$user}})" type="button" class="btn btn-outline-success"><i class="fas fa-lock-open"></i></a></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection