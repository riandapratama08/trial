<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header" style="color: #fff;"><?php echo $this->session->userdata('email'); ?></li>
    <li><a href="<?php echo base_url('umum/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="<?php echo base_url('umum/pendaftaran'); ?>"><i class="fa fa-dashboard"></i> <span>Data Pendaftar</span></a></li>
    <li><a href="<?php echo base_url('umum/pendaftaran'); ?>"><i class="fa fa-dashboard"></i> <span>Data Pengumuman</span></a></li>
    <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
  </ul>
</section>
<!-- /.sidebar -->