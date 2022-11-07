<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100"   src="<?= base_url(); ?>asset/slider/slider1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?= base_url(); ?>asset/slider/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100"  src="<?= base_url(); ?>asset/slider/slider3.jpg" alt="Second slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


<div class="card card-solid">
  <div class="card-body pb-0">
     <div class="row">

     <?php foreach ($produk as $key => $value) {?>
      
      <div class="col-12 col-sm-4  d-flex align-items-stretch ">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                   <h2 class="lead"><b><?=$value->nama_produk?></b></h2>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">
                    <img src="<?=base_url('asset/gambarbarang/'.$value->gambar_produk) ?>" alt="" class=" img-fluid" width="500px">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="text-left">
                    <span class="badge bg-success">
                       Rp. <?=number_format($value->harga)?>
                     </span>
                    </div>
                    </div>
                  <div class="col-sm-6">
                  <div class="text-right">
                    <a href="<?=base_url('home/detail_barang/'.$value->id_produk)?>" class="btn btn-sm btn-primary">
                      <i></i>Lihat Detail
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
<?php }?>
     </div>
    </div>
  </div>