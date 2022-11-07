<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data produk</h3>

                <div class="card-tools">
                  <a href="<?=base_url('produk/add')?>"  type="button" class="btn btn-tool btn-sm" >
                    <i class="fas fa-plus"></i> Add</a>
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
                              <th>Kategori</th>
                              <th>Harga</th>
                              <th>Gambar</h>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1;
                           foreach ($produk as $key => $value) {?>
                          <tr>
                              <td class="text-center"> <?=$no++;?></td>
                              <td class="text-center"> <?=$value->nama_produk ?></td>
                              <td class="text-center"> <?=$value->nama_kategori?></td>
                              <td class="text-center"> Rp.<?= number_format($value->harga, 0)  ?></td>
                              <td class="text-center"> <img src="<?=base_url('asset/gambarbarang/'. $value->gambar_produk)?>" width="150"></td>
                              <td class="text-center">
                                  <a href="<?=base_url('produk/edit/'. $value->id_produk)?>"  class="btn btn-warning btn-sm"><i class=" fas fa-edit"></i> </a>
                                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_produk?>"><i class=" fas fa-trash"></i> </button>
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
          <?php foreach ($produk as $key => $value) {?>
      <div class="modal fade" id="delete<?= $value->id_produk?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Hapus <?= $value->nama_produk?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
           <h3>Apakah Anda Ingin Menghapus Data Ini ??</h3>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?=base_url('produk/delete/'. $value->id_produk)?>" type="submit" class="btn btn-primary"> Hapus</a>
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