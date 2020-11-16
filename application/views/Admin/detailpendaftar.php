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
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Detail Data Pendaftar <b><?php echo $detail['nama'] ?></b></h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/proseseditpendaftar'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Nomor Surat</label>
                  <input type="text" class="form-control" name="nomor_surat" value="<?php echo $detail['nomor_surat'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $detail['nama'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Asal</label>
                  <input type="text" class="form-control" name="asal" value="<?php echo $detail['asal'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" value="<?php echo $detail['jurusan'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Jumlah Anggota Magang</label>
                  <input type="text" class="form-control" name="jumlah" value="<?php echo $detail['jumlah'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal Magang</label>
                  <input type="date" class="form-control" name="tanggal_magang" value="<?php echo $detail['tanggal_magang'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Lama Magang (Bulan)</label>
                  <input type="text" class="form-control" name="lama_magang" value="<?php echo $detail['lama_magang'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Surat Permohonan Magang</label>
                  <input type="text" class="form-control" name="berkas_magang" value="<?php echo $detail['berkas_magang'] ?>" readonly>
                  <br>
                  <a href="<?php echo base_url('download/surat/') . $detail['berkas_magang']; ?>" class="btn btn-sm btn-primary">DOWNLOAD</a>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option selected disabled>--Pilih--</option>
                    <option value="Dalam Konfirmasi" <?php echo set_select('status', 'Dalam Konfirmasi', ('Dalam Konfirmasi' == $detail['status'])); ?>>Dalam Konfirmasi</option>
                    <option value="Diterima" <?php echo set_select('status', 'Diterima', ('Diterima' == $detail['status'])); ?>>Diterima</option>
                    <option value="Ditolak" <?php echo set_select('status', 'Ditolak', ('Ditolak' == $detail['status'])); ?>>Ditolak</option>

                  </select>
                </div>
                <div class="form-group">
                  <label>Surat Balasan</label>
                  <input type="file" class="form-control" accept="application/pdf" name="surat_balasan" value="<?php echo $detail['surat_balasan'] ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo base_url('admin/pendaftar'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Proses</button>
              </div>
              </form>
            </div>
          </div>


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