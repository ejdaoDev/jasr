@if(Session::has('usuariocreado'))
 <div class="alert alert-success alert-dismissible" role="success">
 <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
   <b>{{Session::get('usuariocreado')}}</b>
 </div>
@endif
