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
		// $("#success-alert").hide();
		$("#tambah_button").click(function showAlert() {
			$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#success-alert").slideUp(500);
			});
		});

		//datatabel
		ambil_data();
		get_username();
	});

	function get_username() {
		$.ajax({
			type: 'POST',
			url: '<?= site_url() ?>absensi_rutin_control/get_username',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].id_pengguna + ' | ' + data[i].username + ' | ' + data[i].jurusan + '"></option>';
				}
				$("#list_username").html(html);
			}
		});
	}

	function tambah() {
		if (document.getElementById("jam").value == "") {
			document.getElementById("jam").focus();
		}
		if (document.getElementById("isyak").value == "") {
			document.getElementById("isyak").focus();
		}
		if (document.getElementById("maghrib").value == "") {
			document.getElementById("maghrib").focus();
		}
		if (document.getElementById("taklim").value == "") {
			document.getElementById("taklim").focus();
		}
		if (document.getElementById("subuh").value == "") {
			document.getElementById("subuh").focus();
		}
		if (document.getElementById("ql").value == "") {
			document.getElementById("ql").focus();
		}
		if (document.getElementById("tanggal").value == "") {
			document.getElementById("tanggal").focus();
		}
		if (document.getElementById("username").value == "") {
			document.getElementById("username").focus();
		}
		if (document.getElementById("username").value != "" && document.getElementById("tanggal").value != "" && document.getElementById("ql").value != "" && document.getElementById("jam").value != "" &&
			document.getElementById("subuh").value != "" && document.getElementById("taklim").value != "" && document.getElementById("maghrib").value != "" && document.getElementById("isyak").value != "") {
			// console.log("sukses");
			var pengguna = document.getElementById("username").value.split(' | ');

			$.ajax({
				type: 'POST',
				data: 'tabel="pengguna"' + '&id=' + pengguna[0] +
					'&tanggal=' + document.getElementById("tanggal").value + '&ql=' + document.getElementById("ql").value +
					'&subuh=' + document.getElementById("subuh").value + '&taklim=' + document.getElementById("taklim").value +
					'&jam=' + document.getElementById("jam").value +
					'&isyak=' + document.getElementById("isyak").value + '&maghrib=' + document.getElementById("maghrib").value,
				url: '<?= base_url() ?>absensi_rutin_control/tambah',
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					document.getElementById("username").value = "";
					document.getElementById("tanggal").value = "";
					document.getElementById("ql").value = "";
					document.getElementById("subuh").value = "";
					document.getElementById("taklim").value = "";
					document.getElementById("isyak").value = "";
					document.getElementById("maghrib").value = "";
					document.getElementById("jam").value = "";

					ambil_data();

					$('#addRowModal').modal('hide');
				}
			});
		}
		// console.log(document.getElementById("kode").value);
	}

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

	function ubah_list(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>absensi_rutin_control/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {

					document.getElementById("ubah_username").value = data[i].username;
					document.getElementById("ubah_tanggal").value = data[i].tanggal;
					document.getElementById("ubah_ql").value = data[i].qiyamul_lail;
					document.getElementById("ubah_subuh").value = data[i].subuh;
					document.getElementById("ubah_taklim").value = data[i].taklim;
					document.getElementById("ubah_isyak").value = data[i].isyak;
					document.getElementById("ubah_maghrib").value = data[i].maghrib;
					document.getElementById("ubah_jam").value = data[i].jam_malam;

					var html = '<button onclick="ubah(' + id + ')" id="ubah_button" type="button" data-dismiss="modal" class="btn btn-primary">Ubah</button>';
					$("#ubahModal_tombol").html(html);

					$("#ubah_button").click(function showAlert() {
						$("#edit-alert").fadeTo(2000, 500).slideUp(500, function() {
							$("#edit-alert").slideUp(500);
						});
					});

					$('#ubahModal').modal('show');
				}
			}
		});
	}

	function ubah(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id + '&tanggal=' + document.getElementById("ubah_tanggal").value +
				'&ql=' + document.getElementById("ubah_ql").value + '&subuh=' + document.getElementById("ubah_subuh").value +
				'&taklim=' + document.getElementById("ubah_taklim").value + '&isyak=' + document.getElementById("ubah_isyak").value +
				'&maghrib=' + document.getElementById("ubah_maghrib").value + '&jam=' + document.getElementById("ubah_jam").value,
			url: '<?= base_url() ?>absensi_rutin_control/ubah',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#ubahModal').modal('hide');

				ambil_data();
			}
		});
	}

	function hapus_list(id) {
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" data-dismiss="modal" class="btn btn-danger">Hapus</button>';
		$("#hapusModal_tombol").html(html);

		$("#hapus_button").click(function showAlert() {
			$("#delete-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#delete-alert").slideUp(500);
			});
		});

		$('#hapusModal').modal('show');
	}

	function hapus(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>management_control/hapus',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#hapusModal').modal('hide');

				ambil_data();
			}
		});
	}
</script>