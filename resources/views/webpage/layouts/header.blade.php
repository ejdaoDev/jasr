<header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="./">
                                <img src="assets/logoWithName.png" alt="Logo">
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
                                        <a class="page-scroll" href="./" id="inicio">Inicio</a>
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
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=diseno_web" id="diseno_web">Diseño Web</a></li>
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=tu_propio_software" id="tu_propio_software">Tu Propio Software</a></li>
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=marketing_digital" id="marketing_digital">Marketing Digital</a></li>
                                            <li class="page-scroll"><a onclick="selected('servicios')" href="servicios!=consultorias" id="consultoria">Consultorías</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" onclick="selected('galeria')" href="galeria" id="galeria">Galería</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation" id="blog">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a onclick="selected('blog')" href="blogs!=2021">2021</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" onclick="selected('contactanos')" href="contactanos" id="contactanos">Contactanos</a>
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
    @include('webpage.js.JSheader')