<?php $title="JASR | Contactanos"; ?>
@include('webpage.layouts.app')
<section id="call-action" class="call-action section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 wow fadeInLeft" data-wow-delay=".3s">
                <div class="section-title">
                    <span>Conozcanos</span>
                    <h2>Nosotros somos muy <br>Buenos<br> Impulsando su <br>negocio</h2>
                    <p>Descubrir más</p>
                </div>
                <div class="button section-button">
                    <a href="about-us.html" class="btn mouse-dir">Descubrir más<span class="dir-part"></span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 wow fadeInRight" data-wow-delay=".4s">
                <div class="right-form">
                    <div class="section-heading">
                        <h4><span>Contacta con nosotros</span></h4>
                    </div>
                    <div class="contact-form-box ">
                        <form method="post" action="#" class="mailform">
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
        </div>
    </div>
</section>
@include('webpage.layouts.footer')

@include('webpage.js.JSindex')