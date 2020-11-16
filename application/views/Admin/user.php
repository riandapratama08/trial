<!DOCTYPE html>
<html>
<head>
  <title><?php echo SITE_NAME; ?></title>
  <?php $this->load->view('include/css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php $this->load->view('include/header') ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('include/sidebar_admin'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url('admin/tambahuser'); ?>" class="btn btn-success">Tambah User</a>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if($this->session->flashdata('sukses'))
      {
         
      }
      if($this->session->flashdata('gagal'))
      {
        echo '<div class="alert alert-danger alert-dismissible">
        <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
        '.$this->session->flashdata('gagal').'
      </div>';
      }
      ?>
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5">#</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>Tanggal Gabung</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($user as $user) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $user['email']; ?></td>
                      <td><?php echo $user['level']; ?></td>
                      <td><?php echo $user['tanggal']; ?></td>
                      <td>
                        <a href="<?php echo base_url('admin/user/edit/').$user['id']; ?>" class="label label-success">EDIT</a>
                        <a href="<?php echo base_url('admin/user/hapus/').$user['id']; ?>" class="label label-danger">HAPUS</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('include/footer'); ?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- JAVASCRIPT -->
<?php $this->load->view('include/js'); ?>
</body>
</html>
