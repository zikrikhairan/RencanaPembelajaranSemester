<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SI RPS UNAND | Cetak RPS</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<style type="text/css">
			page[size="A4"]{
				background: white;
				width:21cm;
				height: 29.7cm;
				display: block;
			}
			@media print{
				body, page[size="A4"]{
					margin: 0;
					box-shadow: 0;
				}
				page[size="AV"] {size: landscape}
			}
			table{
				border-collapse: collapse;
			}
			table, th, td{
				border: 1px solid black;
			}
		</style>
		<style type="text/css" media="print">
		    .pagerp { 
		        size: landscape;
		    }
		    page { 
		        writing-mode: tb-rl;
		    }
		</style>	
	</head>
	<body>
		<div class="page" style="page-break-after:always">
			<div align="center">
				<br><br>
				<h1>Rencana Program Kegiatan</h1>
				<h1>Pembelajaran Semester</h1>
				<h1>(RPKPS)</h1><br><br><br><br>
			</div><br>
			<div align="center">
				<?php foreach ($rps as $d): ?>
	            <h3><?php echo $d['nama_matkul']; ?></h3>
	            <h3><?php echo $d['kode_matkul']; ?> (<?php echo $d['sks']; ?> SKS)</h3>
	            <h3>Semester <?php echo $d['semester']; ?></h3>
	            <?php endforeach; ?>
	            <br><br><br><br><br>
	            <h3>Pengampu Mata Kuliah</h3>
	            <?php foreach ($rps as $d): ?>
	            <h3><?php echo $d['nama']; ?></h3>
	            <?php endforeach; ?>
	            <br><br><br><br><br><br>
	            <h3>Jurusan Sistem Informasi</h3>
	            <h3>Fakultas Teknologi Informasi</h3>
	            <h3>Universitas Andalas</h3>
	            <?php foreach ($rps as $d): ?>
	            <h3>Padang, <?php echo $d['tahun']; ?></h3>
	            <?php endforeach; ?>
			</div>
		</div>
		<div class="page" style="page-break-after:always">
			<div class="page-header">
				<h3>Latar Belakang</h3>
			</div>
			<div>
				<span><?php echo $rps[0]['latar_belakang'];?></span>
			</div>
			<div class="page-header">
				<h3>Latar Belakang</h3>
			</div>
			<div>
				<span><?php echo $rps[0]['latar_belakang'];?></span>
			</div>
		</div>
		<page size="A4">
			<h1>GAGAGAGGAGAGAG</h1>
			<table  id="pagerp">
				<tr>
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
	                    <td><span>Minggu <?php echo $rp[$i]['minggu_ke']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['capaian_pembelajaran']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['pokok_bahasan']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['sub_pokok_bahasan']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['metode_pembelajaran']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['yang_dilakukan_mahasiswa']; ?></span></td>
	                    <td><span><?php echo $rp[$i]['yang_dilakukan_dosen']; ?></span></td><br>   
	                </tr>
		            <?php endfor ?>
			</table>
		</page>
		<page size="A4">
			<h1>GAGAGAGGAGAGAG</h1>
		</page>
		<page size="A4">
			<h1>GAGAGAGGAGAGAG</h1>
		</page>
		
		<script type="text/javascript">
			window.onload=function(){
			    window.print();
			};
		</script>
	</body>
</html>