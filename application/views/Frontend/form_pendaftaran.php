<div class="page" style="margin-top: 30px;">
	<div id="informasi" class="tentang-area">
		<div class="contact-inner area-padding">
			<div class="contact-overly"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h2 data-aos="fade-right" data-aos-offset="100" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out">FORM PENDAFTARAN</h2>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 30px;">
					<div class="col-lg ">
						<?php echo form_open_multipart('daftar/tambah_aksi'); ?>
						<div class="form-group">
							<label>Nomor Surat</label>
							<input type="text" class="form-control" name="nomor_surat" placeholder="Masukkan Nomor Surat" oninput="this.value = this.value.toUpperCase()" required>
						</div>
						<div class="form-group">
							<label>Nama Perwakilan Pendaftar</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" oninput="this.value = this.value.toUpperCase()" required>
						</div>

						<div class="form-group">
							<label>Asal Sekolah/Universitas</label>
							<input type="text" class="form-control" name="asal" placeholder="Masukkan Nama Universitas" oninput="this.value = this.value.toUpperCase()" required>
						</div>

						<div class="form-group">
							<label>Jurusan Sekolah/Universitas</label>
							<input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan" oninput="this.value = this.value.toUpperCase()" required>
						</div>

						<div class="form-group">
							<label>Jumlah Pendaftar (Orang) </label>
							<select class="form-control" name="jumlah">
								<option value="">--- Pilih Jumlah ---</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>

						<div class="form-group">
							<label>Tanggal Mulai</label>
							<input type="date" class="form-control" name="tanggal_magang">
						</div>

						<div class="form-group">
							<label>Lama Prakerin </label>
							<select class="form-control" name="lama_magang">
								<option value="">--- Pilih Bulan ---</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>

						<div class="form-group">
							<label>File Proposal *Max 5 MB</label>
							<input type="file" class="form-control" accept="application/pdf" name="berkas_magang">
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-block btn-lg">DAFTAR</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				<!-- BOX BODY -->
			</div>
		</div>
	</div>
	<!-- /.row (main row) -->
</div>
<!-- JAVASCRIPT -->
<?php $this->load->view('include/js'); ?>