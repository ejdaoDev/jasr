@if(count($errors)>0)
<div class="alert alert-danger alert-dismissible" role="success">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(Session::has('usuarionocreado'))
<div class="alert alert-danger alert-dismissible" role="success">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
    <b>{{Session::get('usuarionocreado')}}</b>
</div>
@endif