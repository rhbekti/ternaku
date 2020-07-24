<?php
$menu = $this->session->userdata('menu');
$submenu = $this->session->userdata('submenu');
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>/assets/AdminLTE/index3.html" class="brand-link">
      <img src="<?php echo base_url();?>/assets/AdminLTE/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SITERNAK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>/assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rh Bekti</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview <?php echo($menu=="ternak"?"menu-open":""); ?>">
            <a href="javascript:void(0);" class="nav-link <?php echo($menu=="ternak"?"active":""); ?>">
              <i class="nav-icon fas fa-cat"></i>
              <p>
                Ternak
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('/Sapi');?>" class="nav-link <?php echo($submenu == "sapi"?"active":""); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sapi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('/Kandang');?>" class="nav-link <?php echo($submenu == "kandang"?"active":""); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kandang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/assets/AdminLTE/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/assets/AdminLTE/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Peternak'); ?>" class="nav-link <?php echo($menu == "peternak"?"active":""); ?>">
              <i class="nav-icon fas fa-hat-cowboy"></i>
              <p>
                Peternak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Kelompok'); ?>" class="nav-link <?php echo($menu == "kelompok"?"active":""); ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kelompok
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Koperasi'); ?>" class="nav-link <?php echo($menu == "koperasi"?"active":""); ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Koperasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Pengguna'); ?>" class="nav-link <?php echo($menu == "pengguna"?"active":""); ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pengguna
                <span class="right badge badge-danger">0</span>
              </p>
            </a>
          </li>
          <li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
