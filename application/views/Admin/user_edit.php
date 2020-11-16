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
        if (validation_errors()) {
          echo '<div class="alert alert-danger alert-dismissible">
        <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
        ' . validation_errors() . '
      </div>';
        }
        ?>
        <!-- Main row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <?php echo form_open('admin/prosesedituser'); ?>
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $user[0]['id'] ?>">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $user[0]['email'] ?>">
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level">
                    <option value="">--- Silahkan Pilih ---</option>
                    <option value="Admin" <?php echo set_select('level', 'Admin', ('Admin' == $user[0]['level'])); ?>>Admin</option>
                    <option value="Operator" <?php echo set_select('level', 'Operator', ('Operator' == $user[0]['level'])); ?>>Operator</option>

                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo base_url('admin/user'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Proses</button>
              </div>
              </form>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Password User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <?php echo form_open('admin/prosespassworduser'); ?>
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $user[0]['id'] ?>">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo base_url('admin/user'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Proses</button>
              </div>
              </form>
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