<!DOCTYPE html>
<html>

<head>
    <title>Guest Book STTB | Log in</title>
    <?php $this->load->view('css.php'); ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../assets/index2.html"><b>Guest Book</b> <br>STT Bandung</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Silahkan Masuk</p>
            <form action="http://localhost/bukutamu/index.php/website/cek_login" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <?php if (
                    $this->input->get('notif') == 'gagal'
                ) { ?>
                    <div class="alert alert-danger"><b>GAGAL</b>Username atau Password Salah!</div>
                <?php } ?>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                Belum Punya Akun?<a href="http://localhost/bukutamu/index.php/website/signup"> Daftar</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php $this->load->view('/js.php'); ?>

</body>

</html>