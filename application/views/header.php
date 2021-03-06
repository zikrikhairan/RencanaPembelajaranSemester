  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>R</b>PS</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Sistem Informasi <b>RPS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('assets/img/unand2.png'); ?>" class="user-image" alt="User Image"/>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?>  &nbsp;&nbsp;&nbsp;<i class="fa fa-sort-down"></i> </span></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('assets/img/unand2.png'); ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $this->session->userdata('nama'); ?> / <?php echo $this->session->userdata('role'); ?>
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
<?php
if($this->session->userdata['role'] == "Administrator")
{
    echo 'Menu Administrator'; // if you are 'Administrator'
} else if ($this->session->userdata['role'] == "Dosen")
{
    echo 'Menu Dosen'; // if you are 'Dosen'
} else if ($this->session->userdata['role'] == "Mahasiswa")
{
    echo 'Menu Mahasiswa'; // if you are 'Mahasiswa'
} else
{
  echo 'Menu Pejabat'; // if you are 'Pejabat'
}
?>
                                    </li>
          </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- Sisi kiri dari dropdown menu -->
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>