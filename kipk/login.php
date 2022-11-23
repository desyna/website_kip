<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Indonesia Pintar Kuliah</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="https://kip-kuliah.kemdikbud.go.id/img/favicon/favicon.ico">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="./css/login.css" rel="stylesheet">
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</head>

<body>
  <div id="app" class="misc-wrapper">
    <div class="misc-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center mb-3">
            <a href="index.php" title="Kembali ke Dashboard">
              <img alt="" src="./img/logo.png" class="logo-icon margin-r-10">
            </a>
            <h3>KARTU INDONESIA PINTAR KULIAH</h3>
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "gagal") {
                echo "<p> <font color=red>Login gagal! username dan password salah</font> </p>";
              } else if ($_GET['pesan'] == "logout") {
                echo "<p> <font color=red>Anda telah berhasil logout</font> </p>";
              } else if ($_GET['pesan'] == "belum_login") {
                echo "<p> <font color=red>Anda harus login untuk mengakses halaman admin</font> </p>";
              }
            } ?>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="misc-box">
              <form id="main-form" role="form" method="POST" action="./pages/cek_login.php">
                <input type="hidden" name="_token" value="q15sMNGZELBSD0Bz4jcXFJyx7BUcDHF0xFVqi8gc">
                <div class="form-group">
                  <label for="no_pendaftaran">No. Pendaftaran</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <iconify-icon icon="material-symbols:person-rounded"></iconify-icon>
                      </span>
                    </div>
                    <input id="no_pendaftaran" name="no_pendaftaran" type="text" value="" placeholder="No. Pendaftaran" class="form-control " required>
                    <!--<span class="icon-user text-muted icon-input"></span>-->
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_akses">Kode Akses</label>
                  <div class="input-group" id="show_hide_password">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <iconify-icon icon="fluent:shield-keyhole-24-filled"></iconify-icon>
                      </span>
                    </div>
                    <input id="kode_akses" name="kode_akses" type="password" placeholder="Kode Akses" class="form-control " required>
                    <div class="input-group-append">
                      <button class="input-group-text" type="button" tabindex="-1"><i class="fa fa-eye" aria-hidden="true">
                          <iconify-icon icon="bx:show"></iconify-icon>
                        </i></button>
                    </div>
                  </div>
                  <div class="text-left">
                    <a href="#" class="btn btn-xs btn-link">Lupa No. Pendaftaran/Kode Akses?</a>
                  </div>
                </div>
                <div class="clearfix">
                  <div class="text-center">
                    <button type="submit" class="btn btn-flat btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Masuk</button>
                  </div>
                  <div class="border border-primary rounded mt-2 p-2 text-center">
                    Belum punya akun? <a href="./pages/form.php">Daftar baru</a>
                  </div>
                </div>
                <hr class="my-1">
                <div class="text-center" style="font-size: 0.85rem;">
                  Belum menerima email akun? <a href="#">Kirim ulang email</a><br />
                  Sudah daftar tapi salah input email? <a href="#">Klaim akun saya</a><br />
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row justify-content-center misc-footer">
          <div class="col-md-6 col-sm-12">
            <p class="small text-center">
              &copy; 2022
              <span id="program-info-text" title="KIPK">
                KIP Kuliah
              </span>|
              <span id="lembaga-info-text" title="Pusat Layanan Pembiayaan Pendidikan; Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia">
                Puslapdik, Kemdikbudristek RI
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>