<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SI RPS UNAND | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">  
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">        
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet"> 

    </head>
    <body class="login-page">
        <div class="login-box">
            <div>
                <a href="#" >
                <table>
                    <td colspan=3><img src="assets/img/login.png" width="360"></td>
                </table>
            </div>
            <div class="login-box-body">
                <form action="<?php echo site_url('login/proses'); ?>" method="post">
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Peringatan!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } ?>
                    <div class="login-logo" align="left">
                        <b>Login</b>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="NIM / NIP"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Kata Sandi"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div>
                        <table width="100%">
                            <tr>
                                <td width="40%"><input type="checkbox"> remember me</td>
                                <td width="60%" align="right"><a href="dashboard">forgot your account</a></td>
                            </tr>
                        </table>
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </form>                
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script> 
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>       
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>