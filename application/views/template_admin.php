<?php 
if (empty($this->session->id)) {
	redirect('login');
}
if ($this->session->status == "0") {
	redirect('profile');
}

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>AdminLTE 3 | Starter</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?=base_url('assets/adminlte/')?>plugins/fontawesome-free/css/all.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?=base_url('assets/adminlte/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet"
		href="<?=base_url('assets/adminlte/')?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?=base_url('assets/adminlte/')?>plugins/toastr/toastr.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets/adminlte/')?>dist/css/adminlte.min.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?=base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?=base_url('assets/adminlte/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?=base_url('pendonor')?>" class="nav-link">
								<i class="nav-icon fas fa-medkit"></i>
								<p>Pendonor</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('riwayat_minta_darah')?>" class="nav-link">
								<i class="nav-icon fas fa-notes-medical"></i>
								<p>Pemintaan Darah</p>
							</a>
						</li>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('pengguna')?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>Pengguna</p>
							</a>
						</li>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('artikel')?>" class="nav-link">
								<i class="nav-icon fas fa-newspaper"></i>
								<p>Artikel</p>
							</a>
						</li>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('pengaturan')?>" class="nav-link">
								<i class="nav-icon fas fa-cog"></i>
								<p>Pengaturan</p>
							</a>
						</li>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('home/logout')?>" class="nav-link">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<div class="content-header">
				<div class="container-fluid">
					<?= $contents ?>
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
				Anything you want
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/datatables/jquery.dataTables.js"></script>
	<script src="<?=base_url('assets/adminlte/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- Toastr -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/toastr/toastr.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/adminlte/')?>dist/js/adminlte.min.js"></script>
	<!-- Summernote -->
	<script src="<?=base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.min.js"></script>
	<!-- page script -->
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});

	</script>
	<!-- Toastr -->
	<script type="text/javascript">
		$(function () {
			const flashdata = $('.flash-data').data('flashdata');
			if (flashdata) {
				toastr.success(flashdata)
			}
		});

	</script>
	<!-- Summernote -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
					onImageUpload: function (image) {
						uploadImage(image[0]);
					},
					onMediaDelete: function (target) {
						deleteImage(target[0].src);
					}
				}
			});

			function uploadImage(image) {
				var data = new FormData();
				data.append("image", image);
				$.ajax({
					url: "<?php echo site_url('artikel/upload_image')?>",
					cache: false,
					contentType: false,
					processData: false,
					data: data,
					type: "POST",
					success: function (url) {
						$('#summernote').summernote("insertImage", url);
					},
					error: function (data) {
						console.log(data);
					}
				});
			}

			function deleteImage(src) {
				$.ajax({
					data: {
						src: src
					},
					type: "POST",
					url: "<?php echo site_url('artikel/delete_image')?>",
					cache: false,
					success: function (response) {
						console.log(response);
					}
				});
			}

		});

	</script>
</body>

</html>
