<body class="login">
	<img src="<?php echo base_url('assets/image/logo_sttb.png'); ?>">
	<div class="container">
		<div class="form_login">
			<h1>Selamat Datang!</h1>
			<form  class="form" action="<?php echo base_url('login/aksi_login_admin'); ?>" method="POST">
				<div class="input_login">
				<div class="form-group">
					<input class="form-control" type="text" name="username" placeholder="Masukan Username . . ." value="<?= set_value('username');?>">	
					<small class="text-danger"><?php echo form_error('username'); ?></small>
				</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Masukan Password . . ." value="<?= set_value('password');?>">
						<small class="text-danger"><?php echo form_error('password'); ?></small>
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
			<p class="daftar" align="center">Ingin Kembali? <a href="<?php echo base_url('Login'); ?>">Kembali Sekarang!</a></p>			
		</div>
		<div class="ilustrasi">
			<img src="<?php echo base_url('assets/image/ilu_admin.png'); ?>">
		</div>
	</div>				


</body>

</html>