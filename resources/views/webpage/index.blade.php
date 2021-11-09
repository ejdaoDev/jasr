<?php $title="JASR | Inicio"; ?>
@include('webpage.layouts.app')
<script type="text/javascript">
    document.onload= window.scrollTo(0,0);
    $.ajax({
        url: 'countVisitsIndex',
        method: 'GET'
    }).done();
</script>
<section class="hero-slider">

    <div class="single-slider">
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
                                <a href="servicios!=diseno_web" onclick="selected('servicios'), subselected('diseno_web')" class="btn mouse-dir">Descubrir más <span
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
                                <a href="servicios!=tu_propio_software" onclick="selected('servicios'), subselected('tu_propio_software')" class="btn mouse-dir">Descubrir más <span
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
                                <a href="servicios!=marketing_digital" onclick="selected('servicios'), subselected('marketing_digital')" class="btn mouse-dir">Descubrir más <span
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
                                <a href="servicios!=consultorias" onclick="selected('servicios'), subselected('consultoria')" class="btn mouse-dir">Descubrir más <span
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

<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Tabla de Precios</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Nuestro plan de precios</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"><b>Todos los precios varían dependiendo de la
                            necesidad de su marca o empresa.</b></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".7s">
                    <p class="popular">Popular</p>

                    <div class="table-head">
                        <h4 class="title">Web informativa<span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>187.72<span class="duration"><b>/usd</b></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔pagina web personalizada</li>
                        <li>✔4 Secciones internas</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔formulario de contacto</li>
                        <li>✔Integración con Google Maps</li>
                        <li>✔Chat Online (nativo o WhatsApp)</li>
                        <li>✔Integración con Redes Sociales</li>
                        <li>✔Diseño responsive</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>

                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".5s">

                    <div class="table-head">
                        <h4 class="title">Basico<span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>190.59<span class="duration"><b>/usd</b></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔SEO Amigable</li>
                        <li>✔pagina web personalizada</li>
                        <li>✔6 Secciones internas</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔formulario de contacto</li>
                        <li>✔Integración con Google Maps</li>
                        <li>✔Chat Online (nativo o WhatsApp)</li>
                        <li>✔Integración con Redes Sociales</li>
                        <li>✔Diseño responsive</li>

                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-12">



                <div class="single-table wow fadeInUp" data-wow-delay=".9s">


                    <div class="table-head">
                        <h4 class="title">Plan intermedio<span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>408.41<span class="duration"><b>/usd</b></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔SEO Amigable</li>
                        <li>✔Hasta 12 pestrañas</li>
                        <li>✔Secciones Ilimitadas</li>
                        <lI>✔4Secciones administrables</lI>
                        <li>✔Diseño responsive</li>
                        <li>✔Hosting x1 año</li>
                        <li>✔Dominio gratis x1 año</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔Enlace a las redes sociales</li>
                        <li>✔Blog</li>
                        <li>✔Chat Online (nativo o WhatsApp)</li>
                        <span id="readMore">
                            <li>✔Optimización de velocidad</li>
                            <li>✔Formulario suscripción a boletines</li>
                            <li>✔Integración con Google Maps</li>
                            <li>✔Formulario de contacto</li>
                            <li>✔Cuentas de correo corporativo</li>
                            <li>✔Capacitación de uso</li>
                        </span>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>
                    </div>
                    <button class="btn white-bg" id="button">Leer Más</button>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".7s">
                    <p class="popular">Popular</p>

                    <div class="table-head">
                        <h4 class="title">Plan Premiun <span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span>762.37<span class="duration"><b>/usd</b></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔SEO Amigable</li>
                        <li>✔Hasta 20 Pestañas</li>
                        <li>✔Desarrollo Web personalizado</li>
                        <li>✔Secciones internas modificables</li>
                        <li>✔Formularios contacto y registro</li>
                        <lI>✔8 Secciones administrables</lI>
                        <li>Secciones Ilimitadas</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔Integración con Redes Sociales</li>
                        <li>✔Integración con Google Maps</li>
                        <span id="dots">...</span>
                        <span id="more">
                            <li>✔Dominio gratis x 1 año</li>
                            <li>✔Certificado SSL x 1 año</li>
                            <li>✔Chat Online (nativo o WhatsApp)</li>
                            <li>✔Diseño responsive</li>
                            <li>✔Módulo de blog</li>
                            <li>✔Catálogo de productos</li>
                            <li>✔Carrito de compras</li>
                            <li>✔Pasarela de pago</li>
                            <li>✔Optimización de velocidad</li>
                            <li>✔Muestra previa de interfaces</li>
                            <li>✔Capacitación de uso</li>
                        </span>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>
                    </div>
                    <button class="btn white-bg" onclick="myFunction()" id="myBtn">Leer Más</button>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="latest-news-area section">
    <div class="letast-news-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ultimos Blogs</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    </div>
                </div>
            </div>

            <div class="latest-news-area section" style="margin-top: -50px;">
                <div class="letast-news-grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-12">
                            </div>
                        </div>
                        <div class="row" class="col-lg-12 col-md-6 col-12">

                            <div class="letest-news-item wow fadeInUp col-lg-4 col-md-6 col-12" data-wow-delay=".4s">
                                <div class="image">
                                    <img src="assets/webpage/images/blog/file2020425964.jpg" alt="#">
                                </div>
                                <div class="content-body">
                                    <div class="meta-details">
                                        <a href="#" class="meta-list"><i class="lni lni-user"></i><span>Por Enrique de Armas</span></a>
                                        <a href="#" class="meta-list"><i class="lni lni-calendar"></i><span>15 de Agosto
                                                2021</span></a>
                                    </div>
                                    <h4 class="title"><a href="blogs!=2021!=como_subir_imagenes_desde_front_laravel_a_back_laravel">¿como subir imagenes desde front laravel a back laravel?</a></h4>
                                    <p>En este segmento explicamos de manera corta y eficiente como subir imagenes desd el front en laraval a un back en laravel,
                                        suponiendo que quieres trabajar el front y el back con el mismo framework.</p>
                                    <div class="button">
                                        <a class="btn mouse-dir white-bg" href="blogs!=2021!=como_subir_imagenes_desde_front_laravel_a_back_laravel">Leer Más <span
                                                class="dir-part"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="letest-news-item wow fadeInUp col-lg-4 col-md-6 col-12" data-wow-delay=".6s">
                                <div class="image">
                                    <img src="https://i.gyazo.com/d44de59264ed75b04db5684a1bcc5a51.png" alt="#">
                                </div>
                                <div class="content-body">
                                    <div class="meta-details">
                                        <a href="#" class="meta-list"><i class="lni lni-user"></i><span>Por Enrique de Armas</span></a>
                                        <a href="#" class="meta-list"><i class="lni lni-calendar"></i><span>20 de Septiembre
                                                2021</span></a>
                                    </div>
                                    <h4 class="title"><a href="blogs!=2021!=proyecto_base_de_laravel_con_admin_lte">Proyecto base de laravel con Admin LTE</a></h4>
                                    <p>Incluimos la plantilla SB Admin en un proyecto de laravel y le agregamos configuraciones adicionales 
                                        para facilitarte algo de trabajo al iniciar un nuevo proyecto.</p>
                                    <div class="button">
                                        <a class="btn mouse-dir white-bg" href="blogs!=2021!=proyecto_base_de_laravel_con_admin_lte">Leer Más <span
                                                class="dir-part"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="letest-news-item wow fadeInUp col-lg-4 col-md-6 col-12" data-wow-delay=".6s">
                                <div class="image">
                                    <img src="https://i.gyazo.com/41967e617f7bd868da87e1b2024d1109.png" alt="#">
                                </div>
                                <div class="content-body">
                                    <div class="meta-details">
                                        <a href="#" class="meta-list"><i class="lni lni-user"></i><span>Por Enrique de Armas</span></a>
                                        <a href="#" class="meta-list"><i class="lni lni-calendar"></i><span>05 de Noviembre
                                                2021</span></a>
                                    </div>
                                    <h4 class="title"><a href="blogs!=2021!=dashboard_gratuito_con_angular_material">Dashboard gratuito con Angular Material</a></h4>
                                    <p>Incluimos la plantilla SB Admin en un proyecto de laravel y le agregamos configuraciones adicionales 
                                        para facilitarte algo de trabajo al iniciar un nuevo proyecto.</p>
                                    <div class="button">
                                        <a class="btn mouse-dir white-bg" href="blogs!=2021!=dashboard_gratuito_con_angular_material">Leer Más <span
                                                class="dir-part"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="button" style="text-align: center;">
        <a class="btn mouse-dir white-bg" href="blogs!=2021">IR AL BLOG<span
                class="dir-part"></span></a>
    </div>
</div>
@include('webpage.layouts.footer')

@include('webpage.js.JSindex')