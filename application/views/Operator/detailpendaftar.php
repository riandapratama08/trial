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
      <?php $this->load->view('include/sidebar_Operator'); ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if ($this->session->flashdata('sukses')) {
          echo '<script>alert("Terima Kasih telah Melakukan Pendaftaran");</script>';
        }
        ?>

        <!-- Main row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="box box-solid box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Pendaftar Siswa/Mahasiswa Magang <b><?php echo $detail['nama']; ?></b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <td><?php echo $detail['nama']; ?></td>
                      </tr>
                      <tr>
                        <th>TTL</th>
                        <td><?php echo $detail['ttl']; ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $detail['jeniskelamin']; ?></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php echo $detail['email']; ?></td>
                      </tr>
                      <tr>
                        <th>No Hp</th>
                        <td><?php echo $detail['nohp']; ?></td>
                      </tr>
                      <tr>
                        <th>Kota</th>
                        <td><?php echo $detail['kota']; ?></td>
                      </tr>
                      <tr>
                        <th>Alamat Asal</th>
                        <td><?php echo $detail['alamat_asal']; ?></td>
                      </tr>
                      <tr>
                        <th>Alamat Sekarang</th>
                        <td><?php echo $detail['alamat_sekarang']; ?></td>
                      </tr>
                      <tr>
                        <th>Asal Sekolah</th>
                        <td><?php echo $detail['asal_sekolah']; ?></td>
                      </tr>
                      <tr>
                        <th>Jurusan</th>
                        <td><?php echo $detail['jurusan_sekolah']; ?></td>
                      </tr>
                      <tr>
                        <th>Surat Magang</th>
                        <td><?php echo $detail['berkas_magang']; ?> <a href="<?php echo base_url('download/surat/') . $detail['berkas_magang']; ?>" class="btn btn-sm btn-primary">DOWNLOAD</a></td>
                      </tr>
                      <tr>
                        <th>Proposal</th>
                        <td><?php echo $detail['berkas_rekomendasi']; ?> <a href="<?php echo base_url('download/proposal/') . $detail['berkas_rekomendasi']; ?>" class="btn btn-sm btn-primary">DOWNLOAD</a></td>
                      </tr>
                      <tr>
                        <th>CV/Portofolio</th>
                        <td><?php echo $detail['cv']; ?> <a href="<?php echo base_url('download/cv/') . $detail['cv']; ?>" class="btn btn-sm btn-primary">DOWNLOAD</a></td>
                      </tr>
                      <tr>
                        <th>Pas Photo</th>
                        <td><?php echo $detail['pasphoto']; ?> <a href="<?php echo base_url('download/photo/') . $detail['pasphoto']; ?>" class="btn btn-sm btn-primary">DOWNLOAD</a></td>
                      </tr>
                      <tr>
                        <th>Tanggal Magang | Lama Magang</th>
                        <td><?php echo $detail['tanggal_magang'] . " | " . $detail['lama_magang']; ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?php echo $detail['status']; ?></td>
                      </tr>
                    </thead>
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