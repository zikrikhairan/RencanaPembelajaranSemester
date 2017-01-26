<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SI RPS UNAND | Periksa RPS</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="<?php echo base_url('assets/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Morris chart -->
		<link href="<?php echo base_url('assets/js/plugins/morris/morris.css'); ?>" rel="stylesheet">
		<!-- jvectormap -->
		<link href="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Daterange picker -->
		<link href="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>" rel="stylesheet" type="text/css" />
	</head>
	<body class="skin-green">
		<div class="wrapper">
			<?php include 'header.php';?>
			<?php include 'sidebar.php';?>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>Periksa RPS <small>Sistem Informasi Rencana Pembelajaran Semester</small></h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li class="active">Here</li>
					</ol>
				</section>
				<section class="content">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Silakan melakukan pemeriksaan dan memberikan persetujuan terhadap RPS yang diajukan dosen!</h3>
							<div class="box-tools">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
								</div>
							</div>
						</div>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tr>
									<th>Kode MK</th>
									<th>Nama Mata Kuliah</th>
									<th>SKS</th>
									<th>Dosen</th>
									<th>Status</th>
									<th>Aplikasi</th>
								</tr>
								<?php foreach($rps as $c): ?>
								<tr>
									<td><?php echo $c['kode_matkul']; ?></td>
									<td><?php echo $c['nama_matkul']; ?></td>
									<td><?php echo $c['sks']; ?></td>
									<td><?php echo $c['nama']; ?></td>
									<td><span class="label label-success"></span></td>
									<td><button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'periksarps_prps/periksa/'.$c['id_rps'];?>'">Periksa</button>
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>

				</section>
				<?php include 'footer.php'; ?>
			</div>
		</div><!-- ./wrapper -->

		<!-- jQuery 2.1.3 -->
		<script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url('assets/js/plugins/fastclick/fastclick.min.js'); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url('assets/js/AdminLTE/app.min.js'); ?>" type="text/javascript"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
		<!-- jvectormap -->
		<script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
		<!-- daterangepicker -->
		<script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js'); ?>" type="text/javascript"></script>
		<!-- datepicker -->
		<script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="<?php echo base_url('assets/js/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="<?php echo base_url('assets/js/plugins/chartjs/Chart.min.js'); ?>" type="text/javascript"></script>

		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url('assets/js/AdminLTE/dashboard2.js'); ?>" type="text/javascript"></script>

		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url('assets/js/AdminLTE/demo.js'); ?>"></script> 
	</body>
</html>