
<div class="container">
	<?= $this->session->flashdata('message')?>	
	<?= $this->session->flashdata('message1')?>	
	<?= $this->session->flashdata('message2')?>	
	<?= $this->session->flashdata('message3')?>	
	<div class="content">			
		<div class="tanggal">
			<?php date_default_timezone_set("Asia/Jakarta"); ?>
			<h2 class="tgl"><?php echo date('l, d-m-Y');?></h2>
			<br>
			<h2 class="jam"><?php echo date('H:i:s a');?></h2>			
		</div>	
		<h2 class="label-tambah">Tambah Data Mahasiswa</h2>

		<div class="container-sewa">
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
		</div>
	</div>
</div>
