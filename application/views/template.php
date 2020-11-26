<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Asrama Mahasiswa UTM</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url() ?>assets/img/asramaico.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url() ?>assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css">
</head>

<body>
	<div class="wrapper compact-wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a class="logo">
					<img src="<?= base_url() ?>assets/img/logo_asrama.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<!-- <div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div> -->
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?= site_url('login_control/logout') ?>" title="Logout" aria-expanded="false">
								<i class="fas fa-power-off"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url() ?>assets/img/warga.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata("username"); ?>
									<span class="user-level"><?php if ($this->session->userdata("rule") == 0) {
																	echo "Super Admin";
																} else if ($this->session->userdata("rule") == 1) {
																	echo "Pengurus";
																} else {
																	echo "Warga";
																} ?></span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="<?= site_url('home_control') ?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item warga_hidden">
							<a href="<?= site_url('management_control') ?>">
								<i class="fas fa-th-list"></i>
								<p id="menu_access">Manajemen Pengguna</p>
							</a>
						</li>
						<li class="nav-item warga_hidden">
							<a data-toggle="collapse" href="#monitoring">
								<i class="fas fa-desktop"></i>
								<p>Monitoring</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="monitoring">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= site_url('absensi_rutin_control') ?>">
											<span class="sub-item">Absensi Rutin</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('kegiatan_nonrutin_control') ?>">
											<span class="sub-item">Kegiatan Non Rutin</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('perizinan_control') ?>">
											<span class="sub-item">Perizinan</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('pelanggaran_control') ?>">
											<span class="sub-item">Pelanggaran</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('catatan_control') ?>">
											<span class="sub-item">Catatan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pengaduan</h4>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('pengaduan_control') ?>">
								<i class="fas fa-archive"></i>
								<p>Kritik & Saran</p>
							</a>
						</li>
						<li class="nav-section warga_hidden">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Penilaian</h4>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('evaluasi_control') ?>">
								<i class="fas fa-exclamation-triangle"></i>
								<p>Evaluasi</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<?php echo $contents ?>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2020, made with <i class="fa fa-heart heart text-danger"></i> Hamba Allah to <a href="">ASRAMA MAHASISWA UTM</a>
					</div>
				</div>
			</footer>
		</div>


		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br />
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br />
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Chart JS -->
	<script src="<?= base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<!-- <script src="<?= base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script> -->

	<!-- Sweet Alert -->
	<script src="<?= base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url() ?>assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<!-- <script src="<?= base_url() ?>assets/js/setting-demo.js"></script>
	<script src="<?= base_url() ?>assets/js/demo.js"></script> -->
	<script>
		if (<?php echo $this->session->userdata("rule") ?> == 2) {
			var divsToHide = document.getElementsByClassName("warga_hidden"); //divsToHide is an array
			for (var i = 0; i < divsToHide.length; i++) {
				divsToHide[i].style.visibility = "hidden"; // or
				divsToHide[i].style.display = "none"; // depending on what you're doing
			};
		}
		// Circles.create({
		// 	id: 'circles-1',
		// 	radius: 45,
		// 	value: 60,
		// 	maxValue: 100,
		// 	width: 7,
		// 	text: 5,
		// 	colors: ['#f1f1f1', '#FF9E27'],
		// 	duration: 400,
		// 	wrpClass: 'circles-wrp',
		// 	textClass: 'circles-text',
		// 	styleWrapper: true,
		// 	styleText: true
		// })

		// Circles.create({
		// 	id: 'circles-2',
		// 	radius: 45,
		// 	value: 70,
		// 	maxValue: 100,
		// 	width: 7,
		// 	text: 36,
		// 	colors: ['#f1f1f1', '#2BB930'],
		// 	duration: 400,
		// 	wrpClass: 'circles-wrp',
		// 	textClass: 'circles-text',
		// 	styleWrapper: true,
		// 	styleText: true
		// })

		// Circles.create({
		// 	id: 'circles-3',
		// 	radius: 45,
		// 	value: 40,
		// 	maxValue: 100,
		// 	width: 7,
		// 	text: 12,
		// 	colors: ['#f1f1f1', '#F25961'],
		// 	duration: 400,
		// 	wrpClass: 'circles-wrp',
		// 	textClass: 'circles-text',
		// 	styleWrapper: true,
		// 	styleText: true
		// })

		// var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		// var mytotalIncomeChart = new Chart(totalIncomeChart, {
		// 	type: 'bar',
		// 	data: {
		// 		labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
		// 		datasets: [{
		// 			label: "Total Income",
		// 			backgroundColor: '#ff9e27',
		// 			borderColor: 'rgb(23, 125, 255)',
		// 			data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
		// 		}],
		// 	},
		// 	options: {
		// 		responsive: true,
		// 		maintainAspectRatio: false,
		// 		legend: {
		// 			display: false,
		// 		},
		// 		scales: {
		// 			yAxes: [{
		// 				ticks: {
		// 					display: false //this will remove only the label
		// 				},
		// 				gridLines: {
		// 					drawBorder: false,
		// 					display: false
		// 				}
		// 			}],
		// 			xAxes: [{
		// 				gridLines: {
		// 					drawBorder: false,
		// 					display: false
		// 				}
		// 			}]
		// 		},
		// 	}
		// });

		// $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
		// 	type: 'line',
		// 	height: '70',
		// 	width: '100%',
		// 	lineWidth: '2',
		// 	lineColor: '#ffa534',
		// 	fillColor: 'rgba(255, 165, 52, .14)'
		// });
	</script>
	<script>
		$(document).ready(function() {
			if (<?php echo $this->session->userdata("rule") ?> == 1) {
				$("#menu_access").html("Manajemen Warga");
			}
			

			// $('#basic-datatables').DataTable({});

			// $('#multi-filter-select').DataTable({
			// 	"pageLength": 5,
			// 	initComplete: function() {
			// 		this.api().columns().every(function() {
			// 			var column = this;
			// 			var select = $('<select class="form-control"><option value=""></option></select>')
			// 				.appendTo($(column.footer()).empty())
			// 				.on('change', function() {
			// 					var val = $.fn.dataTable.util.escapeRegex(
			// 						$(this).val()
			// 					);

			// 					column
			// 						.search(val ? '^' + val + '$' : '', true, false)
			// 						.draw();
			// 				});

			// 			column.data().unique().sort().each(function(d, j) {
			// 				select.append('<option value="' + d + '">' + d + '</option>')
			// 			});
			// 		});
			// 	}
			// });

			// // Add Row
			// $('#add-row').DataTable({
			// 	"pageLength": 5,
			// });

			// var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			// $('#addRowButton').click(function() {
			// 	$('#add-row').dataTable().fnAddData([
			// 		$("#addName").val(),
			// 		$("#addPosition").val(),
			// 		$("#addOffice").val(),
			// 		action
			// 	]);
			// 	$('#addRowModal').modal('hide');

			// });
		});
	</script>
</body>

</html>