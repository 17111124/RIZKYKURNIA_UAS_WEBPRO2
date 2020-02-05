<body class="register">
	<div class="container">

		<div class="ilustrasi_register">
			<img src="<?php echo base_url('assets/image/ilu_regis.png'); ?>">
		</div>
		<div class="form_register">		
			<h1>Silahkan Daftar!</h1>
			<p>Buruan daftar! dan dan gunakan fitur yang ada . . . </p>
			<?= $this->session->flashdata('msg')?>	
			<?= $this->session->flashdata('msg1')?>	
			<?= $this->session->flashdata('msg2')?>	
			<form  class="form" action="<?php echo base_url('Registrasi/aksi_register')?>" method="POST">
				<div class="form-group">
					<label for="nama">Nama :</label>
					<input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan nama . . ." value="">	
				</div>
				<div class="form-group">
					<label for="npm">NPM :</label>
					<input class="form-control" id="npm" type="text" name="npm" placeholder="Masukan NPM . . ." value="">	
				</div>
				<div class="wadah_password">
				<div class="form-group" style="float: left;">
					<label for="passwprd">Password :</label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Masukan password . . ." value="">
				</div>
				<div class="form-group" style="float: right;">
					<label for="password1">Ulang :</label>
					<input class="form-control" id="password1" type="password" name="password1" placeholder="Masukan password kembali . . ." value="">
				</div>		
				</div>
				<div class="form-group" align="center">
					<button class="btn_masuk" style="width: 425px" type="submit" value="Submit">Daftar</button>
				</div>					
			</form>
			<p class="ayo_login" align="center">Sudah punya akun? <a href="<?php echo base_url('Login'); ?>">Ayo Masuk!</a></p>
		</div>
	</div>
</body>