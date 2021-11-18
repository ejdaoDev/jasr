<?php
$title= $blog->title;
$description= $blog->description;
?>
@include('webpage.layouts.appBlog')
<section class="portfolio-section section"><br>
    <div id="container" class="container">

        <div class="row grid">
            <h1>{{$blog->title}}</h1><br>
            {!!$blog->content!!}<br>
        </div>
</section>
@include('webpage.layouts.footer')
@include('webpage.js.JSindex')