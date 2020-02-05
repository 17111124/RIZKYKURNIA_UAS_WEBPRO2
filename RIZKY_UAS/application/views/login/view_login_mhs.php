<body class="login">
	<img src="<?php echo base_url('assets/image/logo_sttb.png'); ?>">
	<div class="container">
		<div class="form_login">
			<h1>Selamat Datang!</h1>
			<p>Hanya mahasiswa STTB yang bisa login . . . </p>
			<?= $this->session->flashdata('msg')?>	
			<?= $this->session->flashdata('msg1')?>	
			<?= $this->session->flashdata('msg2')?>	
			<?= $this->session->flashdata('massage11')?>	
		
			<form  class="form" action="<?php echo base_url('login/aksi_login_mhs'); ?>" method="POST">
				<div class="input_login">
					<div class="form-group">
						<input class="form-control" type="text" name="npm" placeholder="Masukan NPM . . ." value="">	
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Masukan Password . . ." value="">
					</div>
					<div class="bungkus">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Tetap Masuk</label>
						</div>
						<div class="lupapassword">
							<p><a href="">Lupa password?</a></p>
						</div>
					</div>
					<div class="form-group" align="center">
						<button class="btn_masuk" style="width: 420px" type="submit" value="Submit">Masuk</button>
					</div>	
				</div>
			</form>
			<p class="daftar" align="center">Belum punya akun? <a href="<?php echo base_url('Registrasi'); ?>">Daftar Sekarang!</a></p>
			<p class="daftar" align="center" style="margin-top: -20px"><a href="<?php echo base_url('login/login_admin'); ?>">-Login Sebagai Admin-</a></p>
		</div>
		<div class="ilustrasi">
			<img src="<?php echo base_url('assets/image/ilu_login.png'); ?>">
		</div>
	</div>				


</body>

</html>