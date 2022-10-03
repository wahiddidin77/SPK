<?php
include 'config/koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sistem Penilaian Kinerja Pegawai</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div>
			<div class = "content">
				<div class = "container-fluid">
					<div class="row" style="padding-top:10%">
					
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="card">
								<form method="POST" action="">
									<div class="card-header">
										<h4 class="card-title">Pegawai Login</h4>
									</div>
									<div class="card-body">
										<p>Username</p>
										<input name="username" type="text" class="form-control" placeholder='username'>
										<br>
										<p>Password</p>
										<input name="password" type="password" class="form-control" placeholder='Password'>
										<br>
									</div>
									<div class="card-footer" style="display:flex; justify-content:flex-end; width:100%; padding:2;">
										 <input type="Reset" href="#" class="btn btn-rounded btn-danger btn-l" value="Reset" style="margin-right:10px"/><input type="submit" name="submit" href="#" class="btn btn-rounded btn-success btn-l" value="Login"/>
									</div>
								</form>
								<?php
								if(isset($_POST['submit'])) {
									$username = $koneksi->real_escape_string(@$_POST['username']);
									$password = $koneksi->real_escape_string(@$_POST['password']); //md5($_POST['password']."IniSALTNYAYAAA");
									$result = $koneksi->query("SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'")->num_rows;
									$data = $koneksi->query("SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'")->fetch_array();
									if($result > 0) {
										$_SESSION['id_pegawai'] = $data['id_pegawai'];
										$_SESSION['username'] = $data['username'];
										$_SESSION['status'] = 'Aktif';
										$_SESSION['level'] = 'Pegawai';
										echo "<script>alert('Login Sukses')</script>";
										echo "<script>window.location.href = \"Pegawai/?page=Dashboard\";</script>";
									} else {
										echo "<script>alert('Username atau Password salah!')</script>";
									}
								}
								?>
							</div>
							<center><a href="daftar_pegawai.php" >Daftarkan diri</a>, jika ingin mendaftar sebagai pegawai.</center>
							<center><a href="login_admin.php" >Masuk disini</a>, jika Anda adalah admin.</center>
						</div>
						<!-- <div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Kinerja Pegawai</h4>
								</div>
								<div class="card-body">
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
								<div class="card-footer">
									<center><legend class="btn-rounded btn-success btn-lg">Sangat Baik</legend></center>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>