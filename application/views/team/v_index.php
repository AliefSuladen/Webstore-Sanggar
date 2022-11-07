<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Team Production</h3>

                <div class="card-tools">
                  <a href="<?=base_url('team/add')?>"  type="button" class="btn btn-tool btn-sm" >
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
                              <th>Nama</th>
                              <th>Foto</h>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1;
                           foreach ($team as $key => $value) {?>
                          <tr>
                              <td class="text-center"> <?=$no++;?></td>
                              <td class="text-center"> <?=$value->nama_tim ?></td>
                              <td class="text-center"> <img src="<?=base_url('asset/gambarteam/'. $value->gambar_tim)?>" width="150"></td>
                              <td class="text-center">
                                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_tim?>"><i class=" fas fa-trash"></i> </button>
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
          <?php foreach ($team as $key => $value) {?>
      <div class="modal fade" id="delete<?= $value->id_tim?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Hapus <?= $value->nama_tim?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
           <h3>Apakah Anda Ingin Menghapus Data Ini ??</h3>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?=base_url('team/delete/'. $value->id_tim)?>" type="submit" class="btn btn-primary"> Hapus</a>
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