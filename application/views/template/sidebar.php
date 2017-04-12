<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar3.png') ?>" class="img-responsive" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Super Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
           
            <li class="<?php echo active_link('/menu/transaksi');?>">
                <a href="<?php echo site_url('menu/transaksi')?>">
                    <i class="fa fa-calendar"></i> <span>Transaksi</span> <i class="fa fa-caret-square-o-right pull-right"></i>
                </a>
            </li>
              <li class="<?php echo active_link('/menu/penyaluran');?>">
                <a href="<?php echo site_url('menu/penyaluran')?>">
                    <i class="fa fa-refresh"></i> <span>Penyaluran</span> <i class="fa fa-caret-square-o-right pull-right"></i>
                </a>
            </li>
            <li class="<?php echo active_link('/menu/laporan');?>">
                <a href="<?php echo site_url('menu/laporan')?>">
                    <i class="fa fa-history"></i> <span>Laporan</span> <i class="fa fa-caret-square-o-right pull-right"></i>
                </a>
            </li>
            <li class="<?php echo active_link('/menu/masterdata');?>">
                <a href="<?php echo site_url('menu/masterdata')?>">
                    <i class="fa fa-inbox"></i> <span>Master Data</span> <i class="fa fa-caret-square-o-right pull-right"></i>
                </a>
            </li>
             <li class="<?php echo active_link('/menu/users');?>">
                <a href="<?php echo site_url('menu/users')?>">
                    <i class="fa fa-key"></i> <span>Management Akun</span> <i class="fa fa-caret-square-o-right pull-right"></i>
                </a>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
