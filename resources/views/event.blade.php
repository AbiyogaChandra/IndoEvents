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

  @vite(['resources/scss/bootstrap.scss', 'resources/scss/app.scss', 'resources/js/app.js'])
  <!-- nice select  -->
  <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

  <style>
    button {
      background-color: #ff6060; 
      border: none; 
      color: white; 
      border-radius: 45px; 
      padding: 10px 55px;
    }

    .event-actions a,
    .report-comment {
      color: #ff6060;
    }

    .event-actions a:hover,
    .report-comment:hover {
      color: #dd6060;
    }
  </style>

</head>

<body>
  <div class="hero_area">
    <x-navbar />

    <!-- slider section -->
    <section class="slider_section"
      style="background-image: url('{{ asset('images/event.jpg') }}'); background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->

  </div>
  <br>
  <br>
  <section class="food_section layout_padding-bottom event">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="title">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</h1>
          <h4 class="description">DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI
            DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI </h4>
          <br>
          <br>
          <h5 style="color: gray"><i class="fa-regular fa-calendar fa-fw"></i><span> Senin, November 11</span></h5>
          <h5 style="color: gray"><i class="fa-regular fa-clock fa-fw"></i><span> 07:00 - 15:00</span></h5>
          <h5 style="color: gray"><i class="fa-solid fa-location-dot fa-fw"></i><span> LOKASI LOKASI LOKASI LOKASI LOKASI LOKASI LOKASI LOKASI</span></h5>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div class="col-4">
        <div class="row">
            <div class="container" style="border-radius: 22px; padding: 20px">
              <div class="d-flex justify-content-center h3" style="color: gold">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="d-flex justify-content-center">
                <h6 style="color: gray">dari 3rb orang</h6>
              </div>
              <br>
              <div class="btn-box d-flex justify-content-center" style="color: white">
                <a href="">Beri Skor</a>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="container" style="border: 2px solid gray; border-radius: 22px; padding: 20px">
              <div class="d-flex justify-content-center">
                <h3>Rp50.000</h3>
              </div>
              <br>
              <div class="btn-box d-flex justify-content-center">
                <a href="">Beli Tiket</a>
              </div>
              <br>
              <div class="d-flex justify-content-center">
                <h6 style="color: gray">10rb orang telah mendaftar!</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-5">
          <div class="container" style="border: solid 2px gray; border-radius: 22px; padding: 20px">
            <h4>Pembuat Acara</h4>
            <br>
            <div class="row">
              <div class="col-4">
                <img src="{{ asset('images/pfp.jpg') }}" style="border-radius: 50%" height="128px">
              </div>
              <div class="col-8">
                <div class="row">
                  <h5>DISPLAY NAME DISPLAY NAME</h5>
                  <h6 style="color: gray">@USERNAME_USERNAME</h6>
                </div>
                <br>
                <div class="row">
                  <div class="container">
                    <div class="btn-box d-flex justify-content-center">
                      <a href="">Kunjungi</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-7">
          <div class="d-flex justify-content-end align-items-end">
            <div class="event-actions">
              <a href="" class="fw-bold">
                <i class="fa-solid fa-flag"></i> Laporkan
              </a><br>
              <a href="" class="fw-bold">
                <i class="fa-solid fa-share-nodes"></i> Bagikan
              </a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-12">
          <h2 class="section_title">Komentar</h2>
          <div class="container" style="border: 2px solid gray; border-radius: 22px; padding: 20px">
            <div class="container mt-4 mb-5" style="border: 2px solid gray; border-radius: 22px; padding: 20px">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="{{ asset('images/pfp.jpg') }}" alt="User avatar" width="60" height="60" />
                <div class="w-100">
                  <h6 class="fw-bold mb-1">DISPLAY NAME DISPLAY NAME</h6>
                  <span style="color: gray">@USERNAME_USERNAME</span>
                  <div class="mt-3">
                    <textarea class="form-control" rows="3" placeholder="Tulis komentar Anda..."></textarea>
                  </div>
                  <div class="mt-3 d-flex justify-content-end btn-box">
                    <a href="">Kirim</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="{{ asset('images/pfp.jpg') }}" alt="avatar" width="60"
                  height="60" />
                <div>
                  <div class="d-flex align-items-start">
                    <div>
                      <h6 class="fw-bold mb-1">DIPLAY NAME DISPLAY NAME</h6>
                      <span style="color: gray">@USERNAME_USERNAME</span>
                    </div>
                    <div class="d-flex ms-auto">
                      11 November 2024
                    </div>
                  </div>
                  <p class="mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled it.
                  </p>
                  <br>
                  <a href="" class="report-comment fw-bold">
                    <i class="fa-solid fa-flag"></i> Laporkan
                  </a>
                </div>
              </div>
              <hr style="margin-top: 20px"/>
            </div>
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="{{ asset('images/pfp.jpg') }}" alt="avatar" width="60"
                  height="60" />
                <div>
                  <div class="d-flex align-items-start">
                    <div>
                      <h6 class="fw-bold mb-1">DIPLAY NAME DISPLAY NAME</h6>
                      <span style="color: gray">@USERNAME_USERNAME</span>
                    </div>
                    <div class="d-flex ms-auto">
                      11 November 2024
                    </div>
                  </div>
                  <p class="mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled it.
                  </p>
                  <br>
                  <a href="" class="report-comment fw-bold">
                    <i class="fa-solid fa-flag"></i> Laporkan
                  </a>
                </div>
              </div>
              <hr style="margin-top: 20px"/>
            </div>
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="{{ asset('images/pfp.jpg') }}" alt="avatar" width="60"
                  height="60" />
                <div>
                  <div class="d-flex align-items-start">
                    <div>
                      <h6 class="fw-bold mb-1">DIPLAY NAME DISPLAY NAME</h6>
                      <span style="color: gray">@USERNAME_USERNAME</span>
                    </div>
                    <div class="d-flex ms-auto">
                      11 November 2024
                    </div>
                  </div>
                  <p class="mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled it.
                  </p>
                  <br>
                  <a href="" class="report-comment fw-bold">
                    <i class="fa-solid fa-flag"></i> Laporkan
                  </a>
                </div>
              </div>
              <hr style="margin-top: 20px"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <x-footer />
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <!-- isotope js -->
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <!-- nice select -->
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>