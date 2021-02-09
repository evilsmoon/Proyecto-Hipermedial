  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>index.php/Admin" class="brand-link">
      <img src="<?php echo base_url('assets/img/lOGO_2.png')?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kmellando.com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/img/admin_1.png')?>" class="img-circle elevation-2" alt="User Image">
          
       
        </div>
        <div class="info">
          <a  class="d-block">Administrador de Kmellando</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>index.php/Admin/getUsers" class="nav-link">
            
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios de Kmellando
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin/getEmployees"  class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Empleados de Kmellando
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>