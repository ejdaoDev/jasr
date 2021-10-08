@include('dashboard.layouts.head_1')
<title>Crear Usuario</title>
@include('dashboard.layouts.head_2')
@include('dashboard.layouts.sidebar_1')
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
       aria-expanded="true" aria-controls="collapseOne">
        <span>Seguridad</span>
    </a>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" id="lvlactive" href="create-user">Registrar usuario</a>
            <a class="collapse-item" id="lvlinactive" href="modify-user">Modificar usuario</a>                           
        </div>
    </div>
</li>    
@include('dashboard.layouts.sidebar_2')
@include('dashboard.layouts.topbar')
<div class="container-fluid">
    <div class="col-lg-4" style="margin: 0 auto;">
           @if(count($errors)>0)
            <div class="alert alert-danger alert-dismissible" role="success">
                <ul>
                    @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form class="form-horizontal" method="POST" action="create-user">{{csrf_field()}}
            @include('dashboard.exits.seguridadExits')
            @include('dashboard.errors.seguridadErrors')
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Identificación*
                    <input type="text" class="form-control" name="idnumber" maxlength="20" value="{{ old('idnumber') }}" required autofocus>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Celular
                    <input type="text" class="form-control" name="phonenumber" maxlength="20" value="{{ old('phonenumber') }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Primer nombre*
                    <input type="text" class="form-control" name="firstname" maxlength="50" value="{{ old('firstname') }}" required>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Segundo nombre
                    <input type="text" class="form-control" name="secondname" maxlength="50" value="{{ old('secondname') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Primer apellido*
                    <input type="text" class="form-control" name="firstlastname" maxlength="50" value="{{ old('firstlastname') }}" required>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Segundo apellido
                    <input type="text" class="form-control" name="secondlastname" maxlength="50" value="{{ old('secondlastname') }}">
                </div>
            </div>                               
            <div class="form-group">
                Rol*
                <select name="role" class="form-control" required>
                    <option selected disabled hidden style='display: none' value=''></option> 
                    @foreach($roles as $rol)
                    <option value ="{{$rol->id}}">{{$rol->name}}</option>    
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                Email*
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="70" required>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    password*
                    <input type="password" class="form-control" name="password" maxlength="20">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    Confirmar password*
                    <input type="password" class="form-control" name="password_confirmation" maxlength="20"></div>
            </div>
            <button id="btn-primary" class="btn btn-user btn-block" type="submit">Registrar</button>
            <button id="btn-secondary" class="btn btn-user btn-block" type="reset">Limpiar</button>
            <hr>
        </form>
    </div>
</div>
@include('dashboard.layouts.footer')