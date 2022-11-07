<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Form Add Fotohome</h3>
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
                  echo form_open_multipart('fotohome/add')?>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input name="judul" class="form-control" placeholder="Judul" value="<?= set_value('judul') ?>">
                      </div>
                      <div class="form-group">
                        <label>Keterangan Singkat</label>
                        <input name="ket" class="form-control" placeholder="Keterangan" value="<?= set_value('ket') ?>">
                      </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto Home</label>
                                <input type="file" name="gambar"  class="form-control" required id="preview_gambar">
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <img src="<?=base_url('asset/gambarhome/nofoto.jpeg')?>" id="gambar_load" width="400px">      
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="<?=base_url('fotohome')?>" class="btn btn-success btn-sm">Kembali</a>
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