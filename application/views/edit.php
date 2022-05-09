<!DOCTYPE html>
<html>

<head>
    <title>Isi Buku Tamu STT Bandung</title>
    <?php $this->load->view('/css.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('/header.php'); ?>
        </header>

        <aside class="main-sidebar">
            <?php $this->load->view('/sidebar.php'); ?>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small><?php echo $judul; ?></small>
                </h1>
                <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> <?= $this->session->userdata('username'); ?></a></li>
                    <li class="active">Control Panel</li>
                </ol>
            </section>
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Notifikasi -->
                        <?php
                        $sukses = $this->session->flashdata('sukses');
                        if ($sukses != "") {
                        ?>
                            <div id="notifikasi" class="callout callout-success">
                                <h4>Sukses</h4>
                                <p><?php echo $sukses; ?></p>
                            </div>
                        <?php } ?>

                        <?php
                        $error = $this->session->flashdata('error');
                        if ($error != "") {
                        ?>
                            <div id="notifikasi" class="callout callout-danger">
                                <h4>Error</h4>
                                <p><?php echo $error; ?></p>
                            </div>
                        <?php } ?>
                        <!-- End Notifikasi -->
                    </div>
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $judul; ?></h3>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $v->nama;?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $v->email;?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat"value=" <?php echo $v->alamat;?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kota</label>
                                            <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $v->kota;?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pesan</label>
                                            <textarea class="form-control" name="pesan" placeholder="Pesan" value="<?php echo $v->pesan;?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary btn-md">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Page rendered in <strong>0.0130</strong> seconds.
            </div>
            <strong>Copyright &copy; 2020 <a href="">Diani Maulina</a>.</strong>
        </footer>

    </div>

    <?php $this->load->view('/js.php'); ?>
</body>

</html>