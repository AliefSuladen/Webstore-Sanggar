<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Foto Produk</h3>

                <div class="card-tools">
                  
                </div>
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
                              <th>Nama produk</th>
                              <th>Cover</th>
                              <th>Jumlah Foto</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1;
                           foreach ($fotoproduk as $key => $value) {?>
                            <tr>
                             <td class="text-center"><?=$no++; ?></td>
                             <td class="text-center"><?= $value->nama_produk?></td>
                             <td class="text-center"><img src="<?=base_url('asset/gambarbarang/'.$value->gambar_produk) ?>" width="100px"></td>
                             <td class="text-center"><?= $value->total_gambar?></td>
                             <td class="text-center">
                                 <a href="<?=base_url('fotoproduk/add/'.$value->id_produk)?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add Foto </a>
                             </td>
                         </tr>

                        <?php  } ?>
                      </tbody>
                  </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 