@include('dashboard.layouts.head_1')
<title>Modificar Usuario</title>
@include('dashboard.layouts.head_2')
<!-- Sidebar -->
@include('dashboard.layouts.sidebar_1')
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
       aria-expanded="true" aria-controls="collapseOne">
        <span>Seguridad</span>
    </a>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" id="lvlinactive" href="create-user">Registrar usuario</a>
            <a class="collapse-item active" id="lvlactive" href="modify-user">Modificar usuario</a>                            
        </div>
    </div>
</li>    
@include('dashboard.layouts.sidebar_2')
@include('dashboard.layouts.topbar')
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">                    
        <div class="card-body">
            @include('dashboard.exits.seguridadExits')
            @include('dashboard.errors.seguridadErrors')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th style="width: 60px;">Cambiar estado</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th style="width: 60px;">Cambiar estado</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>                                                
                            <td>{{$user->id}}</td>
                            <td>{{$user->names}}</td>
                            <td>{{$user->lastnames}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>                                                                           
                            @if($user->active == true)      
                                <td><a href="inactivateUser/{{$user->id}}"> <img src="assets/webpages/demo/images/activo.png" style="width: 60px; height: 50px; margin-left: 10px;"></td>
                            @endif
                            @if($user->active == false)      
                                <td><a href="activateUser/{{$user->id}}"> <img src="assets/webpages/demo/images/inactivo.png" style="width: 60px; height: 50px; margin-left: 10px;"></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layouts.footer')