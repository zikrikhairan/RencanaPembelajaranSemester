<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SI RPS UNAND | Daftar Mata Kuliah</title>
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
				<h1>Daftar Mata Kuliah <small>Sistem Informasi Rencana Pembelajaran Semester</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Here</li>
				</ol>
				<button type="button" class="btn btn-success" onclick="location.href='<?php echo base_url().'daftarmatkul_tambah/'?>'">Tambah Tabel</button>
							
				</section>
				<section class="content">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs pull-right">
							<li class="active"><a href="#tab_1-1" data-toggle="tab">Semester 1</a></li>
							<li><a href="#tab_2-2" data-toggle="tab">Semester 2</a></li>
							<li><a href="#tab_3-3" data-toggle="tab">Semester 3</a></li>
							<li><a href="#tab_4-4" data-toggle="tab">Semester 4</a></li>
							<li><a href="#tab_5-5" data-toggle="tab">Semester 5</a></li>
							<li><a href="#tab_6-6" data-toggle="tab">Semester 6</a></li>
							<li><a href="#tab_7-7" data-toggle="tab">Semester 7</a></li>
							<li><a href="#tab_8-8" data-toggle="tab">Semester 8</a></li>
							<li class="pull-left header"><i class="fa fa-th"></i> Semester</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1-1">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 1</h3>
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
											<?php if($c['semester'] == 1): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_2-2">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 2</h3>
										
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
											<?php if($c['semester'] == 2): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
								
							</div>
							<div class="tab-pane" id="tab_3-3">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 3</h3>
										
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
											<?php if($c['semester'] == 3): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_4-4">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 4</h3>
										
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
											<?php if($c['semester'] == 4): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_5-5">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 5</h3>
										
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
											<?php if($c['semester'] == 5): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_6-6">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 6</h3>
										
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
											<?php if($c['semester'] == 6): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_7-7">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 7</h3>
										
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
											<?php if($c['semester'] == 7): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_8-8">
								<div class="box">
									<div class="box-header">
										<h3 class="box-title">Daftar Mata Kuliah Semester 8</h3>
										
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
											<?php if($c['semester'] == 8): ?>
											<tr>
												<td><?php echo $c['kode_matkul']; ?></td>
												<td><?php echo $c['nama_matkul']; ?></td>
												<td><?php echo $c['sks']; ?></td>
												<td><?php echo $c['nama']; ?></td>
												<td><span class="label label-success">Diterima</span></td>
												<td>
													<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'cetakrps/index/'.$c['id_rps'];?>'"><i class="fa fa-print" aria-hidden="true">Cetak</i></button>
												</td>
											</tr>
											<?php endif; ?>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</section> 
				<?php include 'footer.php'; ?>       
			</div>
		</div>
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