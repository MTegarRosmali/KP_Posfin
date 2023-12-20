<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Beranda - POSFIN</title>
</head>

<body>
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
              <li><a class="dropdown-item" href="core">Core Value Akhlak</a></li>
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
          @else 
          <li class="nav-item" style="margin-left: 20px">
            <a class="nav-link fw-bolder" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)
      <div class="carousel-item w-100 {{ $index === 0 ? 'active' : '' }}">
        <img src="image/{{ $slider->image }}" class="d-block carousel-img" alt="..." style="object-fit:cover ; width:100%" />
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $slider->title }}</h5>
          <p>{{ $slider->description }}</p>
        </div>
      </div>
      @endforeach
      
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->

  <!-- about us -->
  <div class="about-us mt-5">
    <div class="container">
      <div class="title-container text-center ">
        <h2 class="fw-bold">Tentang Kami</h2>
      </div>
      <div class="row mt-5 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <<img src="assets/img/11.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">DIGITAL PAYMENT</h5>
                <p class="card-text">  •	Digital Payment Solution </p>
                <p class="card-text">  •	Bill Payment Services </p>
                <p class="card-text">  •	Biller Aggregator </p>
                <p class="card-text">  •	Switching Platfrom Provider </p>
                <p class="card-text">  •	Digital Remittance & Lending </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 justify-content-center">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <img src="assets/img/12.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">DIGITAL SOLUTION</h5>
                <p class="card-text">  •	Platfrom Provider </p>
                <p class="card-text">  •	Web Solution </p>
                <p class="card-text">  •	Apps Solution </p>
                <p class="card-text">  •	Network & Security Services </p>
                <p class="card-text">  •	Data Analytic Services</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->

  <!-- services -->
  <div class="services mt-5 bg-warning py-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">POSPAY AGEN</h2>
      </div>
      <p class="text-center mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
        aliquam.
      </p>
      <div class="row mt-5 d-flex justify-content-center align-items-center">
        <div class="col-md-4 " width="">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/ju.png" alt="">
              </div>
              <div class="card-title fw-bolder mt-4">Mobile Version</div>
              <p class="card-description mt-3">
                Download di Playstore
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-7 justify-content-center">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/bg.png" alt="">
              </div>
              <div class="card-title fw-bolder mt-4">Website Version</div>
              <p class="card-description mt-3"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Berita</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex portfolio-filters">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
            <li data-filter=".filter-web" class="py-2 px-4">Web</li>
            <li data-filter=".filter-design" class="py-2 px-4">Design</li>
            <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="mansory portfolio-container">
            <div class="mansory-sizer"></div>
            @foreach ($beritas as $berita)
            <div class="mansory-item m-2 portfolio-item filter-web">
              <img src="/image/{{ $berita->image }}" alt="" class="img-fluid" />
            </div> 
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="clients mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Mitra Kami</h2>
      </div>
      <div class="row mt-5">
        @foreach ($clients as $client)
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <img src="/image/{{ $client->image }}" class="img-fluid brand-image" alt="" />
        </div>   
        @endforeach
      </div>
    </div>
  </div>
  <!-- end clients -->

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