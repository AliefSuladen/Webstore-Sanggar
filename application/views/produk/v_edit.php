<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Form Edit Produk</h3>
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
                  echo form_open_multipart('produk/edit/'. $produk->id_produk)?>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input name="nama_produk" class="form-control" placeholder="Nama Produk" value="<?= $produk->nama_produk ?>">
                      </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kategori</label>
                         <select name="id_kategori" class="form-control">
                            <option value="<?= $produk->id_kategori?>"><?=$produk->nama_kategori?></option>
                            <?php foreach ($kategori as $key => $value) {?>
                                <option value="<?=$value->id_kategori?>"><?=$value->nama_kategori?></option>
                           <?php }?>
                        </select>
                      </div>
                     </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga Produk</label>
                        <input name="harga" class="form-control" placeholder="Harga Produk" value="<?= $produk->harga ?>">
                      </div>
                    </div>
                  </div>


                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk"  rows="5"><?= $produk->deskripsi ?></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto Produk</label>
                                <input type="file" name="gambar_produk"  class="form-control"  id="preview_gambar">
                            </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <img src="<?=base_url('asset/gambarbarang/'. $produk->gambar_produk )?>" id="gambar_load" width="400px">      
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="<?=base_url('produk')?>" class="btn btn-success btn-sm">Kembali</a>
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