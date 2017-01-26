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
						</div>
						<div class="box-body table-responsive no-padding">
							<div align="center">
								<table class="table table-hover">
									<tr colspan=2 >
			                            <?php foreach ($rps as $d): ?>
			                            <h3><?php echo $d['nama_matkul']; ?></h3>
			                            <h3><?php echo $d['kode_matkul']; ?> (<?php echo $d['sks']; ?> SKS)</h3>
			                            <h3>Semester <?php echo $d['semester']; ?></h3>
			                            <?php endforeach; ?>
			                            <br><br>
			                            <h4>Pengampu Mata Kuliah</h4>
			                            <?php foreach ($rps as $d): ?>
			                            <h4><?php echo $d['nama']; ?></h4>
			                            <?php endforeach; ?>
			                            <br><br><br><br>
			                            <h6>Jurusan Sistem Informasi</h6>
			                            <h6>Fakultas Teknologi Informasi</h6>
			                            <h6>Universitas Andalas</h6>
			                            <?php foreach ($rps as $d): ?>
			                            <h6>Padang, <?php echo $d['tahun']; ?></h6>
			                            <?php endforeach; ?>
									</tr>
									<tr>
										<td><h3>Latar Belakang</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $rps[0]['latar_belakang'];?>
										</span></td>
										<td><span>
											<?php if($rps2!=""):?>
												<?php foreach ($rps2 as $d): ?>
													<?php echo $d['latar_belakang'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Deskripsi</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $rps[0]['deskripsi'];?>
										</span></td>
										<td><span>
											<?php if($rps2!=""):?>
												<?php foreach ($rps2 as $d): ?>
													<?php echo $d['deskripsi'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Tujuan</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $rps[0]['tujuan'];?>
										</span></td>
										<td><span>
											<?php if($rps2!=""):?>
												<?php foreach ($rps2 as $d): ?>
													<?php echo $d['tujuan'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Capaian Pembelajaran</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $cp[0]['capaian'];?>
										</span></td>
										<td><span>
											<?php if($cp2!=""):?>
												<?php foreach ($cp2 as $d): ?>
													<?php echo $d['capaian'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Pokok Bahasan</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $rps[0]['pokok_bahasan'];?>
										</span></td>
										<td><span>
											<?php if($rps2!=""):?>
												<?php foreach ($rps2 as $d): ?>
													<?php echo $d['pokok_bahasan'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Penilaian</h3></td>
										<td></td>
									</tr>
									<tr>
		                                <td>
		                                    <span>Penilaian Hasil</span><br>
		                                    <?php foreach ($p as $d): ?>
		                                        <?php 
		                                            if($d['jenis']==1){
		                                                echo "<input name=idph[] value=".$d['id']." hidden><input name='penilaianhasil_nama[]' value=".$d['nama']."><input name='penilaianhasil_persentase[]' value=".$d['persentase']."><br>";
		                                            }
		                                        ?>
		                                    <?php endforeach; ?>
		                                    <span>Penilaian Proses</span><br>
		                                    <?php foreach ($p as $d): ?>
		                                        <?php 
		                                            if($d['jenis']==2){
		                                                echo "<input name=idpp[] value=".$d['id']." hidden><input name='penilaianproses_nama[]' value=".$d['nama']."><input name='penilaianproses_persentase[]' value=".$d['persentase']."><br>";
		                                            }
		                                        ?>
		                                    <?php endforeach; ?>
		                                </td>
		                                <td>
		                                	<span>Penilaian Hasil</span><br>
		                                	<?php if($p2!=""):?>
			                                    <?php foreach ($p2 as $d): ?>
			                                        <?php 
			                                            if($d['jenis']==1){
			                                                echo "<input name=idph[] value=".$d['id']." hidden><input name='penilaianhasil_nama[]' value=".$d['nama']."><input name='penilaianhasil_persentase[]' value=".$d['persentase']."><br>";
			                                            }
			                                        ?>
			                                    <?php endforeach; ?>
			                            	<?php endif;?>
		                                    <span>Penilaian Proses</span><br>
		                                    <?php if($p2!=""):?>
			                                    <?php foreach ($p2 as $d): ?>
			                                        <?php 
			                                            if($d['jenis']==2){
			                                                echo "<input name=idpp[] value=".$d['id']." hidden><input name='penilaianproses_nama[]' value=".$d['nama']."><input name='penilaianproses_persentase[]' value=".$d['persentase']."><br>";
			                                            }
			                                        ?>
			                                    <?php endforeach; ?>
			                            	<?php endif;?>
		                                </td>
		                                <td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Norma Akademik</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $na[0]['norma'];?>
										</span></td>
										<td><span>
											<?php if($na2!=""):?>
												<?php foreach ($na2 as $d): ?>
													<?php echo $d['norma'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
									<tr>
										<td><h3>Buku, sumber informasi dan referensi</h3></td>
										<td></td>
									</tr>
									<tr>
										<td><span>
											<?php echo $r[0]['referensi'];?>
										</span></td>
										<td><span>
											<?php if($r2!=""):?>
												<?php foreach ($r2 as $d): ?>
													<?php echo $d['referensi'];?>
				                            	<?php endforeach; ?>
			                            	<?php endif;?>
										</span></td>
										<td><input type="checkbox"></td>
									</tr>
								</table>
								<div>
									<div align="center"><input type="checkbox"></div>
									<h3>Rencana Pembelajaran</h3>
									<table>
                                        <tr>
                                            <th></th>
                                            <th>Minggu ke-</th>
                                            <th>Capaian</th>
                                            <th>Pokok Bahasan</th>
                                            <th>Sub Pokok Bahasan</th>
                                            <th>Metode Pembelajaran</th>
                                            <th>yang Dilakukan Mahasiswa</th>
                                            <th>Yang Dilakukan Dosen</th>
                                        </tr>
                                        <?php for ($i=0; $i<count($rp); $i++): ?>
                                        	 <tr>
                                                <td><input name="id[]" value="<?php echo $rp[$i]['id']; ?>" hidden="true"></td>
                                                <td><span>Minggu <?php echo $rp[$i]['minggu_ke']; ?></span></td>
                                                <td><textarea class="form-control" rows="6" name="capaian_pembelajaran[]"><?php echo $rp[$i]['capaian_pembelajaran']; ?></textarea></td>
                                                <td><textarea class="form-control"  rows="6" name="pokok_bahasan[]"><?php echo $rp[$i]['pokok_bahasan']; ?></textarea></td>
                                                <td><textarea class="form-control"  rows="6" name="sub_pokok_bahasan[]"><?php echo $rp[$i]['sub_pokok_bahasan']; ?></textarea></td>
                                                <td><textarea class="form-control"  rows="6" name="metode_pembelajaran[]"><?php echo $rp[$i]['metode_pembelajaran']; ?></textarea></td>
                                                <td><textarea class="form-control"  rows="6" name="yang_dilakukan_mahasiswa[]"><?php echo $rp[$i]['yang_dilakukan_mahasiswa']; ?></textarea></td>
                                                <td><textarea class="form-control"  rows="6" name="yang_dilakukan_dosen[]"><?php echo $rp[$i]['yang_dilakukan_dosen']; ?></textarea></td><br>   
                                            </tr>
                                            <?php if($rp2!=""):?>
	                                            <tr>
	                                                <td><input name="id[]" value="<?php echo $rp2[$i]['id']; ?>" hidden="true"></td>
	                                                <td><span>Minggu <?php echo $rp2[$i]['minggu_ke']; ?> RPS Banding</span></td>
	                                                <td><textarea class="form-control" rows="6" name="capaian_pembelajaran[]"><?php echo $rp2[$i]['capaian_pembelajaran']; ?></textarea></td>
	                                                <td><textarea class="form-control"  rows="6" name="pokok_bahasan[]"><?php echo $rp2[$i]['pokok_bahasan']; ?></textarea></td>
	                                                <td><textarea class="form-control"  rows="6" name="sub_pokok_bahasan[]"><?php echo $rp2[$i]['sub_pokok_bahasan']; ?></textarea></td>
	                                                <td><textarea class="form-control"  rows="6" name="metode_pembelajaran[]"><?php echo $rp2[$i]['metode_pembelajaran']; ?></textarea></td>
	                                                <td><textarea class="form-control"  rows="6" name="yang_dilakukan_mahasiswa[]"><?php echo $rp2[$i]['yang_dilakukan_mahasiswa']; ?></textarea></td>
	                                                <td><textarea class="form-control"  rows="6" name="yang_dilakukan_dosen[]"><?php echo $rp2[$i]['yang_dilakukan_dosen']; ?></textarea></td><br>   
	                                            </tr>
			                            	<?php endif;?>
                                        <?php endfor ?>
                                    </table>
								</div>
							</div>
						</div>
						<div align="center">
							<br>
							<?php foreach ($rps
							 as $d): ?>
								<button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'periksarps_prps/periksabanding/'.$d['id_rps']?>'">Bandingkan dengan RPS Sebelumnya</button>
							<?php endforeach; ?>
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