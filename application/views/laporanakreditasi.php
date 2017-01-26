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
                    <h1>Laporan Akreditasi <small>Sistem Informasi Rencana Pembelajaran Semester</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">Here</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table border="1" class="table table-hover">
                                <tr border="1">
                                    <th rowspan="2">SMT</th>
                                    <th rowspan="2">Kode MK</th>
                                    <th rowspan="2">Nama Mata Kuliah</th>
                                    <th rowspan="2">Bobot SKS</th>
                                    <th colspan="2">SKS MK dalam Kurikulum</th>
                                    <th rowspan="2">Bobot tugas</th>
                                    <th colspan="3">Kelengkapan****</th>
                                    <th rowspan="2">Unit/Jur/Fak Penyelenggara</th>
                                </tr>
                                <tr>
                                    <th>Inti**</th>
                                    <th>Institusional</th>
                                    <th>Deskripsi</th>
                                    <th>Silabus</th>
                                    <th>SAP</th>
                                </tr>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester1)): ?>
                                        <td rowspan="<?php echo count($semester1) ?>">1</td>
                                            <?php foreach ($semester1 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester2)): ?>
                                        <td rowspan="<?php echo count($semester2) ?>">2</td>
                                            <?php foreach ($semester2 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <?php if(!empty($semester3)): ?>
                                    <td rowspan="<?php echo count($semester3)+1 ?>">3</td>
                                        <?php foreach ($semester3 as $d): ?>
                                            <tr>
                                            <td><?php echo $d['kode_matkul']; ?></td>
                                            <td><?php echo $d['nama_matkul']; ?></td>
                                            <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                            <td>v</td>
                                            <td>v</td>
                                            <td>v</td>
                                            <td>v</td>
                                            <td>v</td>
                                            <td>v</td>   
                                            <td>Sistem Informasi</td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </tbody>
                                <tbody>
                                    <?php if(!empty($semester4)): ?>
                                        <td rowspan="<?php echo count(($semester4))+1 ?>">4</td>
                                            <?php foreach ($semester4 as $d): ?>
                                                <tr>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                         
                                </tbody>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester5)): ?>
                                        <td rowspan="<?php echo count($semester5) ?>"></td>
                                            <?php foreach ($semester5 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>     
                                </tbody>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester6)): ?>
                                        <td rowspan="<?php echo count($semester6) ?>"></td>
                                            <?php foreach ($semester6 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>     
                                </tbody>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester7)): ?>
                                        <td rowspan="<?php echo count($semester7) ?>"></td>
                                            <?php foreach ($semester7 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>     
                                </tbody>
                                <tbody>
                                    <tr>
                                        <?php if(!empty($semester8)): ?>
                                        <td rowspan="<?php echo count($semester8) ?>"></td>
                                            <?php foreach ($semester8 as $d): ?>
                                                <td><?php echo $d['kode_matkul']; ?></td>
                                                <td><?php echo $d['nama_matkul']; ?></td>
                                                <td><?php echo $d['sks']; ?> (<?php echo $d['bobot']; ?> SKS)</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>
                                                <td>v</td>   
                                                <td>Sistem Informasi</td>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </tr>     
                                </tbody>                  
                            </table>
                        </div>
                    </div>
                </section>
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