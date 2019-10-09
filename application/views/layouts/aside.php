

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url();?>vendors/dist/img/AdminLTELogo.png"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Brazatel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>vendors/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php  
                $a = $this->session->userdata("nombre");
                $b = $this->session->userdata("papellido");
            ?>
          <a href="#" class="d-block"><?php echo $a.' '.$b ?></a>
        </div> 
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>dashboard" 
              class="nav-link <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>proyectos" 
              class="nav-link <?php if($this->uri->segment(1)=="proyectos"){echo "active";}?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Proyectos
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview 
                <?php if($this->uri->segment(1)=="proyect" ||
                       $this->uri->segment(1)=="usuarios" ||
                       $this->uri->segment(1)=="roles" ||
                       $this->uri->segment(1)=="permisos"){echo "menu-open";}?>">
            <a href="#" class="nav-link
                <?php if($this->uri->segment(1)=="proyect" ||
                     $this->uri->segment(1)=="usuarios" ||
                     $this->uri->segment(1)=="roles" ||
                     $this->uri->segment(1)=="permisos"){echo "active";}?>">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Administrador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>proyect" 
                  class="nav-link <?php if($this->uri->segment(1)=="proyect"){echo "active";}?>">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>Proyectos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>usuarios" 
                  class="nav-link <?php if($this->uri->segment(1)=="usuarios"){echo "active";}?>">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>roles" 
                  class="nav-link <?php if($this->uri->segment(1)=="roles"){echo "active";}?>">
                  <i class="fas fa-user-tag nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>permisos" 
                  class="nav-link <?php if($this->uri->segment(1)=="permisos"){echo "active";}?>">
                  <i class="fas fa-user-shield nav-icon"></i>
                  <p>Privilegios</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview <?php if($this->uri->segment(1)=="reportes"){echo "menu-open";}?>">
            <a href="#" 
               class="nav-link <?php if($this->uri->segment(1)=="reportes" ||
                                  $this->uri->segment(1)=="seguros" ){echo "active";}?>">
              <i class="fas fa-copy nav-icon"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/proyectos" 
                  class="nav-link <?php if($this->uri->segment(1).'/'.$this->uri->segment(2)=="reportes/proyectos"){echo "active";}?>">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>Proyectos</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>reportes/seguros" 
                  class="nav-link <?php if($this->uri->segment(1).'/'.$this->uri->segment(2)=="reportes/seguros"){echo "active";}?>">
                  <i class="fas fa-hospital nav-icon"></i>
                  <p>Seguros</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>