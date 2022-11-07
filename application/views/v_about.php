<?=$no=0?>
<section class="defenisi-about mb-5" id="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md">
            <div class="text-wrapper">
              <h2 class="mbr-section-title mb-3 mbr-fonts-style display-2"><strong>Mutia Zayyana&nbsp;</strong></h2>
              <p class="mbr-text mb-3 mbr-fonts-style display-7">Sanggar Mutia zayyana Merupakan penyedia layanan Wedding service
                Meliputi :<br>
                1. Dekorasi pelaminan <br>
                2. Dekorasi kamar pengantin <br>
                3. Penyewaan pakaian pengantin <br>
                3. seragam ortu pengantin<br>
                4. Makeup pengantin<br>
                5. Makeup keluarga pengantin<br>
                6. Melati segaruntuk pengantin<br>
                7. Penari adat dan kreasi<br>
                8. Fotografer dan fotografer<br>
                9. Catering service</p>
            </div>
          </div>
          <div class="figure col-12 col-md-7">
            <!-- <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/HujDEPAWboE?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" frameborder="0" allowfullscreen></iframe> -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url(); ?>template/front_end/assets/img/Slide 16_9 - 8.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url(); ?>template/front_end/assets/img/features3.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="<? base_url(); ?>template/front_end/assets/img/features2.jpg" class="d-block w-100" alt="..." />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="box">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-part text-center">
                <!-- <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i> -->
                <div class="title">
                  <h3>Visi</h3> 
                </div>
                <div class="text">
                  <span>Menjadi Partner Terbaik Pasangan Pengantin Dalam Memberikan Busana Dan Tampilan Pernikahan Yang Elegan <br> <br></span
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-part text-center">
                <!-- <i class="fa fa-twitter fa-3x" aria-hidden="true"></i> -->
                <div class="title">
                  <h3>Misi</h3>
                  
                </div>
                <div class="text">
                  <span>Memberikan riasan pengantin yg cantik dan sesuai,
                     Menyiapkan  baju dan dekorasi pengantin terkini dan menarik,
                     Menawarkan harga yg selalu kompetitif,
                     Memberikan pelayanan yang nyaman dan penuh keakraban</span>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center">
                <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                <div class="title">
                  <h3>Facebook</h3>
                </div>
                <div class="text"><span>Follow us on facebook for future updates</span></div>
                <a href="#">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

   
    <section class="testimoni">
    
      <div class="container-fluid px-2 px-md-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-lg-9 col-xl-8">
            <div class="card card-main border-0 text-center">
              <h5 class="font-weight-bold mb-4">Komentar Pelanggan</h5>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                 
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?=$no++?>"></li>

                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active"> 
                    <div class="card border-0 card-0">
                      <div class="card profile py-3 px-4">
                      <div class="text-center"><img src="<?=base_url('asset/gambar/nofoto.jpeg')?>" class="img-fluid profile-pic" /></div>
                        <h6 class="mb-0 mt-2">Muhammad</h6>
                        <small></small>
                      </div>
                      <img class="img-fluid open-quotes" />
                      <h2>Terimakasih Mutia Zayyana </h2>
                      <p class="content mb-0">Berkat menyewa jasa dri sanggar mutiazayyana pernikahan saya menjadi lebih berkelas dan elegan sangat berkesan.</p>
                      <img class="img-fluid close-quotes ml-auto" />
                    </div>
                  </div>
                  <?php $no=1;
                foreach ($pesan as $key => $value) {?>

                  <div class="carousel-item ">
                    <div class="card border-0 card-0">
                      <div class="card profile py-3 px-4">
                      <div class="text-center"><img src="<?=base_url('asset/gambar/nofoto.jpeg')?>" class="img-fluid profile-pic" /></div>
                        <h6 class="mb-0 mt-2"><?=$value->nama ?></h6>
                        
                      </div>
                      <img class="img-fluid open-quotes" />
                      <h2><?=$value->subject ?></h2>
                      <p class="content mb-0"><?=$value->pesan ?></p>
                      <img class="img-fluid close-quotes ml-auto" />
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tim">
      <center>
        <h3 class="mt-5 text-white">Tim</h3>
        <hr width="100rem" height="2rem" class="text-white" />
      </center>
      <div class="container con-tim">
        
        <div class="row">
          <?php foreach ($team as $key => $value) {?>
            <div class="col-lg-4">
                <div class="card card-tim p-0">
                    <div class="card-image"> <img  src="<?=base_url('asset/gambarteam/'.$value->gambar_tim)?>"> </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2"><?=$value->nama_tim?></h4>
                        <h5><?=$value->jabatan?></h5>
                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1"> <a href="<?=$value->link_fb?>"> <span class="fab fa-facebook"></span> </a> </li>
                            <li style="--i:3"> <a href="<?=$value->link_ig?>"> <span class="fab fa-instagram"></span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    </section>