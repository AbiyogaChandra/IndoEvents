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
            <div class="detail-box">
              <h1 class="fancy_title">Acara Terbaik di Indonesia</h1>
              <p>
                Temukan acara terbaik di Indonesia! IndoEvents menghubungkan
                Anda dengan konser, festival, olahraga, dan acara budaya di
                seluruh Indonesia. Beli dan jual tiket dengan mudah di
                platform yang terpercaya!
              </p>
              <div class="btn-box mt-5">
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
        <h1 class="section_title">Acara terbaik minggu ini</h1>
      </div>
      <div class="filters-content">
        <div class="row grid">
          @foreach($popularEvents as $event)
            <div class="col-sm-6 col-lg-4 all">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="{{ asset($event->photo ? 'storage/' . $event->photo : 'images/hero.jpg') }}" alt="Cover" />
                  </div>
                  <div class="detail-box">
                    <h5>{{ $event->title }}</h5>
                    <p>{{ Str::limit($event->description, 100) }}</p>
                    @for($i = 1; $i <= 5; $i++)
                      <i class="fa{{ $i <= round($event->averageRating) ? '' : 'r' }} fa-star" aria-hidden="true"></i>
                    @endfor
                    <div class="options">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h6 class="ms-1">{{ number_format($event->registrantsCount) }} pendaftar</h6>
                      </div>
                      <div class="btn-box">
                        <a href="{{ route('event.show', $event->id) }}" class="view-btn">
                          Lihat
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="d-flex btn-box mt-5 justify-content-center">
        <a href="{{ route('events') }}">Telusuri Lebih Lanjut</a>
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
  <!-- isotope js -->
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <!-- nice select -->
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>