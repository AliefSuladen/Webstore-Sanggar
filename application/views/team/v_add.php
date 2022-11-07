<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Form Add Team Production</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php 
                  //notifikasi form kosong
                  echo validation_errors('<div class="alert alert-info alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> ','</h5></div>');
                  //notif gagal upload
                  if (isset($error_upload)) {
                      echo '<div class="alert alert-info alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-info"></i>'.$error_upload.'</h5></div>';
                  }
                  echo form_open_multipart('team/add')?>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input name="nama_tim" class="form-control" placeholder="Nama" value="<?= set_value('nama_tim') ?>">
                      </div>
                      <div class="form-group">
                        <label>Bagian</label>
                        <input name="jabatan" class="form-control" placeholder="Bagian" value="<?= set_value('jabatan') ?>">
                      </div>
                      <div class="form-group">
                        <label>Link Facebook</label>
                        <input name="link_fb" class="form-control" placeholder="Facebook" value="<?= set_value('link_fb') ?>">
                      </div>
                      <div class="form-group">
                        <label>Link Instagram</label>
                        <input name="link_ig" class="form-control" placeholder="Instagram" value="<?= set_value('link_ig') ?>">
                      </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto</label>
                                <input type="file" name="gambar_tim"  class="form-control" required id="preview_gambar">
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <img src="<?=base_url('asset/gambarteam/nofoto.jpeg')?>" id="gambar_load" width="400px">      
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="<?=base_url('team')?>" class="btn btn-success btn-sm">Kembali</a>
                </div>
                  <?php echo form_close()?>
           </div>
        </div>
 </div>

<script>
    function  bacaGambar(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#gambar_load').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function(){
      bacaGambar(this);
    });
</script>