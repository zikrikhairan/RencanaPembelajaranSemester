<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SI RPS UNAND | Isi RPS</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
        <script src="<?php echo base_url('assets/js/tinymce.min.js'); ?>"></script> 
        <script>tinymce.init({ selector:'.zzz',});</script>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php include 'header.php';?>
            <?php include 'sidebar.php';?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Isi RPS <small>Sistem Informasi Rencana Pembelajaran Semester</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">Here</li>
                    </ol>
                </section>
                <section class="content">
                <div class="box">
                    <?php foreach ($datarps as $d): ?>
                        <input name="id_rps" value="<?php echo $d['id_rps']; ?>" hidden>
                    <?php endforeach; ?>
                    <?php foreach ($rpsold as $d): ?>
                        <button type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url().'isirps_copy/copyrps/'.$d['id_rps']?>'"></button>
                    <?php endforeach; ?>
                    <div class="box-header">
                        <h3 class="box-title">2015 - 2016</h3>
                    </div>
                    
                    <form method="POST" action ="<?php echo base_url().'isirps_isi/updaterprps/'?>">
                    <div align="center">
                        
                        <input type="submit" name="btnSubmit" class="btn btn-success"></input>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <div align="center">
                            <input type="button" class="btn prev-slide" value="Prev"></input>
                            <input type="button" class="btn next-slide" value="Next"></input>
                        </div>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active" align="center">
                                    <h1>Rencana Program dan Kegiatan Pembelajaran Semester (RPKPS)</h1> 
                                    <?php foreach ($datarps as $d): ?>
                                    <h3><?php echo $d['nama_matkul']; ?></h3>
                                    <h3><?php echo $d['kode_matkul']; ?> (<?php echo $d['sks']; ?> SKS)</h3>
                                    <h3>Semester <?php echo $d['semester']; ?></h3>
                                    <?php endforeach; ?>
                                    <br><br>
                                    <h4>Pengampu Mata Kuliah</h4>
                                    <?php foreach ($dosen as $d): ?>
                                    <h4><?php echo $d['nama']; ?></h4>
                                    <?php endforeach; ?>
                                    <br><br><br><br>
                                    <h6>Jurusan Sistem Informasi</h6>
                                    <h6>Fakultas Teknologi Informasi</h6>
                                    <h6>Universitas Andalas</h6>
                                    <?php foreach ($tahun as $d): ?>
                                    <h6>Padang, <?php echo $d['tahun']; ?></h6>
                                    <?php endforeach; ?>
                                </div>
                                <div class="item" align="center">
                                    <h1>Latar Belakang</h1>
                                    <textarea class="zzz" name="latar_belakang"><?php foreach ($datarps as $d): ?><?php echo $d['latar_belakang']; ?></textarea>
                                    <input name="id_rps" value="<?php echo $d['id_rps']; ?>" hidden>
                                    <?php endforeach; ?>
                                </div>
                                <div class="item">
                                    <h1>Perencanaan Pembelajaran</h1>
                                    <table  class="table">
                                        <tr>
                                            <td width="40%"><b>Nama Mata Kuliah</b></td>
                                            <td>: <?php foreach ($datarps as $d): ?><?php echo $d['nama_matkul']; ?><?php endforeach; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><b>Kode/SKS</b></td>
                                            <td>: <?php foreach ($datarps as $d): ?> <?php echo $d['kode_matkul']; ?> / <?php echo $d['sks']; ?><?php endforeach; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="40%"><b>Mata Kuliah Prasyarat</b></td>
                                            <td>: <?php foreach ($datarps as $d): ?> - <?php endforeach; ?></td>
                                        </tr>
                                        <tr>
                                            <td wdth="40%"><b>Status Mata Kuliah</b></td>
                                            <td>: <?php foreach ($datarps as $d): ?><?php echo $d['status']; ?><?php endforeach; ?></td>
                                        </tr>
                                    </table>
                                    <span>Deskripsi Mata kuliah</span>
                                    <textarea name="deskripsi" class="form-control"><?php echo $d['deskripsi']; ?></textarea>
                                    <span>Tujuan Mata kuliah</span>
                                    <textarea name="tujuan" class="form-control"><?php echo $d['tujuan']; ?></textarea>
                                </div>
                                <div class="item">
                                        <span>Capaian Pembelajaran (Learning Outcomes = LO)</span>
                                        <textarea name="rps_capaian_pembelajaran" class="zzz"><?php foreach ($datacp as $d): ?><?php echo $d['capaian']; ?><?php endforeach; ?></textarea>
                                        <span>Pokok Bahasan</span>
                                        <textarea name="rps_pokok_bahasan" class="zzz"><?php foreach ($datarps as $d): ?><?php echo $d['pokok_bahasan']; ?><?php endforeach; ?></textarea>
                                    <div id="penilaianhasil">
                                        <span>Penilaian Hasil</span><br>
                                        <?php foreach ($datap as $d): ?>
                                            <?php 
                                                if($d['jenis']==1){
                                                    echo "<input name='idph[]' value=".$d['id']." hidden><input name='penilaianhasil_nama[]' value=".$d['nama']."><input name='penilaianhasil_persentase[]' value=".$d['persentase']."><br>";
                                                }
                                            ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <input type="button" value="Tambah Penilaian Hasil" id="tambahpenilaianhasil"><br>
                                    <div id="penilaianproses">  
                                        <span>Penilaian Proses</span><br>
                                        <?php foreach ($datap as $d): ?>
                                            <?php 
                                                if($d['jenis']==2){
                                                    echo "<input name='idpp[]' value=".$d['id']." hidden><input name='penilaianproses_nama[]' value=".$d['nama']."><input name='penilaianproses_persentase[]' value=".$d['persentase']."><br>";
                                                }
                                            ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <input type="button" value="Tambah Penilaian Proses" id="tambahpenilaianproses"><br>

                                </div>
                                <div class="item">
                                
                                    <span>Norma Akademik</span>
                                    <textarea name="norma_akademik" class="zzz"><?php foreach ($datana as $d): ?><?php echo $d['norma']; ?><?php endforeach; ?></textarea>
                                    <span>Bahan, sumber informasi, dan referensi</span>
                                    <textarea name="referensi" class="zzz"><?php foreach ($datar as $d): ?><?php echo $d['referensi']; ?><?php endforeach; ?></textarea>
                                </div>
                                <div class="item">
                                    <h1>HALAMAN 5</h1>
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
                                        <?php foreach ($datarprps as $c): ?>
                                                <tr>
                                                    <td><input name="id[]" value="<?php echo $c['id']; ?>" hidden="true"></td>
                                                    <td><span>Minggu <?php echo $c['minggu_ke']; ?></span></td>
                                                    <td><textarea class="form-control" rows="6" name="capaian_pembelajaran[]"><?php echo $c['capaian_pembelajaran']; ?></textarea></td>
                                                    <td><textarea class="form-control"  rows="6" name="pokok_bahasan[]"><?php echo $c['pokok_bahasan']; ?></textarea></td>
                                                    <td><textarea class="form-control"  rows="6" name="sub_pokok_bahasan[]"><?php echo $c['sub_pokok_bahasan']; ?></textarea></td>
                                                    <td><textarea class="form-control"  rows="6" name="metode_pembelajaran[]"><?php echo $c['metode_pembelajaran']; ?></textarea></td>
                                                    <td><textarea class="form-control"  rows="6" name="yang_dilakukan_mahasiswa[]"><?php echo $c['yang_dilakukan_mahasiswa']; ?></textarea></td>
                                                    <td><textarea class="form-control"  rows="6" name="yang_dilakukan_dosen[]"><?php echo $c['yang_dilakukan_dosen']; ?></textarea></td><br>   
                                                </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            <input type="button" class="btn prev-slide" value="Prev"></input>
                            <input type="button" class="btn next-slide" value="Next"></input>
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
        
        <script type="text/javascript">$('.carousel').carousel({
            interval:false
        }); </script>
        <script type="text/javascript">
            $(".prev-slide").click(function(){
                $("#myCarousel").carousel('prev');
            });
            $(".next-slide").click(function(){
                $("#myCarousel").carousel('next');
            });
            $("#tambahpenilaianhasil").click(function(){
                $("<input>",{
                    name:"penilaianhasil_namabaru[]"
                }).appendTo("#penilaianhasil");
                $("<input>",{
                    name:"penilaianhasil_persentasebaru[]"
                }).appendTo("#penilaianhasil");
                $("<br>",{}).appendTo("#penilaianhasil");
            });
            $("#tambahpenilaianproses").click(function(){
                $("<input>",{
                    name:"penilaianproses_namabaru[]"
                }).appendTo("#penilaianproses");
                $("<input>",{
                    name:"penilaianproses_persentasebaru[]"
                }).appendTo("#penilaianproses");
                $("<br>",{}).appendTo("#penilaianproses");
            });
        </script>
    </body>
</html>