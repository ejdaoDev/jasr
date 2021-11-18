<?php
use App\Models\Blogs\BlogsYear;
$years = BlogsYear::all();
?>
<!DOCTYPE html>
<html class="no-js" lang="es">

    <head>    
        <meta charset="utf-8" />
        <title>{{$title}}</title>
        <meta name="description" content="{{$description}}" />
        <link rel="canonical" href="https://jasrdesarrolloweb.com/" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />    
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="turbolinks-cache-control" content="no-cache">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/webpage/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/webpage/css/LineIcons.2.0.css" />
        <link rel="stylesheet" href="assets/dashboard/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/webpage/css/animate.css" />
        <link rel="stylesheet" href="assets/webpage/css/tiny-slider.css" />
        <link rel="stylesheet" href="assets/webpage/css/glightbox.min.css" />
        <link rel="stylesheet" href="assets/webpage/css/main.css" />
        <link rel="stylesheet" href="assets/webpage/css/reset.css" />
        <link rel="stylesheet" href="assets/webpage/css/responsive.css" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/webpage/js/bootstrap.min.js"></script>
        <script src="assets/webpage/js/count-up.min.js"></script>
        <script src="assets/webpage/js/wow.min.js"></script>
        <script src="assets/webpage/js/tiny-slider.js"></script>
        <script src="assets/webpage/js/glightbox.min.js"></script>
        <script src="assets/webpage/js/imagesloaded.min.js"></script>
        <script src="assets/webpage/js/isotope.min.js"></script>
        <script src="assets/webpage/js/main.js"></script>
        <script src="js/app.js"></script>
    </head>    
    <body>
        @include('webpage.js.JSheader')
<header class="header navbar-area" data-turbolinks-permanent style="position: fixed;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">

                            <a class="navbar-brand" href="./">
                                <img src="assets/webpage/img/logo/logo-sin-letras.png" style="width: 50px;" alt="logo"><h1 style="font-size: 20px; float: right; margin-top: -7px; padding-left: 3px;">JASR Desarrollo Web</h1>
                            </a>
                            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a id="link-inicio" class="page-scroll" href="./#inicio">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="link-nosotros" class="page-scroll" onclick="selectedLink('nosotros')" href="./#nosotros">Nosotros</a>
                                    </li>                                    
                                    <!--<li class="nav-item">
                                        <a id="link-servicios" class="page-scroll" onclick="selectedLink('servicios')" href="./#servicios">Servicios</a>
                                    </li>-->                                    
                                    <li class="nav-item">
                                        <a id="link-servicios" class="page-scroll dd-menu collapsed" href="#"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation" onclick="selectServicios()">Servicios</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item" id="diseno_web"><a onclick="selectedLink('servicios'), subselectedLink('diseno_web')" href="servicios!=diseno_web">Diseño Web</a></li>
                                            <li class="nav-item" id="tu_propio_software"><a onclick="selectedLink('servicios'), subselectedLink('tu_propio_software')" href="servicios!=tu_propio_software">Tu Propio Software</a></li>
                                            <!--<li class="nav-item" id="marketing_digital"><a onclick="selected('servicios'), subselected('marketing_digital')" href="servicios!=marketing_digital">Marketing Digital</a></li>
                                            <li class="nav-item" id="consultoria"><a onclick="selected('servicios'), subselected('consultoria')" href="servicios!=consultorias">Consultorías</a></li>-->
                                            
                                        </ul>
                                    </li>
                                                                   
                                    <li class="nav-item">
                                        <a id="link-precios" class="page-scroll" onclick="selectedLink('precios')" href="./#precios">Precios</a>
                                    </li>  
                                    
                                    <li class="nav-item">
                                        <a id="link-galeria" class="page-scroll" onclick="selectedLink('galeria')" href="galeria">Galería</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll active dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation" id="link-blog">Blogs</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item" id="blogs"><a onclick="subselectedLink('blogs')" href="blogs">Todos</a></li>
                                            @foreach($years as $year)
                                            <li class="nav-item" id="{{$year->year}}"><a onclick="subselectedLink({{$year->year}})" href="blogs-{{$year->year}}">{{$year->year}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a id="link-contactanos" class="page-scroll" onclick="selectedLink('contactanos')" href="./#contactanos">Contactanos</a>
                                    </li>                                    
                                    @auth
                                    <li class="nav-item">
                                        <a class="page-scroll" onclick="document.location.href='home'" href="home">Home</a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>