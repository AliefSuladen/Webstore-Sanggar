

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$total_barang?></h3>

                <p>Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url('produk')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$total_kategori?></h3>

                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url('kategori')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$total_promo?></h3>

                <p>Promo Bulan Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url('promo')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$total_foto?></h3>

                <p>Foto Home</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url('fotoproduk')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Komentar </h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php 
                  if ( $this->session->flashdata('pesan')){
                      echo '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Succes!</h5>';
                      echo $this->session->flashdata('pesan');
                      echo'</div>';
                  }
                  ?>
                  <table class="table table-bordered" id="example2">
                      <thead class="text-center">
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>email</h>
                              <th>pesan</h>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1;
                           foreach ($pesan as $key => $value) {?>
                          <tr>
                              <td class="text-center"> <?=$no++;?></td>
                              <td class="text-center"> <?=$value->nama ?></td>
                              <td class="text-center"> <?=$value->email ?></td>
                               <td class="text-center"> <?=$value->pesan ?></td>
                              <td class="text-center">
                                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=<?=$value->email?>" class="btn btn-success btn-sm"><i class="fas fa-send"></i> Balas </a>
                                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pesan?>"><i class=" fas fa-trash"></i> </button>
                              </td>
                          </tr>
                          <?php }?>
                      </tbody>
                  </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
          <?php foreach ($pesan as $key => $value) {?>
      <div class="modal fade" id="delete<?= $value->id_pesan?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Hapus <?= $value->nama?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
           <h3>Apakah Anda Ingin Menghapus Data Ini ??</h3>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?=base_url('admin/delete_pesan/'. $value->id_pesan)?>" type="submit" class="btn btn-primary"> Hapus</a>
              <?php 
            echo form_close();
            ?>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php }?>

