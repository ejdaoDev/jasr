<header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/favicon/logo.png" alt="Logo">
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
                                        <a class="page-scroll" onclick="selected('inicio')" href="./" id="inicio">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" onclick="selected('nosotros')" href="nosotros" id="nosotros">Nosotros</a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation" id="servicios">Servicios</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=diseno_web" id="aaa">Diseño web</a></li>
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=marketing_digital" id="marketing_digital">Marketing digital</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" onclick="selected('galeria')" href="galeria" id="galeria">Galería</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Paginas</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="pricing.html">Nuestros Precios</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-5"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Ingresa</a>
                                        <ul class="sub-menu collapse" id="submenu-1-5">
                                            @auth
                                            <li class="nav-item"><a href="logout">Logout</a></li>
                                            @endauth
                                            @guest
                                            <li class="nav-item"><a href="login">Login</a></li>
                                            @endguest
                                        </ul>
                                    </li>
                                    @auth
                                    <li class="nav-item">
                                        <a class="page-scroll" href="home">Home</a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                            <div class="button">
                                <a href="#call-action" class="btn white-bg mouse-dir">Consigue una cotización<span
                                        class="dir-part"></span></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('webpage.js.JSheader')