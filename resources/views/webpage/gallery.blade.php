<!DOCTYPE html>
<html class="no-js" lang="es">

    <head>    
        <title>Galería</title>
        <meta name="description" content="" />   

        @include('webpage.layouts.head')

    </head>

    <body>

        @include('webpage.layouts.header')   

        <section class="portfolio-section section" style="margin-top: -50px;">
            <div id="container" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                            <button class="portfolio-btn active" data-filter="*">Todos</button>
                            <button class="portfolio-btn" data-filter=".branding">Marca</button>
                            <button class="portfolio-btn" data-filter=".marketing">Marketing</button>
                            <button class="portfolio-btn" data-filter=".web">Web Diseño</button>
                            <button class="portfolio-btn" data-filter=".graphic">Diseño audiovisual</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 grid-item branding marketing">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".3s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf1.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item marketing web">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".4s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf2.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item web graphic">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".5s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf3.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item branding web">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".6s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf4.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item web marketing">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".7s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf5.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item marketing graphic">
                        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-delay=".8s">
                            <div class="portfolio-img">
                                <img src="assets/webpage/images/portfolio/pf6.jpg" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Nombre proyecto</h4>
                                    <p>Creamos una biblioteca de diseño impresionante que es robusta e intuitiva para los
                                        negocios
                                        presentación.</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero-slider">      
            <div class="container">                    
                <div class="home-slider">                          
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

        <section class="newsletter section">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-12">

                        <div class="subscribe-text wow fadeInLeft" data-wow-delay=".3s">
                            <h6>Suscríbete a las nuevas noticias</h6>
                            <p class=""><br></p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-12">

                        <div class="subscribe-form wow fadeInRight" data-wow-delay=".5s">
                            <form action="#" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Tu correo electronico" class="common-input"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu correo electronico'"
                                       required="" type="email">
                                <div class="button">
                                    <button class="btn mouse-dir white-bg">Suscríbete ahora!<span
                                            class="dir-part"></span></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        @include('webpage.layouts.footer')

        <div class="whatsap">
            <a href="https://api.whatsapp.com/send?phone=3145092423&text=Hola%21%20Quisiera%20m%C3%A1s%20informació%C3%B3n%20sobre%20ustedes%." class="float" target="_blank">
                <i class="lni lni-whatsapp my-float"></i>
            </a>
        </div>

        <a href="#" class="scroll-top btn-hover">
            <i class="lni lni-chevron-up"></i>
        </a>

    </body>
</html>
@include('webpage.js.JSindex')