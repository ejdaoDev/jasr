<?php $title = "JASR | Galeria"; ?>
<?php $description = "Imagenes de algunos de nuestros proyectos"; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <title>{{$title}}</title>
        <meta name="description" content="" />
        <meta charset="utf-8" />
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
        <link rel="stylesheet" href="assets/webpage/css/animate.css" />
        <link rel="stylesheet" href="assets/webpage/css/tiny-slider.css" />
        <link rel="stylesheet" href="assets/webpage/css/glightbox.min.css" />
        <link rel="stylesheet" href="assets/webpage/css/main.css" />
        <link rel="stylesheet" href="assets/webpage/css/reset.css" />
        <link rel="stylesheet" href="assets/webpage/css/responsive.css" />
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
        @include('webpage.layouts.header')     
        <section class="portfolio-section section"><br>
            <div id="container" class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Galería</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                            <button id="one" class="portfolio-btn active" data-filter="*" onclick="selectedItem('one')">Todos</button>
                            <button id="two" class="portfolio-btn" onclick="selectedItem('two')" data-filter=".branding">Marca</button>
                            <button id="three" class="portfolio-btn" onclick="selectedItem('three')" data-filter=".marketing">Marketing</button>
                            <button id="four" class="portfolio-btn" onclick="selectedItem('four')" data-filter=".web">Web Diseño</button>
                            <button id="five" class="portfolio-btn" onclick="selectedItem('five')" data-filter=".graphic">Diseño audiovisual</button>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
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
                                    <h4>lorem ipsum</h4>
                                    <p>Neque porro quisquam est qui dolorem eque porro quisquam est qui dolorem</p>
                                    <a href="portfolio-single.html" class="theme-btn border-btn">Vista completa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="client-logo-carousel d-flex align-items-center justify-content-between"></div>

        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center col-md-12 col-12">
                            <div class="f-about single-footer">
                                <div class="logo">
                                    <img src="assets/webpage/images/logosinletras2.png" alt="Logo">
                                </div>
                                <div class="container">
                                    <div class="copyright">
                                        &copy; Copyright <strong>JASR Desarrollo Web</strong>. Todos los derechos reservados
                                    </div>
                                    <div class="credits">
                                        Diseñada por <a href="#">JASR Desarrollo Web</a>
                                        <p><b>publicada por JASR: +57 3227477211<a href="+573227477211"><i class="fa fa-whatsapp"></i></a></b></p>
                                    </div>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/Jarsdesarrolloweb" target="_blank"><i class="lni lni-facebook-filled" ></i></a></li>
                                        <li><a href="https://www.instagram.com/jasr_web/" target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer gallery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="whatsap">
            <a href="https://api.whatsapp.com/send?phone=573227477211&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20ustedes" class="float" target="_blank">
                <i class="lni lni-whatsapp my-float"></i>
            </a>
        </div>

        <a href="#" class="scroll-top btn-hover">
            <i class="lni lni-chevron-up"></i>
        </a>
        @include('webpage.js.JSgallery')
    </body>
</html>