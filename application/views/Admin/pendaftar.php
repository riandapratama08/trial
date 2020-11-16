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
      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if ($this->session->flashdata('sukses')) {
          echo '<script>alert(`' . $this->session->flashdata('sukses') . '`);</script>';
        }
        ?>
        <!-- Main row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="box box-solid box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Pendaftar Siswa/Mahasiswa Magang</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="5">#</th>
                        <th>Nomor Surat</th>
                        <th>Nama</th>
                        <th>Asal Universitas</th>
                        <th>jurusan</th>
                        <th>Tanggal Magang</th>
                        <th>Lama Magang</th>
                        <th>Status</th>
                        <th>Surat Balasan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($pendaftar as $row) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['nomor_surat']; ?></td>
                          <td><?php echo $row['nama']; ?></td>
                          <td><?php echo $row['asal']; ?></td>
                          <td><?php echo $row['jurusan']; ?></td>
                          <td><?php echo $row['tanggal_magang']; ?></td>
                          <td><?php echo $row['lama_magang']; ?></td>
                          <td><?php echo $row['status']; ?></td>
                          <td><?php echo $row['surat_balasan']; ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/detailpendaftaran/') . $row['nomor_surat']; ?>" class="btn btn-primary"><i class="fa fa-search-plus"></i></a>

                            <a href="<?php echo base_url('admin/daftarhapus/') . $row['nomor_surat']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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