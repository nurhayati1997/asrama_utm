<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Pengaduan</h2>
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
							<div class="name">Pengaduan</div>
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
											<th>Catatan Pengelola</th>
											<th>Catatan Pengurus Harian</th>
											<th>Catatan Pengurus Gedung</th>
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
						Pengaduan
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
								<input type="text" class="form-control" id="username" placeholder="Username">
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
								<label for="username">Pengelola</label>
								<input type="text" class="form-control" id="username" placeholder="Pengelola Asrama">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="username">Pengurus Harian</label>
								<input type="text" class="form-control" id="username" placeholder="Pengurus Harian Asrama">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="username">Pengurus Gedung</label>
								<input type="text" class="form-control" id="username" placeholder="Pengurus Gedung Asrama">
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
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_user">Username</label>
								<input type="text" class="form-control" id="ubah_user" placeholder="Username">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jk">Jenis Kelamin</label>
								<select id="ubah_jk" class="form-control">
									<option value="0">Perempuan</option>
									<option value="1">Laki-laki</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jurusan">Jurusan</label>
								<input type="text" class="form-control" id="ubah_jurusan" placeholder="Jurusan">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_gedung">Gedung</label>
								<select id="ubah_gedung" class="form-control">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_kamar">Kamar</label>
								<input type="text" class="form-control" id="ubah_kamar" placeholder="Kamar">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_no">No Telp.</label>
								<input type="number" maxlength="13" class="form-control" id="ubah_no" placeholder="No Telp">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="ubah_alamat">Alamat</label>
								<input type="text" class="form-control" id="ubah_alamat" placeholder="Alamat">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_pass">Password</label>
								<input type="password" class="form-control" id="ubah_pass" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_cpass">Confirm Password</label>
								<input type="password" class="form-control" id="ubah_cpass" placeholder="Confirm Password">
							</div>
						</div>
					</div>
				</form>
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
						Pengguna
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
	});

	function tambah() {
		if (document.getElementById("alamat").value == "") {
			document.getElementById("alamat").focus();
		}
		if (document.getElementById("no").value == "") {
			document.getElementById("no").focus();
		}
		if (document.getElementById("kamar").value == "") {
			document.getElementById("kamar").focus();
		}
		if (document.getElementById("gedung").value == "") {
			document.getElementById("gedung").focus();
		}
		if (document.getElementById("jurusan").value == "") {
			document.getElementById("jurusan").focus();
		}
		if (document.getElementById("jk").value == "") {
			document.getElementById("jk").focus();
		}
		if (document.getElementById("username").value == "") {
			document.getElementById("username").focus();
		}
		if (document.getElementById("username").value != "" && document.getElementById("jk").value != "" && document.getElementById("jurusan").value != "" &&
			document.getElementById("gedung").value != "" && document.getElementById("kamar").value != "" && document.getElementById("alamat").value != "" && document.getElementById("no").value != "") {
			// console.log("sukses");
			$.ajax({
				type: 'POST',
				data: 'tabel="pengguna"' + '&username=' + document.getElementById("username").value +
					'&jk=' + document.getElementById("jk").value + '&jurusan=' + document.getElementById("jurusan").value +
					'&gedung=' + document.getElementById("gedung").value + '&kamar=' + document.getElementById("kamar").value +
					'&no=' + document.getElementById("no").value + '&alamat=' + document.getElementById("alamat").value,
				url: '<?= base_url() ?>management_control/tambah',
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					document.getElementById("jurusan").value = "";
					document.getElementById("jk").value = "";
					document.getElementById("username").value = "";
					document.getElementById("gedung").value = "";
					document.getElementById("kamar").value = "";
					document.getElementById("no").value = "";
					document.getElementById("alamat").value = "";

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
				"url": "<?php echo site_url("management_control/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "username"
				},
				{
					"data": "jenis_kelamin",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == "0") {
							return "Perempuan"
						} else {
							return "Laki-laki"
						}
					}
				},
				{
					"data": "jurusan"
				},
				{
					"data": "gedung"
				},
				{
					"data": "kamar"
				},
				{
					"data": "rule",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						if (data == 0) {
							return "Super Admin"
						} else if (data == 1) {
							return "Pengurus"
						} else {
							return "Warga"
						}
					}
				},
				{
					"data": "id_pengguna",
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
			url: '<?= base_url() ?>management_control/ubah_list',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				for (var i = 0; i < data.length; i++) {
					document.getElementById("ubah_jurusan").value = data[i].jurusan;
					document.getElementById("ubah_jk").value = data[i].jenis_kelamin;
					document.getElementById("ubah_user").value = data[i].username;
					document.getElementById("ubah_gedung").value = data[i].gedung;
					document.getElementById("ubah_kamar").value = data[i].kamar;
					document.getElementById("ubah_no").value = data[i].no_hp;
					document.getElementById("ubah_alamat").value = data[i].alamat;
					document.getElementById("ubah_pass").value = '';
					document.getElementById("ubah_cpass").value = '';

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
		var cek = 0;
		if (document.getElementById("ubah_cpass").value != '' || document.getElementById("ubah_pass").value != '') {
			if (document.getElementById("ubah_cpass").value != document.getElementById("ubah_pass").value) {
				$("#match-alert").fadeTo(2000, 500).slideUp(500, function() {
					$("#match-alert").slideUp(500);
				});
				cek = 1;
			}
		}
		update(id, cek);
	}

	function update(id, cek) {
		// console.log(document.getElementById("ubah_username").value);
		if (cek == 0) {
			$.ajax({
				type: 'POST',
				data: 'id=' + id + '&user=' + document.getElementById("ubah_user").value +
					'&jk=' + document.getElementById("ubah_jk").value + '&jurusan=' + document.getElementById("ubah_jurusan").value +
					'&gedung=' + document.getElementById("ubah_gedung").value + '&kamar=' + document.getElementById("ubah_kamar").value +
					'&pass=' + document.getElementById("ubah_pass").value +
					'&no=' + document.getElementById("ubah_no").value + '&alamat=' + document.getElementById("ubah_alamat").value,
				url: '<?= base_url() ?>management_control/ubah',
				dataType: 'json',
				success: function(data) {
					// console.log(data);
					$('#ubahModal').modal('hide');

					ambil_data();
				}
			});
		}
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