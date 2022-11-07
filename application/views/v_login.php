
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>template/back_end/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>template/back_end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>template/back_end/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>MUTIA </b> ZAYYANAH</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Masuk Terlebihdahulu</p>

      <?php
                           echo form_open('login');

                           if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                            
                            
                           }


                           ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success">Login</button>
                                    <a class="btn btn-primary" href="<?= base_url()?>">Website</a>
                                    </div>
                                </fieldset>
                            <? echo 
                            form_close();?>
                            
                        </div>

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url(); ?>template/back_end/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>template/back_end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>template/back_end/dist/js/adminlte.min.js"></script>
</body>
</html>
