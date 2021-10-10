@include('webpage.layouts.app')

<section class="portfolio-section section" style="margin-top: -50px;">
            <div id="container" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                            <button class="portfolio-btn active" onclick="selected('all')" data-filter="*" id="all">Todos</button>
                            <button class="portfolio-btn" onclick="selected('branding')" data-filter=".branding" id="branding">Marca</button>
                            <button class="portfolio-btn" onclick="selected('marketing')" data-filter=".marketing" id="marketing">Marketing</button>
                            <button class="portfolio-btn" onclick="selected('web')" data-filter=".web" id="web">Diseño web</button>
                            <button class="portfolio-btn" onclick="selected('graphic')" data-filter=".graphic" id="graphic">Diseño audiovisual</button>
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

        

@include('webpage.layouts.footer')

@include('webpage.js.JSindex')
@include('webpage.js.JSgallery')