<!-- Main Sidebar Container -->
ff
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
            <a href="#" class="d-block"><?php $no=1; foreach ($user as $key => $value) {?>
               <?= $value->nama_user?>
               <?php } ?></a>
               
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?=base_url('admin')?>" class="nav-link ">
              <i class="nav-icon far fa-clone"></i>
              <p>
                Dasboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Pelayanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('produk')?>" class="nav-link <?php if ($this->uri->segment(1) == 'produk'){
                   echo "active";
                    }?>" class="nav-link">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                Produk
                </p>     
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('kategori')?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori'){
                echo "active";
                 }?>" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                Kategori
                </p>     
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-images"></i>
              <p>
                Galeri Foto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('fotoproduk')?>" class="nav-link <?php if ($this->uri->segment(1) == 'fotoproduk'){
                 echo "active";
                 }?>" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
               Foto Produk
                </p>     
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('fotopromo')?>" class="nav-link <?php if ($this->uri->segment(1) == 'fotopromo'){
              echo "active";
            }?>" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                Foto Promo
                </p>     
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('fotohome')?>" class="nav-link <?php if ($this->uri->segment(1) == 'fotohome'){
              echo "active";
            }?>" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                Foto Home
                </p>     
                </a>
              </li>
            </ul>
          

          <li class="nav-item">
            <a href="<?=base_url('promo')?>" class="nav-link <?php if ($this->uri->segment(1) == 'promo'){
              echo "active";
            }?>">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Promo Bulan Ini
              </p>
            </a>
          </li>
         
         
         

          <li class="nav-item">
            <a href="<?=base_url('team')?>" class="nav-link <?php if ($this->uri->segment(1) == 'team'){
              echo "active";
            }?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team Production
              </p>
            </a>
          </li>
          
          

          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title?></h1>
          </div><!-- /.col -->
          
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
         