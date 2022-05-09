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
                    <small><?php echo $headtitle; ?></small>
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
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $headtitle; ?></h3>
                            </div>
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-nowrap">Nama</th>
                                            <th class="text-nowrap">Email</th>
                                            <th class="text-nowrap">Alamat</th>
                                            <th class="text-nowrap">Kota</th>
                                            <th class="text-nowrap">Pesan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($isi as $data) :
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data->nama; ?></td>
                                                <td><?php echo $data->email; ?></td>
                                                <td><?php echo $data->alamat; ?></td>
                                                <td><?php echo $data->kota; ?></td>
                                                <td><?php echo $data->pesan; ?></a></td>
                                                <td class="text-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-update<?php echo $data->id; ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete<?php echo $data->id; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <?php
                    foreach ($isi as $data) :
                    ?>
                        <div class="modal fade" id="modal-delete<?php echo $data->id; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Hapus <?php echo $headtitle; ?></h4>
                                    </div>
                                    <form action="<?php echo base_url('/index.php/website/hapus/') . $data->id; ?>" method="post">
                                        <div class="modal-body">
                                            Hapus <b><?php echo $data->nama; ?></b> dari <?php echo $headtitle; ?> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php
                    foreach ($isi as $data) :
                    ?>
                        <div class="modal fade" id="modal-update<?php echo $data->id; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Hapus <?php echo $headtitle; ?></h4>
                                    </div>
                                    <form action="<?php echo base_url('/index.php/website/ubah/') . $data->id; ?>" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data->nama; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>email</label>
                                                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $data->email; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value=" <?php echo $data->alamat; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kota</label>
                                                    <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo $data->kota; ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Pesan</label>
                                                    <textarea class="form-control" name="pesan" placeholder="Pesan" <?php echo $data->pesan;?>></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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