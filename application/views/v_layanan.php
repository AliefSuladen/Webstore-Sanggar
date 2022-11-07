<section class="produk-layanan">
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
                      <div class="testimonial mt-4 mb-2">Sanggar Mutiya Zayyana Menyediakan Pelayanan <?=$value->nama_kategori?> Terbaik </div>
                      <div class="name"><?=$value->nama_kategori?></div>
                    </div>
                  </div>
                  <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="paket">
      <center>
        <h3 class="mt-5">Produk Kami</h3>
        <hr width="100rem" height="2rem" />
      </center>
      <div class="container container-paket">
        <div class="d-lg-flex">
          <div class="card card-home border-0 me-lg-4 mb-lg-0 mb-4">
            <div class="backgroundEffect"></div>
            <div class="pic">
              <img class="" src="assets/img/4.png" alt="" />
            </div>
            <div class="content">
              <p class="h-1 mt-4">Paket 1A</p>
              <p class="text-muted mt-3">
                <ul>
                  <li>Rias</li>
                  <li>Tari </li>
                  <li>make up</li>
                  <li>PhotoBooth</li>
                </ul>
              </p>
              <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                <div class="btn btn-primary" data-toggle="modal" data-target="#paket1">Selengkapnya</div>
                <div class="d-flex align-items-center justify-content-center foot"></div>
              </div>
            </div>
          </div>
          <div class="card card-home border-0 me-lg-4 mb-lg-0 mb-4">
            <div class="backgroundEffect"></div>
            <div class="pic">
              <img class="" src="assets/img/6.jpg" alt="" />
            </div>
            <div class="content">
              <p class="h-1 mt-4">Paket 1A</p>
              <p class="text-muted mt-3"></p>
              <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                <div class="btn btn-primary">Selengkapnya</div>
                <div class="d-flex align-items-center justify-content-center foot"></div>
              </div>
            </div>
          </div>
          <div class="card card-home border-0 mb-lg-0 mb-4">
            <div class="backgroundEffect"></div>
            <div class="pic">
              <img class="" src="assets/img/3.jpg" alt="" />
            </div>
            <div class="content">
              <p class="h-1 mt-4">Paket 1A</p>
              <p class="text-muted mt-3"></p>
              <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                <div class="btn btn-primary">Selengkapnya</div>
                <div class="d-flex align-items-center justify-content-center foot"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="paket1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header "> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>
                <div class="modal-body p-0 row">
                    <div class="col-12 col-lg-4 ad p-0"> <img src="assets/img/1.jpg" width="100%" height="100%"> </div>
                    <div class="details col-12 col-lg-8">
                        <div class="heading d-flex">
                            <div class="logo"></div>
                            <!-- <div class="off"></div> -->
                        </div>
                        <h2>Paket 1A</h2>
                        <p>
                            <small class="text-muted">
                              <ul>
                                <li>Tata Rias</li>
                                <li>Photography</li>
                              </ul>
                          </small>
                        </p>
                        <br>
                        <p>

                          <strong>Deskripsi : </strong>
                          <br>
                          <small class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repellat ipsa nostrum cupiditate fugiat harum ab veritatis debitis! Id molestiae velit a iure fuga quisquam ad sequi quis ea vel.
                        </small>
                      </p>
                        <div class="d-flex mt-2 mb-5"> <div class="btn btn-primary">Pesan</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!--  -->
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