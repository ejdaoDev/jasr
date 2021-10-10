@include('webpage.layouts.app')
<script type="text/javascript">
        $.ajax({
            url: 'countVisitsIndex',
            method: 'GET'
        }).done();
</script>
<section class="hero-slider">

    <div class="single-slider">
        <!--Tostadas
        <div class="toast align-items-center bg-success text-white border-0" role="alert" aria-live="assertive"
            aria-atomic="true" style="position: absolute; top: 20px; right: 20px; z-index: 1000;">
            <div class="d-flex">
                <div class="toast-body"> 
                    Estas en línea, Bienvenido.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
             Fin Tostadas-->
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="home-slider">
                        <div class="hero-text">
                            <h1>Paginas web personalizadas<br></h1>
                            <p>En JASR DESARROLLO WEB, contamos con un equipo de profesionales en diferentes campos de la programación lo con nos permite ofrecerles un servicio de muy alta calidad. Nos especializamos en la creación de sitios web, aplicaciones móviles, software de gestión y entre muchas otras cosas; Por ende, esto nos hace tu prefecto aliado, para la creación de tu sitio web de todo tipo empresa o negoció
                                Puedes tener una PÁGINA WEB para tu negocio con todas las de la ley cómo decimos acá. 
                                ¡vamos contáctanos!
                            </p>
                            <div class="button wow fadeInUp" data-wow-delay=".9s">
                                <a href="servicios!=diseno_web" onclick="selected('servicios'),subselected('diseno_web')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text">                                
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Desarrollamos software a tu medida<br></h1>
                            <p class="wow fadeInUp" data-wow-delay=".7s"> Integre todas las áreas de su empresa 
                                    mediante un Sistema ERP a medida. Administre de forma segura y eficiente todos los aspectos de su empresa.
                                    Obtener en tiempo real los ingresos y egresos de su empresa.<br>  
                                <br>.
                            <div class="button">
                                <a href="servicios!=tu_propio_software" onclick="selected('servicios'),subselected('tu_propio_software')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text">                                
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Servicio de marketing digital<br></h1>
                            <p class="wow fadeInUp" data-wow-delay=".7s"> Integre todas las áreas de su empresa 
                                    mediante un Sistema ERP a medida. Administre de forma segura y eficiente todos los aspectos de su empresa.
                                    Obtener en tiempo real los ingresos y egresos de su empresa.<br>  
                                <br>.
                            <div class="button">
                                <a href="servicios!=marketing_digital" onclick="selected('servicios'),subselected('marketing_digital')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text">
                            <h1>Servicios de consultoría de software<br></h1>
                            <p>Brindamos soluciones con alto valor agregado que
                                    facilitan la gestión de su organización hacia el logro 
                                    de sus objetivos estratégicos. Asesoramos en temas referentes
                                    a Tecnologías de Información; Como soluciones en integración
                                    de hardware y software, gestión de proyectos posicionamiento y optimización.
                                <br> 
                                <br></p>
                            <div class="button">
                                <a href="servicios!=consultorias" onclick="selected('servicios'),subselected('consultoria')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                             <div class="button">
                                <a href="count" class="btn mouse-dir">count <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="video-head wow zoomIn">
    <a href="#" class="glightbox video"></a>
</div>

<div class="testimonial-slider">
</div>

<div class="client-logo-carousel d-flex align-items-center justify-content-between">
</div>


<section class="services section" style="margin-top: -25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Nuestros Servicios</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                    <div class="serial">
                        <span><i class="lni lni-code"></i></span>
                    </div>
                    <h3><a href="service-diseño-web.html">Desarrollo web</a></h3>
                    <p><justify>Páginas web responsiva, actualizadas con lo último en tendencia en diseño
                        y programación siempre llevando una estructura que permita desarrollar . . .
                    </justify></p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".3s">
                    <div class="serial">
                        <span><i class="lni lni-camera"></i></span>
                    </div>
                    <h3><a href="service-Contenido audiovisual.html">Contenido audiovisual Marketing y redes sociales</a></h3>
                    <p><justify>Promocionales con gran impacto para . .</justify></p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                    <div class="serial">
                        <span><i class="lni lni-code-alt"></i></span>
                    </div>
                    <h3><a href="service-Software empresarial.html">Software empresarial</a></h3>
                    <p><justify>Acceda a la información estratégica de su
                        negocio atravez de Sistema de Gestión Empresarial, cumplimiento y Tranquilidad . . .
                    </justify></p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".5s">
                    <div class="serial">
                        <span><i class="lni lni-keyword-research"></i></span>
                    </div>
                    <h3><a href="service-Estrategia e investigación.html">Estrategia e investigación de su competencia</a></h3>
                    <p><justify>Nosotros le ofrecemos un plan, unas rutas que les permitirá colocar sus productos . . .
                    </justify></p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                    <div class="serial">
                        <span><i class="lni lni-seo"></i></span>
                    </div>
                    <h3><a href="service-Optimizacion para los diferentes motores.html">Optimizacion para los diferentes motores de busqueta (SEO) </a></h3>
                    <p><justify>Para salir de primero en motores de búsqueda como Google y cumplir
                        los objetivos de su negocio o empresa . . 
                    </justify></p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-service wow fadeInUp" data-wow-delay=".7s">
                    <div class="serial">
                        <span><i class="lni lni-laptop"></i></span>
                    </div>
                    <h3><a href="service-single.html">Tiendas en línea</a></h3>
                    <p>Si sus productos o servicios son adecuados para comercializar por Internet, una tienda Online es su mejor opción, reciba pagos en línea y realice envíos automáticamente</p>
                    <div class="circles-wrap">
                        <div class="circles">
                            <span class="circle circle-1"></span>
                            <span class="circle circle-2"></span>
                            <span class="circle circle-3"></span>
                            <span class="circle circle-4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

@include('webpage.layouts.footer')

@include('webpage.js.JSindex')