<div class="page" style="margin-top: 30px;">
	<div id="informasi" class="slo-area">
		<div class="contact-inner area-padding">
			<div class="contact-overly"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-headline text-center">
							<h2 data-aos="fade-right" data-aos-offset="100" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out">PENGUMUMAN</h2>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 40px;" data-aos="fade-up" data-aos-offset="100" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out">
					<div class="col-md-12">
						<table class="table masaberlakutable table-bordered table-striped table-hover">
							<thead>
								<tr class="text-center">
									<th width="5">#</th>
									<th>Nomor Surat</th>
									<th>Nama</th>
									<th>Asal Universitas</th>
									<th>jurusan</th>
									<th>Jumlah</th>
									<th>Tanggal Magang</th>
									<th>Lama Magang</th>
									<th>Status</th>
									<th>Surat Balasan</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pendaftar as $row) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->nomor_surat; ?></td>
										<td><?php echo $row->nama; ?></td>
										<td><?php echo $row->asal; ?></td>
										<td><?php echo $row->jurusan; ?></td>
										<td><?php echo $row->jumlah; ?></td>
										<td><?php echo $row->tanggal_magang; ?></td>
										<td><?php echo $row->lama_magang; ?></td>
										<td><?php echo $row->status; ?></td>
										<td><?php echo $row->surat_balasan; ?><br> <a href="<?php echo base_url('download/surat/') . $row->surat_balasan; ?>" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> DOWNLOAD</a></td>

									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>