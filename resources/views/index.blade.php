<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="" />

  <title>IndoEvents</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <!-- nice select  -->
  <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <div class="bg-box">
      <img src="{{ asset('images/hero.jpg') }}" alt="" />
    </div>
    <!-- header section strats -->
    <x-navbar :currentRoute="$currentRoute" />
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <div class="detail-box"
              style="background-color: rgba(0, 0, 0, 0); backdrop-filter: blur(10px); padding: 20px; border-radius: 25%;">
              <h1 style="font-family: 'Playfair Display'; font-style: italic;">Acara Terbaik di Indonesia</h1>
              <p style="font-family: 'Montserrat'; font-size: 20px;">
                Temukan acara terbaik di Indonesia! IndoEvents menghubungkan
                Anda dengan konser, festival, olahraga, dan acara budaya di
                seluruh Indonesia. Beli dan jual tiket dengan mudah di
                platform yang terpercaya!
              </p>
              <div class="btn-box">
                <a href="" class="btn1 browse-btn">Telusuri Acara</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h1 style="font-family: 'Montserrat'">Acara terbaik minggu ini</h1>
      </div>
      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="event" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/hero.jpg" alt="Cover" style="object-fit: cover;" />
                </div>
                <div class="detail-box">
                  <h5>JUDUL JUDUL JUDUL JUDUL</h5>
                  <p>
                    DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
                    DESKRIPSI
                  </p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <div class="options">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h6 style="margin-left: 5px;">10rb pendaftar</h6>
                    </div>
                    <a href="" style="color: white;">
                      Lihat
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="events">Telusuri Lebih Lanjut</a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <x-footer />
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- isotope js -->
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <!-- nice select -->
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>