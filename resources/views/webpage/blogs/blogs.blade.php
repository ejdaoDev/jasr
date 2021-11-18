<?php
$title="JASR | Blogs";
$description="Blogs";
?>
@include('webpage.layouts.appBlog')
<div class="latest-news-area section" style="margin-top: -50px;">
        <div class="letast-news-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                    </div>
                </div><br><br>
                <div class="row" class="col-lg-12 col-md-6 col-12">
                    {{$blogs->links()}}
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
                            {{$blogs->links()}}
                </div>
            </div>
        </div>
    </div>
@include('webpage.layouts.footer')