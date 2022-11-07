<div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>Mutia<strong>Zayyana</strong></h2>
              <p class="lead mb-5">Jl.Sultan M.Mansyur <br>
              Lr.Lebak Keranji Bukit Lama Palembang<br>
                Phone: +62 853 1617 1021
              </p>
            </div>
          </div>
          <div class="col-7">
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
                  echo form_open_multipart('kontak/add')?>
            <div class="form-group">
              <label for="inputName">Nama</label>
              <input  name="nama" class="form-control" value="<?= set_value('nama') ?>" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input  name="email" class="form-control" value="<?= set_value('email') ?>" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input  name="subject" class="form-control" value="<?= set_value('subject') ?>"/>
            </div>
            <div class="form-group">
              <label for="inputMessage">Pesan</label>
              <textarea name="pesan" class="form-control" value="<?= set_value('pesan') ?> rows="4" ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Kirim Pesan">
            </div>
            <?php echo form_close()?>
          </div>
        </div>
      </div>
      <section class="maps">
      <center>
        <h3 class="mt-5">Lokasi Kami</h3>
        <hr width="100rem" height="2rem" />
      </center>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 intro-section">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.7991294216545!2d104.72950371446218!3d-3.005575697811112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e19d4d2444b%3A0x4da6d043844b77aa!2sLebak%20Keranji!5e1!3m2!1sid!2sid!4v1639900880768!5m2!1sid!2sid"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <!-- <div class="col-sm-6 col-md-5 form-section">
            <div class="login-wrapper">
              <h2 class="login-title">Sign in</h2>
              <form action="#!">
                <div class="form-group"><label for="email" class="sr-only">Email</label> <input type="email" name="email" id="email" class="form-control" placeholder="Email" /></div>
                <div class="form-group mb-3"><label for="password" class="sr-only">Password</label> <input type="password" name="password" id="password" class="form-control" placeholder="Password" /></div>
                <div class="d-flex justify-content-between align-items-center mb-5"><input name="login" id="login" class="btn login-btn" type="button" value="Login" /> <a href="#!" class="forgot-password-link">Password?</a></div>
              </form>
              <p class="login-wrapper-footer-text">Need an account? <a href="#!" class="text-reset">Signup here</a></p>
            </div>
          </div> -->
        </div>
      </div>
    </section>
</div>