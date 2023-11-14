<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>Profil - POSFIN</title>
 
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/"><span class="primary">POS</span>FIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link fw-bolder active" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profil">Profil Perusahaan</a></li>
              <li><a class="dropdown-item" href="direksi">Direksi dan Komisaris</a></li>
              <li>
                <a class="dropdown-item" href="core">Core Value Akhlak</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="produk">Produk dan Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="kontak">Kontak Kami</a>
          </li>
          @auth
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link fw-bolder" href="/logout" style="display: inline-block; padding: 4px 10px; font-size: 16px; text-align: center; text-decoration: none; cursor: pointer; border: 1px solid #cf3535; border-radius: 4px; background-color: #cb3232; color: white;">Logout</button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->
  
  <!-- about -->
  <div class="container">
    <div class="row mt-5">
      <div class="container">
        <h2 class="text-center fw-bold mb-2">Profil Perusahaan</h2>
      </div>
    </div>
  </div>
  <!-- end about -->

  <!-- teams -->
  <div class="teams bg-light mt-5 py-5">
    <div class="container">
      <div class="title-container ">
        <h2 class="text-center fw-bold ">PT.Pos Finansial Indonesia</h2>
      </div>
      <p>Sejak 2 April 2001, kami biasa dikenal dengan PT Bhakti Wasantara Net, yaitu sebuah perusahaan yang bergerak di bidang IT Slution dan Managed Service. Pada 24 April 2019, kami memperkenalkan diri sebagai PT Pos Finansial Indonesia (POSFIN), hingga saat ini kami terus didukung oleh PT Pos Indonesia (Persero) dan PT Quantum Akses Nusantara (Bakrie Group) sebagai pemegang saham.</p>
      <p>Berbekal pengalaman selama 18 tahun, kini POSFIN melakukan diversifikasi bisnis layanan jasa keuangan berbasis teknologi. Menggunakan Spesialisasi kami dalam bidang IT solution, kami mampu membuat dan menyediakan platform pembayaran yang lengkap dan sederhana untuk konsumen.</p>
      <p>Melalui dukungan dari PT Pos Indonesia (Persero) sebagai induk perusahaan, kami mendayagunakan 4.800 Kantorpos dan jumlah titik layanan sebanyak 58.700 titik, memberikan kesempatan untuk POSFIN memenuhi kebutuhan masyarakat Indonesia dengan pelayanan yang Prima dan harga kompetitif. Melalui peran serta ini, besar harapan kami untuk mampu berkontribusi meningkatkan pertumbuhan ekonomi pada masyarakat kelas menengah</p>
    </div>
  </div>
  <!-- end teams -->

  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-down bg-darker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; Copyright 2023<strong>PT Pos Finansial Indonesia</strong>. All Right Reserved
            </div>
            <div class="credits">
              Design by me M.Tegar Nurul Fuad Rosmali 203040150
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-linkedin fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- to top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->

  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
  </body>

</html>