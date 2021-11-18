@include('dashboard.js.JSsidebar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
        <img src="assets/dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/dashboard/img/avatars/avatar0.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="home" class="d-block">{{auth()->user()->firstname.' '.auth()->user()->firstlastname}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                @if(auth()->user()->role->name == 'ADMIN')
                <li id="security-accordion" class="nav-item">
                    <a id="security-link" href="#" class="nav-link">
                        <i class="fas fa-shield-alt nav-icon"></i>
                        <p>Seguridad<i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class=" nav-treeview">
                        <li class="nav-item">
                            <a id="create-user" onclick="sidebarOptionSelected('security', 'create-user');" href="create-user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crear Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="edit-user" onclick="sidebarOptionSelected('security', 'edit-user');" href="edit-user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editar Usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            
                <li id="blogs-accordion" class="nav-item">
                    <a id="blogs-link" href="#" class="nav-link">
                        <i class="fas fa-blog  nav-icon"></i>
                        <p>Blogs<i class="fas fa-angle-left right"></i>                            
                        </p>
                    </a>
                    <ul class=" nav-treeview">
                        <li class="nav-item">
                            <a id="create-blog" onclick="sidebarOptionSelected('blogs', 'create-blog');" href="create-blog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crear Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="gallery" onclick="sidebarOptionSelected('blogs', 'gallery');" href="gallery" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galería</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="draft-copies" onclick="sidebarOptionSelected('blogs', 'draft-copies');" href="draft-copies" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borradores</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>