<body>
	<div class="container">				
		<div class="content">			
			<div class="tanggal">
				<?php date_default_timezone_set("Asia/Jakarta"); ?>
				<h2 class="tgl"><?php echo date('l, d-m-Y');?></h2>
				<br>
				<h2 class="jam"><?php echo date('H:i:s a');?></h2>			
			</div>	
			<h2 class="label-sewa">Data Mahasiswa</h2>
			<div class="validasi" style="margin: 30px 60px 0px 40px;" >
			<?= $this->session->flashdata('message')?>	
			<?= $this->session->flashdata('message1')?>	
			<?= $this->session->flashdata('message2')?>	
			<?= $this->session->flashdata('message3')?>	
			</div>

			<a href="<?php echo base_url('Myadmin/tambahdata')?>" class="btn btn-primary" style="margin: 30px 0px 0px 40px;" > + Tambah Data</a>			

			<div class="container-tabel">
				<div class="table-responsive">
					<table align="center" class="table table-striped table-bordered" id="table-data">
						<thead>
							<tr>
								<th>No</th>
								<th>Npm</th>
								<th>Nama</th>
								<th>Semester</th>
								<th>Aksi 1</th>
								<th>Aksi 2</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							$no=1;
							foreach ($tampil as $tpl) { ?>

								<!-- POP-UP KONPIRMASI -->
								<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h3 id="myModalLabel">Konfirmasi Hapus</h3>

											</div>
											<div class="modal-body">
												<p class="error-text"><i class="fa fa-warning modal-icon"></i>Anda yakin akan menghapus data mahasiswa ini?
													<br>Data yang terhapus tidak dapat dikembalikan.</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Kembali</button> <a href="<?php echo base_url('Myadmin/hapus/'.$tpl->int_id_mahasiswa)?>" class="btn btn-danger" id="modalDelete" >Hapus</a>

												</div>
											</div>
										</div>
									</div>

									<?php 
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>".$tpl->var_npm."</td>";
									echo "<td>".$tpl->var_nama."</td>";
									echo "<td>".$tpl->int_semester."</td>";?>
									<td style="vertical-align: middle;"><a href="<?php echo base_url('Myadmin/editdata/'.$tpl->int_id_mahasiswa)?>" class="btn btn-success btn-sm">Edit</a></td>
									<td style="vertical-align: middle;"><a href="#myModal" data-toggle="modal" class="btn btn-danger btn-sm">Hapus</a></td>
									<?php echo "</tr>";
									$no++; 
								}			
								?>
							</tbody>
						</table>
					</div>
				</div>		


				<!-- <div class="container-sewa">
					<form  class="form" action="<?php echo base_url('Myadmin/aksi_tambah_data')?>" method="POST">
						<div class="form-group">
							<label for="npm">NPM :</label>
							<input class="form-control" id="npm" type="number" name="npm" placeholder="Masukan NPM" maxlength="8" value="<?= set_value('npm');?>">	
							<small class="text-danger"><?php echo form_error('npm'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">NAMA :</label>
							<input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan Nama" value="<?= set_value('nama');?>">	
							<?php echo form_error('nama','<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group">			
							<label for="semester">SEMESTER :</label>
							<select class="form-control" id="semester" name="semester" value="<?= set_value('semester');?>">
								<option value="">-Pilih Semester-</option>
								<?php for ($i=0; $i < 11 ; $i++) { ?>
									<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
								<?php } ?> 					
							</select>
							<small class="text-danger"><?php echo form_error('semester'); ?></small>
						</div>
						<div class="form-group" align="center">
							<button class="btn btn-primary" style="width: 100px" type="submit" value="Submit">Simpan</button>
						</div>
					</form>
				</div> -->

				
			</div>
		</div>
	</body>
	</html>