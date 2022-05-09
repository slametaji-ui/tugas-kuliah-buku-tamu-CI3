<!DOCTYPE html>
<html>

<head>
	<title>Buku Tamu STT Bandung</title>
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

			<section class="content container-fluid" style="min-height: 1px;">
				<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-user"></i>
						<h3 class="box-title">Selamat Datang</h3>
						<div class="box-tools pull-right" data-toggle="tooltip" title="Status">
						</div>
						<div class="box-body">
							<div>
								<p class="row">
									<span class="col-md-2 col-sm-3 col-xs-12">Nama</span>
									<span class="col-md-10 col-sm-9 col-xs-12">: <b class="text-darkblue"><?= $this->session->userdata('nama'); ?></b></span>
								</p>
								<p class="row">
									<span class="col-md-2 col-sm-3 col-xs-12">Waktu</span>
									<span class="col-md-10 col-sm-9 col-xs-12">: <b class="text-darkblue"><?php $date = new DateTime(''); echo $date->format('l, d F Y H:i:s'); ?></b></span>
								</p>
							</div>
			</section>

			<section class="content container-fluid" style="min-height: 1px;">
				<div class="">
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