<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Kegiatan Non Rutin</h2>
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
							<div class="name">Kegiatan Non Rutin</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
							<button class="btn btn-warning btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-print "></i>
								Export
							</button>
						</div>
						<div class="card-footer">

							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
								<strong>Data Berhasil di Tambah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="edit-alert" role="alert">
								<strong>Data Berhasil di Ubah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="delete-alert" role="alert">
								<strong>Data Berhasil di Hapus</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="match-alert" role="alert">
								<strong>Password Tidak Sama</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="table-responsive">
								<table id="myTable" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Tanggal</th>
											<th>Jenis Kegiatan</th>
											<th style="width: 10%">AKSI</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Tambah Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data Master</span>
					<span class="fw-light">
						Kegiatan Non Rutin
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="username">Nama</label>
								<input list="list_username" id="username" name="username" class="form-control" required>
								<datalist id="list_username">

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="username">Tanggal</label>
								<input type="date" class="form-control" id="username" placeholder="Username">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="jk">Jenis Kegiatan</label>
								<select id="jk" class="form-control">
									<option value="TARBIATUL ARABI">TARBIATUL ARABI</option>
									<option value="ENGHLISH CLUB">ENGHLISH CLUB</option>
									<option value="KELAS ILMIAH">KELAS ILMIAH</option>
									<option value="BANJARI">BANJARI</option>
									<option value="DORMITORY">DORMITORY</option>
									<option value="BENGKEL SENI">BENGKEL SENI</option>
									<option value="TARTIL">TARTIL</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="tambah()" id="tambah_button" type="button" class="btn btn-primary">Tambah</button>
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Ubah Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data Master</span>
					<span class="fw-light">
						Kegiatan Non Rutin
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="username">Nama</label>
								<input id="ubah_username" name="username" class="form-control" readonly required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="username">Tanggal</label>
								<input type="date" class="form-control" id="ubah_tanggal" placeholder="Username">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="ubah_jk">Jenis Kegiatan</label>
								<select id="ubah_jk" class="form-control">
									<option value="0">TARBIATUL ARABI</option>
									<option value="1">ENGHLISH CLUB</option>
									<option value="2">KELAS ILMIAH</option>
									<option value="3">BANJARI</option>
									<option value="4">DORMITORY</option>
									<option value="5">BENGKEL SENI</option>
									<option value="6">TARTIL</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			</div>
			<div class="modal-footer no-bd" id="ubahModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Hapus Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data Master</span>
					<span class="fw-light">
						Kegiatan Non Rutin
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda ingin mengapus data ? </br> <span style="color: red;">*Data yang telah dihapus tidak dapat dikembalikan lagi</span></p>
			</div>
			<div class="modal-footer no-bd" id="hapusModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
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
			url: '<?= site_url() ?>kegiatan_nonrutin_control/get_username',
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
		if (document.getElementById("jk").value == "") {
			document.getElementById("jk").focus();
		}
		if (document.getElementById("tanggal").value == "") {
			document.getElementById("tanggal").focus();
		}
		if (document.getElementById("username").value == "") {
			document.getElementById("username").focus();
		}
		if (document.getElementById("username").value != "" && document.getElementById("tanggal").value != "" && document.getElementById("jk").value != "") {
			// console.log("sukses");
			var pengguna = document.getElementById("username").value.split(' | ');

			$.ajax({
				type: 'POST',
				data: 'tabel="pengguna"' + '&id=' + pengguna[0] +
					'&tanggal=' + document.getElementById("tanggal").value + '&jk=' + document.getElementById("jk").value,
				url: '<?= base_url() ?>kegiatan_nonrutin_control/tambah',
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					document.getElementById("username").value = "";
					document.getElementById("tanggal").value = "";
					document.getElementById("jk").value = "";

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
				"url": "<?php echo site_url("kegiatan_nonrutin_control/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "username"
				},
				{
					"data": "tanggal"
				},
				{
					"data": "jenis_kegiatan",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "TARBIATUL ARABI"
						} else if (data == 1) {
							return "ENGHLISH CLUB"
						} else {
						} else if (data == 2) {
							return "KELAS ILMIAH"
						} else {
						} else if (data == 3) {
							return "BANJARI"
						} else {
						} else if (data == 4) {
							return "ORMITORY"
						} else {
						} else if (data == 2) {
							return "BENGKEL SENI"
						} else {
							return "TARTIL"
						}
					}
				},
				{
					"data": "id_kegiatan_nonrutin",
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
			url: '<?= base_url() ?>kegiatan_nrutin_control/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {

					document.getElementById("ubah_username").value = data[i].username;
					document.getElementById("ubah_tanggal").value = data[i].tanggal;
					document.getElementById("ubah_jk").value = data[i].jenis_kegiatan;
					

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
				'&jk=' + document.getElementById("ubah_jk").value,
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