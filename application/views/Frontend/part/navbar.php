    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top navbar-home">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="lib/img/kota1.png"><img src="lib/img/kominfo1.png"> <b> SI PRO</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('visimisi') ?>">Visi & Misi</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('alur') ?>">Alur Pendaftaran</a></li>
            <li class="nav-item dropdown style-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran <i class="fas fa-angle-down"></i></a>
              <div class="dropdown-menu style-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('daftar') ?>">Form Pendaftaran</a>
                <a class="dropdown-item" href="<?php echo base_url('pengumuman') ?>">Pengumuman</a>
              </div>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login') ?>">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="navbar-home-box" style="height: 80px;"></div>