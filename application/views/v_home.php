<div class="container hero">
          <div class="row">
            <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder"></div>

            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
              <h1>Sanggar Mutia Zayyana</h1><hr>
              <p>
              Mutia Zayyana Merupakan Penyedia Layanan Pernikahan Mulai dari Dekorasi pelaminan, Pakaian, Dan Makeup Pengantin, Makeup Keluarga, Penari Adat Dan Kreasi, Fotografer Dan Videografer, Catering Service.<br />
              </p>
            </div>

            <div class="boxes">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="produk-home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <center>
              <h3 class="mt-5">Layanan Kami</h3>
              <hr width="100rem" height="2rem" />
            </center>
            <div class="owl-carousel owl-theme mt-5">
                <?php foreach ($kategori as $key => $value) { ?>
                  
              <div class="owl-item">
                <div class="card card-produk">
                  <div class="img-card"><img  src="<?=base_url('asset/gambarkategori/'.$value->gambar_kategori)?>"></div>
                  <div class="testimonial mt-4 mb-2"> <h3><?=$value->nama_kategori?></h3>   </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-5 galeri">
      <div class="container con-galeri">
        <div class="row">
          <?php foreach ($fotohome as $key => $value) {?>
          <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 px-0">
            <div class="image">
            <img  src="<?=base_url('asset/gambarhome/'.$value->gambar)?>">
              <div class="overlay">
                <p class="h4"><?=$value->judul?></p>
                <p class="textmuted"><?=$value->ket?></p>
                <ul class="list-unstyled d-flex">
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
          <?php }?>
          
        </div>
      </div>
    </section>