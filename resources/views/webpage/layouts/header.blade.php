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
                                        <a id="link-blogs" class="page-scroll" onclick="selectedLink('blogs')" href="blogs" style="padding-right: 34px;" data-turbolinks="false">Blogs</a>
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