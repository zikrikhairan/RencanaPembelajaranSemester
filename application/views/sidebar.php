<?php
if($this->session->userdata['role'] == "Administrator")
{
    echo '

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="active">
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
                                <i class="fa fa-files-o"></i><span>Daftar Mata Kuliah, Dosen, RPS</span>
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

    '; // if you are 'Administrator'
} else if ($this->session->userdata['role'] == "Dosen")
{
    echo '

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="active">
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
                                <i class="fa fa-files-o"></i><span>Daftar Mata Kuliah, Dosen, RPS</span>
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
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

    '; // if you are 'Dosen'
} else if ($this->session->userdata['role'] == "Mahasiswa")
{
    echo '

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="active">
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
                            <a href="daftarrps">
                                <i class="fa fa-files-o"></i><span>Daftar Mata Kuliah, Dosen, RPS</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

    '; // if you are 'Mahasiswa'
} else {

        echo '

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="active">
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
                                <i class="fa fa-files-o"></i><span>Daftar Mata Kuliah, Dosen, RPS</span>
                                </a>
                        </li>
                        <li class="treeview">
                            <a href="periksarps">
                                <i class="fa fa-edit"></i> <span>Periksa RPS</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside> 
';
 }
?>

