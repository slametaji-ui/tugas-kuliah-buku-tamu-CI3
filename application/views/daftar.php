<!DOCTYPE html>
<html>

<head>
    <title>Guest Book | Sign Up</title>
    <?php $this->load->view('css.php'); ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../assets/index2.html"><b>Guest Book</b> <br>STT Bandung</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg"><b>Ayo Bergabung</b></p>
            <form action="http://localhost/bukutamu/index.php/website/daftarin" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="email" placeholder="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <?php if ($this->input->get('notif') == 'gagal') { ?>
                    <div class="alert alert-danger">Pendaftaran <b>Gagal...!!!</b> <br>Pastikan Data yang anda masukan Benar</div>
                <?php } ?>
                <?php if ($this->input->get('notif') == 'berhasil') { ?>
                    <div class="alert alert-success">Pendaftaran <b>Berhasil</b><br>Selamat Bergabung</div>
                <?php } ?>
                <div class="row">
                
                    <div class="col-xs-6">
                        <a href="<?php echo base_url('/index.php/website/login');?>"class="btn btn-warning btn-block btn-flat">Sudah Punya Akun</a>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                    </div>
                 
                </div>
            </form>
        </div>
    </div>
    <?php $this->load->view('/js.php'); ?>

</body>

</html>