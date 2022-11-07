<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark">
    <div class="container">
      <a href="<?=base_url('home')?>" class="navbar-brand">
        <span class="brand-text font-weight-white">Mutia Zayyana</span>
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?=base_url('home')?>"class="nav-link">Home</a>
          </li>
          <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="<?=base_url('home/produk')?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <?php foreach ($kategori as $key => $value) {?> 
                <li><a href="<?=base_url('home/kategori/'.$value->id_kategori) ?>" class="dropdown-item"><?=$value->nama_kategori?> </a></li>
              <?php }?>
              

            </ul>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('home/promo')?>"class="nav-link">Promo</a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('kontak')?>" class="nav-link">Contact</a>
          </li>
         
        </ul>

      </div>

      
    </div>
  </nav>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container">