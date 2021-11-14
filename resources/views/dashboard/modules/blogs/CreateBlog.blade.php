<?php $title = "Dashboard | Crear Blog" ?>
@include('dashboard.layouts.app')
<script>$(function () {$('#summernote').summernote();});</script>
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
                        <textarea id="summernote">Escribe tu blog aquí...</textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->
</div>
@include('dashboard.layouts.footer')