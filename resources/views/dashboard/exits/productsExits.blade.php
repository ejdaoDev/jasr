@if(Session::has('productcreate'))
 <div class="alert alert-primary alert-dismissible" role="success">
 <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
   <b>{{Session::get('productcreate')}}</b>
 </div>
@endif
@if(Session::has('categorycreate'))
 <div class="alert alert-primary alert-dismissible" role="success">
 <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
   <b>{{Session::get('categorycreate')}}</b>
 </div>
@endif