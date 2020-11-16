<!DOCTYPE html>
<html>

<head>
  <title><?php echo SITE_NAME; ?></title>
  <?php $this->load->view('include/css'); ?>
  <link rel="stylesheet" href="lib/css/stylelogin.css" type="text/css" media="all" />
  <!-- //Custom-Stylesheet-Links -->
  <!--fonts -->
  <!-- //fonts -->
  <link rel="stylesheet" href="lib/css/font-awesome.min.css" type="text/css" media="all" />
</head>

<body>
  <section class="main">
    <div class="layer">
      <div class="bottom-grid">
        <div class="logo">
          <h1>
            <a href="<?php echo base_url('') ?>">SI PRO</a>
          </h1>
        </div>
        <div class="links">
          <ul class="links-unordered-list">
            <li class="active">
              <a href="<?php echo base_url('') ?>" class="">Home</a>
            </li>
            <li class="">
              <a href="<?php echo base_url('login') ?>" class="">Login</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-w3ls">
        <div class="text-center silahkan">
          <h1>SILAHKAN LOGIN</h1>
          <hr>
        </div>
        <div class="content-bottom">
          <?php echo form_open('auth/prosesLogin'); ?>
          <div class="field-group">
            <span class="fa fa-user" aria-hidden="true"></span>
            <div class="wthree-field">
              <input name="email" type="email" placeholder="Email" />
            </div>
          </div>
          <div class="field-group">
            <span class="fa fa-lock" aria-hidden="true"></span>
            <div class="wthree-field">
              <input name="password" type="Password" placeholder="Password" />
            </div>
          </div>
          <div class="wthree-field">
            <button type="submit" class="btn">Login</button>
          </div>
          <ul class="list-login-bottom">

          </ul>
          </form>
        </div>
      </div>
      <div class="bottom-grid1">
        <div class="copyright">
          <p>
            2020 © AA Polsri. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- /.login-box -->

<?php $this->load->view('include/js'); ?>
</body>

</html>