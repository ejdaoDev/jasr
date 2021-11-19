<?php
$title = $blog->title;
$description = $blog->description;
?>
@include('webpage.layouts.appBlog')
<script type="text/javascript">
    let blog = '<?php echo $blog->id; ?>';
    $.ajax({
        url: 'countVisitsBlog/' + blog,
        method: 'GET'
    }).done();
</script>
<section class="portfolio-section section"><br>
    <div id="container" class="container">
        <div class="row grid">
            <h1>{{$blog->title}}</h1><br>
            {!!$blog->content!!}<br>
        </div>
    </div>
</section>
@include('webpage.layouts.footer')
@include('webpage.js.JSindex')