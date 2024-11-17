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
          <h1 class="title">{{ $event->title }}</h1>
          <h6 class="description lh-base">{{ $event->description }}</h6>
          <br>
          <br>
          <h5 style="color: gray"><i class="fa-regular fa-calendar fa-fw"></i><span> {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, j F Y') }}</span></h5>
          <h5 style="color: gray"><i class="fa-regular fa-clock fa-fw"></i><span> {{ \Carbon\Carbon::parse($event->event_time)->format('H:i') }}</span></h5>
          <h5 style="color: gray"><i class="fa-solid fa-location-dot fa-fw"></i><span> {{ $event->location }}</span></h5>
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
                <h3>Rp{{ number_format($event->ticket_price, 0, ',', '.') }}</h3>
              </div>
              <br>
              <div class="btn-box d-flex justify-content-center">
                <button id="ticket-btn">Beli Tiket</button>
                <span id="loadingIcon" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
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
                  <h5>{{ $event->profile->display_name ?? 'Tidak diketahui' }}</h5>
                  <h6 style="color: gray">{{ $event->profile->user->username ?? 'Tidak diketahui' }}</h6>
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
            @auth
            <div class="container mt-4 mb-5" style="border: 2px solid gray; border-radius: 22px; padding: 20px">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/pfp.jpg') }}" alt="User avatar"
                  width="60" height="60" />
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
            @endauth
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/pfp.jpg') }}" alt="avatar"
                  width="60" height="60" />
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
              <hr style="margin-top: 20px" />
            </div>
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/pfp.jpg') }}" alt="avatar"
                  width="60" height="60" />
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
              <hr style="margin-top: 20px" />
            </div>
            <div class="row">
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/pfp.jpg') }}" alt="avatar"
                  width="60" height="60" />
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
              <hr style="margin-top: 20px" />
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

  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <h4>Harga</h4>
              <span id="transaction-price"></span>
            </div>
            <div class="btn-box">
              <button type="submit" class="submit-btn" id="pay-button">Bayar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    
  <script type="module">
    document.getElementById("ticket-btn").addEventListener("click", function () {
      
      document.getElementById("ticket-btn").classList.add("d-none");
      document.getElementById("loadingIcon").classList.remove("d-none");

      fetch("{{ route('payment.create') }}")
        .then(response => response.json())
        .then(data => {
            document.getElementById("transaction-price").textContent = data.transaction.price;
            new bootstrap.Modal(document.getElementById("paymentModal")).show();
            document.getElementById('pay-button').onclick = function () {
              snap.pay(data.snapToken, {
                onSuccess: function (result) {
                  myModal.hide();
                  console.log(result);
                },
                onPending: function (result) {
                  console.log(result);
                },
                onError: function (result) {
                  console.log(result);
                }
              });
            };
        })
        .catch(error => console.error("Error fetching transaction data:", error))
        .finally(() => {
            document.getElementById("ticket-btn").classList.remove("d-none");
            document.getElementById("loadingIcon").classList.add("d-none");
        });
    });
  </script>

  @if (isset($asdasd))
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <h4>Harga</h4>
              {{ $transaction->price }}
            </div>
            <div class="btn-box">
              <button type="submit" class="submit-btn" id="pay-button">Bayar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="module">
      var myModal = new bootstrap.Modal(document.getElementById("paymentModal"), {});
      myModal.show();
      document.getElementById('pay-button').onclick = function () {
        snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
          myModal.hide();
          console.log(result);
        },
        onPending: function (result) {
          console.log(result);
        },
        onError: function (result) {
          console.log(result);
        }
        });
      };
    </script>
  @endif

</body>

</html>