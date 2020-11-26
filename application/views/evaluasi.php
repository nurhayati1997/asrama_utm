<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Evaluasi Warga dan Pengurus Asrama</h2>
					<h5 class="text-white op-7 mb-2">Asrama Mahasiswa Universitas Trunojoyo Madura</h5>
				</div>
				<!-- <div class="ml-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-white btn-border btn-round mr-2">+ Penjualan</a>
					<a href="#" class="btn btn-secondary btn-round">Piutang</a>
				</div> -->
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-sm-12">
				<div class="card card-profile">
					<div class="card-header" style="background-image: url('<?= base_url() ?>assets/img/examples/example3.jpeg')">
						<div class="profile-picture">
							<div class="avatar avatar-xl">
							<img src="<?= base_url() ?>assets/img/logo.png" alt="..." class="avatar-img rounded-circle">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="user-profile text-center">
							<div class="name">Hasil Evaluasi</div>
							<button class="btn btn-warning btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-print "></i>
								Export
							</button>
						</div>
						<div class="card-footer">
							<div class="table-responsive">
								<table id="myTable" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>NO</th>
											<th>JENIS</th>
											<th>NAMA</th>
											<th>JURUSAN</th>
											<th>SKORE</th>
											<th>KEPUTUSAN</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>warga</td>
											<td>halisa nabila</td>
											<td>PBSI</td>
											<td>0.725</td>
											<td>TINGGAL</td>
										</tr>
										<tr>
											<td>2</td>
											<td>warga</td>
											<td>irmawati</td>
											<td>psikologi</td>
											<td>0.120</td>
											<td>KELUAR</td>
										</tr>
										<tr>
											<td>3</td>
											<td>pengurus</td>
											<td>nur hayati</td>
											<td>teknik industri</td>
											<td>0.523</td>
											<td>PERTIMBANGAN</td>
										</tr>
										<tr>
											<td>4</td>
											<td>warga</td>
											<td>nina</td>
											<td>teknik mesin</td>
											<td>0.876</td>
											<td>TINGGAL</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		// ambil_data();
	});

	function ambil_data() {
		$('#myTable').DataTable({
			destroy: true,
			"ajax": {
				"url": "<?php echo site_url("absensi_rutin_control/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "username"
				},
				{
					"data": "tanggal"
				},
				{
					"data": "qiyamul_lail",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "ALFA"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "HADIR"
						}
					}
				},
				{
					"data": "subuh",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "ALFA"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "HADIR"
						}
					}
				},
				{
					"data": "taklim",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "ALFA"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "HADIR"
						}
					}
				},
				{
					"data": "maghrib",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "ALFA"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "HADIR"
						}
					}
				},
				{
					"data": "isyak",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "ALFA"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "HADIR"
						}
					}
				},
				{
					"data": "jam_malam",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "TELAT"
						} else if (data == 1) {
							return "IZIN"
						} else {
							return "ON TIME"
						}
					}
				},
				{
					"data": "id_absensi_rutin",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						var html = '<div class="form-button-action">' +
							'<button onclick="ubah_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">' +
							'<i class="fa fa-edit"></i>' +
							'</button>' + '<button onclick="hapus_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
							'<i class="fa fa-times"></i>' +
							'</button>' +
							'</div>';

						return html
					}

				}
			]
		});
	}
</script>