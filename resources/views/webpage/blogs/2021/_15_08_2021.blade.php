<?php $title="Proyecto base de laravel con Admin LTE"; ?>
<?php $description="Proyecto base de laravel con Admin LTE"; ?>
@include('webpage.layouts.app')<br><br><br><br><br>
<div>
    <h1>{{$blog->title}}</h1><br>
    {!!$blog->content!!}<br>

</div>
@include('webpage.layouts.footer')

@include('webpage.js.JSindex')