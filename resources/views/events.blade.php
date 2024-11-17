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
    .search {
      width: 60%;
      max-width: 750px;
      margin-bottom: auto;
      margin-top: 75px;
      height: 70px;
      background-color: #fff;
      padding: 10px;
      border-radius: 45px;
    }

    .search-input {
      color: white;
      border: 0;
      outline: 0;
      background: none;
      width: 0;
      margin-top: 5px;
      caret-color: transparent;
      line-height: 40px;
      transition: width 0.4s linear;

    }

    .search .search-input {
      padding: 0 10px;
      width: 90%;
      caret-color: #536bf6;
      font-size: 21px;
      font-weight: 300;
      color: black;
      transition: width 0.4s linear;
    }

    .search-icon {
      height: 50px;
      width: 50px;
      padding: 0px !important;
      margin: 0px !important;
      float: right;
      display: flex !important;
      justify-content: center;
      align-items: center;
      border-radius: 45px;
      color: white;
    }

    .nice-select {
      width: 200px;
    }

    @media only screen and (max-width: 1000px) {
      .search .search-input {
        width: 80%;
      }
    }

    @media only screen and (max-width: 540px) {
      .search .search-input {
        width: 70%;
      }
    }
  </style>

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
          <div class="col-md-12 col-lg-12">
            <div class="detail-box">
              <h1 class="fancy_title text-center">Cari acara yang menarik!</h1>
              <div class="d-flex justify-content-center h-100">
                <div class="search">
                  <input type="text" class="search-input" placeholder="Cari..." name="">
                  <a href="#" class="search-icon">
                    <i class="fa fa-search"></i>
                  </a>
                </div>
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
    <div class="container d-flex justify-content-center">
      <div class="row w-100">
        <!-- Sidebar Column for Filters -->
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="filter-box" style="padding: 20px; border: 2px solid gray; border-radius: 22px">
            <h3>Filter Acara</h3>
            <hr>
            <form>
              <div class="form-group">
                <label for="location">Lokasi:</label>
                <br>
                <select id="location" class="form-select">
                  <option value="jakarta">Jakarta</option>
                  <option value="surabaya">Surabaya</option>
                  <option value="bandung">Bandung</option>
                  <!-- Add more locations as needed -->
                </select>
              </div>
              <br>
              <div class="form-group">
                <label for="date">Tanggal:</label>
                <br>
                <input type="date" id="date" class="form-control" />
              </div>
              <div class="btn-box">
                <button type="submit" class="submit-btn mt-4">Terapkan Filter</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Main Content Column -->
        <div class="col-lg-9 col-md-8 d-flex justify-content-center">
          <div class="w-100">
              <div class="d-flex align-items-center">
                  <h2 class="section_title">Acara-Acara</h2>
                  <span class="ms-auto">Urutkan dari:</span>
                  <form method="GET" class="d-flex">
                    <select name="filter" class="form-select w-auto ms-3" onchange="this.form.submit()">
                      <option value="recent" {{ $filter === 'recent' ? 'selected' : '' }}>Terbaru</option>
                      <option value="follower" {{ $filter === 'follower' ? 'selected' : '' }}>Pendaftar Terbanyak</option>
                      <option value="score" {{ $filter === 'score' ? 'selected' : '' }}>Skor Tertinggi</option>
                    </select>
                  </form>
              </div>
              <div class="row grid">
                  @forelse ($events as $event)
                      <div class="col-sm-12 col-lg-6 all">
                          <div class="box">
                              <div>
                                  <div class="img-box">
                                      <img src="{{ asset($event->photo ? 'storage/' . $event->photo : 'images/hero.jpg') }}" alt="Cover" />
                                  </div>
                                  <div class="detail-box mt-2">
                                      <h5>{{ Str::limit($event->title, 50) }}</h5>
                                      <p>{{ Str::limit($event->description, 150) }}</p>
                                      @for ($i = 1; $i <= 5; $i++)
                                          <i class="fa{{ $i <= round($event->avg_rating) ? '' : 'r' }} fa-star" aria-hidden="true"></i>
                                      @endfor
                                      <div class="options">
                                          <div class="d-flex align-items-center">
                                              <i class="fa fa-user" aria-hidden="true"></i>
                                              <h6 class="ms-1">{{ format_number($event->registrants_count) }} pendaftar</h6>
                                          </div>
                                          <div class="btn-box">
                                              <a href="{{ route('event.show', $event->id) }}">
                                                  Lihat
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @empty
                      <p class="text-center">Tidak ada acara ditemukan.</p>
                  @endforelse
              </div>
          </div>
        </div>
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
  <!--script src="{{ asset('js/jquery.nice-select.min.js') }}"></script-->
  <!-- custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>