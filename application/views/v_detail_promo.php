<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?=$produk->nama_produk?></h3>
              <div class="col-12">
                <img src="<?=base_url('asset/gambarpromo/'.$produk->gambar_produk) ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?=base_url('asset/gambarpromo/'.$produk->gambar_produk) ?>" alt="Product Image"></div>

                <?php foreach ($gambar as $key => $value) {?>
                    <div class="product-image-thumb" ><img src="<?=base_url('asset/gambarpromo/'.$value->gambar) ?>" alt="Product Image"></div>
              <?php  }?>
                
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?=$produk->nama_produk?></h3>
              <hr>
              
              <p>Sanggar Mutia Zayyana </p>
              <p>melayani paket pernikahan beserta wedding organizer dengan harga sangat murah tentunya dengan kualitas pelayanan terbaik</p>
              <p></p>
              <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">            
                Rp. <?=number_format($produk->harga)?>
                </h2>
                
              </div>
              <hr>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  <a href="https://api.whatsapp.com/send?phone=6285316171021 "style="color: white;">Pesan Sekarang</a>
                </div>
              </div>

              

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?=$produk->deskripsi?></div>
             
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


      <!-- Default box -->
      
    <!-- jQuery -->
<script src="<?= base_url(); ?>template/back_end/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>template/back_end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/<?= base_url(); ?>template/back_end/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>template/back_end/dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>