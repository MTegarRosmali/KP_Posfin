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

  <title>Direksi dan Komisaris - POSFIN</title>

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

  <!-- breadcumbs  -->
  <div class="breadcumbs py-2  ">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center text-white">
        <h2>Team</h2>
        <ol class="d-flex list-unstyled">
          <li>Home</li>
          <li>Team</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- end breadcumbs -->

  <!-- teams -->
  <div class="teams bg-light mt-5 py-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Komisaris dan Direksi</h2>
      </div>
      <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea
        molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repeliendus enim incidunt assumenda
        pariatur, quisquam evaniet numquam.</p>
      <div class="row">
        <div class="col-md-3" data-aos="fade-up">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/t1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-bold">Haris</h5>
              <p class="card-text text-muted">Komisaris Utama</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/t2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-bold">Sandi Mardiansyah</h5>
              <p class="card-text text-muted">Chief Executive Officer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/t3.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-bold">Lilik Handayani</h5>
              <p class="card-text text-muted">Chief Financial Officer & Risk Management</p>
            </div>
          </div>
        </div>
      </div>
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