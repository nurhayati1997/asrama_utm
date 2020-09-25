<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asrama Mahasiswa UTM</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/asramaico.ico" type="image/x-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/css/style.css">

    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Selamat Datang</h2>
                        <div class="form-group">
                            <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <select name="nama" class="form-control" id="nama">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" />
                        </div>
                        <div class="error" id="error"></div>
                        <div class="form-group">
                            <button onclick="login_button()" class="btn btn-primary btn-round ml-auto">Login</button>
                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url() ?>asset_login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a class="signup-image-link">Asrama Mahasiswa Universitas Trunojoyo Madura</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        log_in();

        function log_in() {
            $.ajax({
                type: 'get',
                data: 'target=pengguna',
                url: '<?= base_url() ?>login_control/ambilData',
                dataType: 'json',
                success: function(data) {
                    var baris = '<option value="">- Pilih Pengguna -</option>';
                    for (var i = 0; i < data.length; i++) {
                        baris += '<option value="' + data[i].id_pengguna + '">' + data[i].username + ' | ' + data[i].jurusan + '</option>';
                    }
                    // console.log(baris);
                    $("#nama").html(baris);
                }
            });
        }

        function login_button() {
            $.ajax({
                type: 'POST',
                data: 'nama=' + document.getElementById("nama").value + '&pass=' + document.getElementById("pass").value,
                url: '<?= base_url() ?>login_control/coba',
                dataType: 'json',
                success: function(data) {
                    if (data == '') {
                        location.replace("<?= base_url() ?>login_control");
                    } else {
                        $("#error").html(data);
                    }
                }
            });
        }
    </script>
</body>

</html>