<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SI RPS UNAND | Daftar Dosen</title>
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
    <body class="skin-blue">
        <div class="wrapper">

            <header class="main-header">
                <a href="dashboard" class="logo" align="right" style="text-align: right;"><b>Sistem Informasi</b></a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="dashboard" class="logo" align="left" style="text-align: left;"><b>RPS</b></a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                                    <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" class="user-image" alt="User Image"/>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $this->session->userdata('nama'); ?> / <?php echo $this->session->userdata('role'); ?>
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                 <a href="<?php echo site_url('dashboard/logout'); ?>" class="btn btn-info btn-flat">Sign out</a>
                            </li>
                        </ul>
                    </div>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="treeview">
                            <a href="dashboard">
                                <i class="fa fa-dashboard"></i><span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="arsip">
                                <i class="fa fa-files-o" ></i><span>Arsip RPS</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="daftarmatkul">
                                <i class="fa fa-files-o"></i><span>Daftar Mata Kuliah</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="daftardosen">
                                <i class="fa fa-files-o"></i><span>Daftar Dosen</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="daftarrps">
                                <i class="fa fa-files-o"></i><span>Daftar RPS</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="isirps">
                                <i class="fa fa-edit"></i> <span>Isi RPS</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="periksarps">
                                <i class="fa fa-edit"></i> <span>Periksa RPS</span>
                            </a>
                        </li>
                        <li>
                            <a href="laporanakreditasi">
                                <i class="fa fa-book"></i>Laporan Akreditasi
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
                <div class="login-logo">
                    Selamat Datang di Sistem Informasi <br> Rencana Pembelajaran Semester <br> Universitas Andalas <br>
                    <img src="../assets/img/unand2.png" width="30%" height="30%">
                </div>
                <footer>
                <p class="footer" align="right">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </footer>
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