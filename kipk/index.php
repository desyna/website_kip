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
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <!--Navbar Start-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="logo text-uppercase" href="/">
        <img src="./img/logo.png" alt="" class="logo-light" height="60" />
        <img src="./img/logo.png" alt="" class="logo-dark" height="60" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        <iconify-icon icon="material-symbols:menu-rounded"></iconify-icon>
        <!-- <i class="mdi mdi-menu">
        </i> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
          <li class="nav-item active">
            <a href="#home" class="nav-link">Beranda
            </a>
          </li>
          <li class="nav-item">
            <a href="#jadwal" class="nav-link">Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a href="#berita" class="nav-link">Berita
            </a>
          </li>
          <li class="nav-item">
            <a href="#profil" class="nav-link">Profil Perguruan Tinggi
            </a>
          </li>
          <li class="nav-item">
            <a href="#kontak" class="nav-link">Kontak Kami
            </a>
          </li>
        </ul>
        <button onclick="window.location.href = 'login.php'" class="btn btn-info navbar-btn text-light">Login Siswa
        </button>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Content start -->
  <!-- home start -->
  <section class="bg-home bg-hexa" id="home">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleControls" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="home-center">
            <div class="home-desc-center">
              <div class="container-fluid">
                <!-- row -->
                <div class="row align-items-center">
                  <div class="col-lg-6 order-last-">
                    <div class="home-title mo-mb-20 text-white">
                      <h1 class="mb-4 text-white fw-bold">
                        KIP Kuliah Jalur Seleksi Mandiri PTN/PTS </h1>
                      <p class="text-white-50 home-desc">
                      <p>Siswa KIP Kuliah yang masih belum beruntung di Jalur Seleksi SNMPTN/SNMPN atau UTBK-SBMPTN/SBMPN, masih ada kesempatan untuk mencoba di Jalur Seleksi Mandiri PTN atau PTS. Silahkan melengkapi berkas pendaftaran di SIM KIP Kuliah dan memilih Seleksi Mandiri PTN/PTS sebelum melakukan registrasi di PT tujuan.&nbsp;</p>
                      <p>Semangat menggapai asa!</p>
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                    <div class="home-img position-relative">
                      <img src="./uploads/KIPK_3f2acc.png" alt="" class="home-first-img">
                      <!-- <img src="https://kip-kuliah.kemdikbud.go.id/img/kartu-kipk.png" alt="" class="home-second-img mx-auto d-block"> -->
                      <!--<img src="https://kip-kuliah.kemdikbud.go.id/img/kartu-kipk.png" alt="" class="home-third-img">-->
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container-fluid -->
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- home end -->
  <!-- clients start -->
  <section class="p-0" id="nav-panduan">
    <div class="container-fluid">
      <div class="clients p-4 bg-white">
        <div class="row">
          <div class="col-md-4 offset-lg-2 offset-md-2">
            <div class="client-images">
              <a href="https://kip-kuliah.kemdikbud.go.id/siswa/auth/login">
                <img src="./img/ICO3.svg" alt="logo-img" class="mx-auto img-fluid d-block">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="client-images">
              <a href="panduan.php">
                <img src="./img/ICO4.svg" alt="logo-img" class="mx-auto img-fluid d-block">
              </a>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end container-fluid -->
  </section>
  <!-- clients end -->
  <!-- features start -->
  <section class="section bg-light pt-2" id="jadwal">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="text-center mb-4 pb-1">
            <h2 class="mb-3">Jadwal Kartu Indonesia Pintar Kuliah
            </h2>
            <p class="text-muted">Tanggal penting jadwal pendaftaran dan penutupan Kartu Indonesia Pintar Kuliah Tahun 2022
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="text-center">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#
                    </th>
                    <th>Kegiatan
                    </th>
                    <th>Dibuka
                    </th>
                    <th>Ditutup
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      Pendaftaran Akun Siswa KIP-Kuliah
                    </td>
                    <td>
                      02 Februari 2022
                    </td>
                    <td>
                      31 Oktober 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      SNMPN
                    </td>
                    <td>
                      07 Februari 2022
                    </td>
                    <td>
                      17 Maret 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      SNMPTN
                    </td>
                    <td>
                      13 Februari 2022
                    </td>
                    <td>
                      27 Februari 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      UTBK-SBMPTN
                    </td>
                    <td>
                      22 Maret 2022
                    </td>
                    <td>
                      14 April 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      SBMPN
                    </td>
                    <td>
                      05 April 2022
                    </td>
                    <td>
                      29 Juni 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      Seleksi Mandiri PTN
                    </td>
                    <td>
                      01 Juni 2022
                    </td>
                    <td>
                      07 Oktober 2022
                    </td>
                  </tr>
                  <tr>
                    <td>
                      7
                    </td>
                    <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                      Seleksi Mandiri PTS
                    </td>
                    <td>
                      08 Juni 2022
                    </td>
                    <td>
                      31 Oktober 2022
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <span>
            <b>Keterangan:
            </b>
            <br> Jadwal dapat berubah sewaktu-waktu
          </span>
        </div>
      </div>
    </div>
    <!-- end container-fluid -->
  </section>
  <!-- features end -->
  <!-- footer start -->
  <footer class="bg-dark footer">
    <div class="container-fluid">
      <!-- end row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left pull-none">
            <p class="text-white-50">
              Hak Cipta &copy; 2020-2022 Kartu Indonesia Pintar Kuliah<br />
              Pusat Layanan Pembiayaan Pendidikan<br />
              Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia
            </p>
          </div>
          <div class="float-right pull-none">
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- container-fluid -->
  </footer>
  <!-- footer end -->











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>