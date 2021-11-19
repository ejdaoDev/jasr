<?php $title = "Dashboard | Galería" ?>
@extends('dashboard.layouts.app')
@section("content")
@include('dashboard.js.JSgallery')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Galería</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Galería</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Subir Imagen(es)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form  method="post" enctype="multipart/form-data" action="upload-images">@csrf
                        <input type="file" name="images[]" required multiple>
                        <button class="btn btn-success" type="submit">Subir</button>
                    </form>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Imagenes</h3>
                    {{$images->links()}}
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="text-align: center;">
                    <div class="container-fluid">
                        <div class="form-group row">
                            @foreach($images as $image)
                            <div class="col-lg-6 col-md-6 col-mb-6 col-sm-12">
                                <div>
                                    <a href="assets/dashboard/img/blogs/{{$image->route}}" target="_blank"><img src="assets/dashboard/img/blogs/{{$image->route}}" style="padding: 5px; max-width: 300px; max-height: 200px;"></a>                    
                                    <button class="btn btn-danger" onclick="deleteImage({{$image->id}},'{{$image->route}}')" style="margin-left: -50px; margin-top: 150px;"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </section><br>
    <!-- End Content -->
</div>
@endsection