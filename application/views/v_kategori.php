

<h3><?=$title?></h3>
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
