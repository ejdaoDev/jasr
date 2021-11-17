<?php $title = "Dashboard | Crear Blog" ?>
@include('dashboard.layouts.app')
@include('dashboard.js.JSblogs')
<script>$(function () {
        $('#content').summernote()
    });</script>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Crear Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="create-blog">{{csrf_field()}}
                        <div>
                            <label>Título</label><b id="count-title" style="margin-left: 5px;">(0/100)</b>
                            <input type="text" onkeyup="countCaracters('title', 100)" class="form-control" name="title" id="title" maxlength="100" value="{{ old('title') }}" required>
                        </div>
                        <div>
                            <label>Descripción</label><b id="count-description" style="margin-left: 5px;">(0/250)</b>
                            <input type="text" onkeyup="countCaracters('description', 250)" class="form-control" name="description" id="description" maxlength="250" value="{{ old('description') }}" required>
                        </div>
                        <div>
                            <label>Imagén principal</label><br>
                            <input type="file" name="image" id="image" required>
                        </div>
                        <div>
                            <label>Contenido</label>
                            <textarea id="content" name="content" required ></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                             <button class="btn btn-user btn-primary btn-block" type="submit" data-turbolinks="false">Publicar</button>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-user btn-secondary btn-block" type="reset">Terminar Luego</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
</div>
@include('dashboard.layouts.footer')