<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SI RPS UNAND | Arsip RPS</title>
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

<?php 
include 'header.php';
?>

<?php 
include 'sidebar.php';
?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
            <section class="content-header">
              <h1>
                Arsip RPS <small>Sistem Informasi Rencana Pembelajaran Semester</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Here</li>
              </ol>
            </section>
                <section class="content">
            
                <div class="btn-group" style="margin-bottom: 10px;">
                  <button type="button" class="btn btn-success">Periode RPS</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">2014 - 2015</a></li>
                    <li><a href="#">2013 - 2014</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Tambahkan</a></li>
                  </ul>
                </div>

            <div class="box">
            <div class="box-header">
              <h3 class="box-title">2014 - 2015</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Kode MK</th>
                  <th>Nama Mata Kuliah</th>
                  <th>SKS</th>
                  <th>Dosen</th>
                  <th>Semester</th>
                  <th>Tampilkan</th>
                </tr>
                <tr>
                  <td>EKM 101</td>
                  <td>Pengetahuan Bisnis</td>
                  <td>3(3-0)</td>
                  <td>Ricky Akbar, MT</td>
                  <th>Semester 1</th>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-success">Tampilkan</button>
                    </div></td>
                </tr>
                <tr>
                  <td>EKM 103</td>
                  <td>Pengantar Manajemen</td>
                  <td>3(3-0)</td>
                  <td>Prof. Dr. Alizar Hasan, MT</td>
                  <th>Semester 1</th>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-success">Tampilkan</button>
                    </div></td>
                </tr>
                <tr>
                  <td>HKU 110</td>
                  <td>Pendidikan Agama</td>
                  <td>3(3-0)</td>
                  <td>Halim, M. Ag.</td>
                  <th>Semester 1</th>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-success">Tampilkan</button>
                    </div></td>
                </tr>
                <tr>
                  <td>PAM 111</td>
                  <td>Aljabar Linear</td>
                  <td>3(3-0)</td>
                  <td>Darwison, MT</td>
                  <th>Semester 1</th>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-success">Tampilkan</button>
                    </div></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

                </section>
            <section class="footer">
                <p class="footer" align="right">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
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