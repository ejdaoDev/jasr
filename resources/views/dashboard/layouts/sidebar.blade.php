@include('dashboard.js.JSsidebar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="assets/dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
            <li id="security-accordion" class="nav-item">
            <a id="security-link" href="#" class="nav-link">
                <i class="fas fa-shield-alt nav-icon"></i>
              <p>Seguridad<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class=" nav-treeview">
              <li class="nav-item">
                <a id="create-user" onclick="sidebarOptionSelected('security','create-user');" href="create-user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                  <a id="modify-user" onclick="sidebarOptionSelected('security','modify-user');" href="modify-user" class="nav-link" data-turbolinks="false">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar Usuario</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>