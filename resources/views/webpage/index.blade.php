<?php $title = "JASR Desarrollo Web"; ?>
<?php $description = "Desarrollamos tu proyecto según tus necesidades"; ?>
@include('webpage.layouts.app')
<script type="text/javascript">
    document.onload = window.scrollTo(0, 0);
    $.ajax({
        url: 'countVisitsIndex',
        method: 'GET'
    }).done();
</script>
<section id="inicio" class="hero-slider">
    <div class="single-slider">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="home-slider">
                        <div class="hero-text"><br>
                            <h2>Paginas web personalizadas<br></h2><br>
                            <p>En JASR DESARROLLO WEB, contamos con un equipo de profesionales en diferentes áreas
                                lo cual nos permite ofrecer un servicio de muy alta calidad.
                                Nos especializamos en la creación de sitios web, aplicaciones móviles y software 
                                de gestión de datos. Somos los indicados para la creación 
                                de tu sitio web de todo tipo empresa o negocio. 
                            </p>
                            <div class="button wow fadeInUp" data-wow-delay=".9s">
                                <a href="servicios!=diseno_web" onclick="selectedLink('servicios'); subselectedLink('diseno_web')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <div class="hero-text"><br>                       
                            <h2 class="wow fadeInUp" data-wow-delay=".5s">Desarrollamos software a tu medida<br></h2><br>
                            <p class="wow fadeInUp" data-wow-delay=".7s"> Integre todas las áreas de su empresa 
                                mediante un sistema desarrollado a medida para cubrir las necesidades generales de su compañía
                                y cualquier otra necesidad específica de su negocio. contabilidad? gestión de nómina? gestión 
                                de inventarios o stock?, solo debe comentarnos sus requerimientos y nosotros haremos el resto.<br>
                            <div class="button">
                                <a href="servicios!=tu_propio_software" onclick="selectedLink('servicios'), subselectedLink('tu_propio_software')" class="btn mouse-dir">Descubrir más <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                        <!--<div class="hero-text">                                
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
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nosotros" class="Features section"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="feature-right wow fadeInUp" data-wow-delay=".3s">
                    <div class="watch-inner">
                        <div class="video-head wow zoomIn" data-wow-delay="0.4s"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="feature-content">
                    <div class="title">
                        <h2 class="wow fadeInRight" data-wow-delay=".5s">Sobre Nosotros</h2>
                    </div>
                    <div data-wow-delay=".5s">

                        <div class="banner-content">
                            <p><b>Jasr Desarrollo Web</b> nació un 7 de Abril de 2021 con la intención
                                de abrirse paso en la industria del desarrollo de software, tomando su primer
                                sede en Valledupar, Cesar (Colombia). Fundada por <b>Enrique de Armas</b>, <b>Jair Eustate</b> y 
                                <b>Esteven Rada</b>, egresados del Servicio Nacional de Aprendizaje (Sena)
                                con el titulo de Técnologos en Análisis y desarrollo de sistemas de la información.</p>
                        </div>
                    </div>
                    <div data-wow-delay=".6s">
                        <div class="banner-content"><br>
                            <h3 class="title">MISION</h3>
                            <p>Desarrollar software con altos estandares de calidad, escalable y facíl de mantener, garantizar 
                                el contacto cercano con nuestros clientes, comprender y atender al maximo sus necesidades relacionadas
                                con el proyecto planteado y en consecuencia ganarnos su confianza y recomendación. 
                                entre ellos.</p>
                        </div>
                    </div>
                    <div data-wow-delay=".7s">
                        <div class="banner-content"><br>
                            <h3 class="title">VISION</h3>
                            <p>Para el 2026 nos vemos como un referente del desarrollo de software en latinoamerica, empeñados en trabajar con los metodos 
                                de desarrollo mas novedosos y poder generar empleo a desarrolladores que estén buscando su primera oportunidad
                                en el mundo laboral.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="video-head wow zoomIn"><a href="#" class="glightbox video"></a></div>
<div class="testimonial-slider"></div>
<div class="client-logo-carousel d-flex align-items-center justify-content-between"></div>

<section id="servicios" class="services section"><br>
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
                <div class="single-service wow fadeInUp" data-wow-delay=".2s" style="height: 350px;">
                    <div class="serial">
                        <span><i class="lni lni-code"></i></span>
                    </div>
                    <h3><a href="service-diseño-web.html">Páginas Web</a></h3>
                    <p><justify>Te asistimos en el diseño y desarrollo de la página web de tu
                        negocio, generamos diseños responsivos y adaptables al tipo de negocio
                        que debe representar.
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
                <div class="single-service wow fadeInUp" data-wow-delay=".4s" style="height: 350px;">
                    <div class="serial">
                        <span><i class="lni lni-code-alt"></i></span>
                    </div>
                    <h3><a href="service-Software empresarial.html">Software Empresarial</a></h3>
                    <p><justify>Somos profesionales en sistemas de gestión de la información, desde servicios
                        generales y típicos hasta necesidades muy específicas.
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
                <div class="single-service wow fadeInUp" data-wow-delay=".7s" style="height: 350px;">
                    <div class="serial">
                        <span><i class="lni lni-laptop"></i></span>
                    </div>
                    <h3><a href="service-single.html">Tiendas Online</a></h3>
                    <p>Si desea comercializar sus productos por Internet sin intermediarios o quiere reconocimiento de su marca, 
                        una tienda Online es su mejor opción, contacte con nosotros</p>
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

<section id="precios" class="pricing-table section"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Precios</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"><b>Todos los precios varían dependiendo de su necesidad.</b></p>
                    <select id="money">
                        <option selected disabled hidden style='display: none' value='{{$currencyCode}}'>{{$currencyCode}}</option>
                        <option value="USD">USD</option>
                        <option value="COP">COP</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-1 col-md-0 col-0"></div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".7s" style="height: 760px;">
                    <p class="popular">Popular</p>

                    <div class="table-head">
                        <h4 class="title">Web informativa<span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span><span id="price1"></span><span class="duration"><span id="exchange1" style="font-weight: bold"></span></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔Pagina web personalizada</li>
                        <li>✔Maximo 12 pestañas (estaticas)</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔Formulario de contacto</li>
                        <li>✔Integración con Redes Sociales</li>
                        <li>✔Diseño responsivo</li>
                        <li>✔front/back en Laravel</li>
                    </ul>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".7s">
                    <p class="popular">Popular</p>

                    <div class="table-head">
                        <h4 class="title">Web Especializada <span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span><span id="price2"></span><span class="duration"><span id="exchange2" style="font-weight: bold"></span></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔Pagina web personalizada</li>
                        <li>✔Hasta 20 pestañas (las pestañas pueden ser editadas)</li>
                        <li>✔Inclusión de imágenes y videos</li>
                        <li>✔Formulario de contacto</li>
                        <li>✔Integración con Redes Sociales</li>
                        <li>✔Diseño responsivo</li>
                        <span id="more">
                            <li>✔front con Angular y back con Nest.js o Node.js </li>
                            <li>✔Gestión por sesiones</li>
                            <li>✔Dashboard</li>
                            <li>✔Sección "blogs" incluida por defecto</li>
                        </span>
                    </ul>
                    <button class="btn white-bg" onclick="myFunction()" id="myBtn">Leer Más</button>
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>
                    </div>
                    <span id="dots" style="visibility: hidden;">...</span>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".7s" style="height: 760px;">


                    <div class="table-head">
                        <h4 class="title">Ecommerce<span></span></h4>
                        <div class="price">
                            <p class="amount"><span class="curency">$</span><span id="price3"></span><span class="duration"><span id="exchange3" style="font-weight: bold"></span></span></p>
                        </div>
                    </div>

                    <ul class="table-list">
                        <li>✔Dashboard</li>
                        <li>✔Diseño responsivo</li>
                        <li>✔Metodo de pagos por defecto incluido (negociación por whatsapp)</li>
                        <li>✔Puede agregar pasarela de pago</li>
                        <li>✔Front con Angular y back con Nest.js o Node.js </li>
                        <li>✔Puede agregar app para moviles (precio por separado)</li>
                    </ul>                    
                    <div class="button">
                        <a class="btn white-bg mouse-dir" href="#">Empezar <span class="dir-part"></span></a>
                    </div>
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

                            @foreach($blogs as $blog)
                            <div class="letest-news-item wow fadeInUp col-lg-4 col-md-6 col-12" data-wow-delay=".4s">
                                <div class="image" style="text-align: center;">
                                    <img src="assets/dashboard/img/blogs-principal-image/{{$blog->image}}" style="max-height: 200px;" alt="{{$blog->title}}">
                                </div>
                                <div class="content-body">
                                    <div class="meta-details">
                                        <a href="#" class="meta-list"><i class="lni lni-user"></i><span>Por {{$blog->user->firstname.' '.$blog->user->firstlastname}}</span></a>
                                        <a href="blogs-{{$blog->year}}" onclick="subselectedLink({{$blog->year}})" class="meta-list" data-turbolinks="false"><i class="lni lni-calendar"></i><span><?php
                                                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio",
                                                               "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                $fecha = Carbon\Carbon::parse($blog->created_at);
                                                $mes = $meses[($fecha->format('n')) - 1];
                                                echo $fecha->format('d')." de ".$mes." ".$fecha->format('Y')." ";                                        
                                                ?></span></a>
                                    </div>
                                    <h4 class="title"><a href="blogs={{$blog->url}}" data-turbolinks="false">{{$blog->title}}</a></h4>
                                    <p>{{$blog->description}}</p>
                                    <div class="button">
                                        <a class="btn mouse-dir white-bg" href="blogs={{$blog->url}}" data-turbolinks="false">Leer Más <span
                                                class="dir-part"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="button" style="text-align: center;">
        <a class="btn mouse-dir white-bg" href="blogs" data-turbolinks="false">TODOS LOS BLOGS<span
                class="dir-part"></span></a>
    </div>
</div>
<section id="contactanos" class="call-action section overlay"><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 wow fadeInLeft" data-wow-delay=".3s"></div>
            <div class="col-lg-6 col-md-6 col-12 wow fadeInRight" data-wow-delay=".4s">
                <div class="right-form">
                    <div class="section-heading" style="text-align: center;">
                        <h2>Contactanos</h2>
                    </div>
                    <div class="contact-form-box ">
                        <form method="post" action="send-mail" class="mailform"> @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" placeholder="Tu Nombre">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" placeholder="Tu correo">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="phone" placeholder="Tu Número">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="5" placeholder="Tu Mensage"></textarea>
                                </div>
                                <div class="button col-12">
                                    <button type="submit" class="btn white-bg mouse-dir">Enviar<span
                                            class="dir-part"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12 wow fadeInLeft" data-wow-delay=".3s"></div>
        </div>
    </div>
</section>
@include('webpage.js.JSindex')
@include('webpage.layouts.footer')