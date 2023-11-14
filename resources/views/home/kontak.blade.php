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

    <title>Kontak Kami - POSFIN</title>

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

    <!-- contact -->
    <div class="contact mb-5">
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2101996238108!2d107.63106074657505!3d-6.909631615815493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b2a94c39ed%3A0xc707cc25a4174da!2sPT%20POS%20FINANSIAL%20INDONESIA%20(POSFIN)!5e0!3m2!1sid!2sid!4v1692816222868!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Location</h4>
                                        <p class="ms-5">{{ $contact->alamat }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Email</h4>
                                        <p class="ms-5">{{ $contact->email }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Phone</h4>
                                        <p class="ms-5">{{ $contact->telepon }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body px-4">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <button type="submit" class="btn btn-submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer class="mt-5">
        <div class="footer-down bg-darker text-white px-5 py-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <div class="copyright">
                  &copy; Copyright 2023 | <strong>PT Pos Finansial Indonesia</strong> All Right Reserved
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
                  <a href="https://www.instagram.com/posfin.official/#" class="mx-2">
                    <i class="fab fa-instagram fa-2x"></i>
                  </a>
                  <a href="https://www.youtube.com/posfin7030" class="mx-2">
                    <i class="fab fa-youtube fa-2x"></i>
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