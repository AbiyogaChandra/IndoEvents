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

    #codelabel {
      font-weight: bold;
    }

    #codelabel:hover {
      cursor: grab;
      text-decoration: underline;
    }

    .star-rating {
        display: flex;
        direction: row;
        justify-content: center;
    }

    .star-rating i {
        font-size: 2rem;
        color: #ff6060;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .star-rating i.selected,
    .star-rating i:hover,
    .star-rating i:hover ~ i {
        color: #FF6060; /* Active color for the stars */
    }

    .star-rating i:hover ~ i {
        color: #ddd; /* Reset other stars on hover */
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
          <h5 style="color: gray"><i class="fa-regular fa-calendar fa-fw"></i><span>
              {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, j F Y') }}</span></h5>
          <h5 style="color: gray"><i class="fa-regular fa-clock fa-fw"></i><span>
              {{ \Carbon\Carbon::parse($event->event_time)->format('H:i') }}</span></h5>
          <h5 style="color: gray"><i class="fa-solid fa-location-dot fa-fw"></i><span> {{ $event->location }}</span>
          </h5>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="container" style="border: 2px solid gray; border-radius: 22px; padding: 20px">
              <div class="d-flex justify-content-center">
                <h3>Rp{{ number_format($event->ticket_price, 0, ',', '.') }}</h3>
              </div>
              <br>
              <div class="btn-box d-flex justify-content-center">
                @auth
                  <button id="ticket-btn">Beli Tiket</button>
                @else
                  <a href="{{ route('register') }}">Beli Tiket</a>
                @endauth
              </div>
              <br>
              <div class="d-flex justify-content-center">
                <h6 style="color: gray">{{ format_number($registrantsCount) }} orang telah mendaftar!</h6>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="container" style="border-radius: 22px; padding: 20px">
              <div class="d-flex justify-content-center h3" style="color: #ff6060">
                @for ($i = 1; $i <= 5; $i++)
                  <i class="fa{{ $i <= round($averageRating) ? '' : 'r' }} fa-star" aria-hidden="true"></i>
                @endfor
              </div>
              <div class="d-flex justify-content-center">
                <h6 style="color: gray">dari {{ format_number($reviewsCount) }} orang</h6>
              </div>
              <br>
              <div class="btn-box d-flex justify-content-center" style="color: white">
                @auth
                  <a href="#" id="review-btn">Beri Skor</a>
                @else
                  <a href="{{ route('register') }}">Beri Skor</a>
                @endauth
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
                  <h6 style="color: gray">{{'@' . $event->profile->user->username ?? 'Tidak diketahui' }}</h6>
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

  @auth
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
            <span id="transaction-price">Rp{{ number_format($event->ticket_price, 0, ',', '.') }}</span>
          </div>
          <div class="btn-box">
            <button type="submit" class="submit-btn" id="pay-button">
              <span id="pay-label">Bayar</span>
              <span id="loadingIcon" class="spinner-border spinner-border-sm d-none" role="status"
                  aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-3">
            <h4>Pembayaran Berhasil!</h4>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <a id="qrcode" href="" download>
              <img src="" alt="QR" height="200px">
            </a>
            <span id="qrcodeLoading" class="spinner-border spinner-border-sm d-none" role="status"
                  aria-hidden="true"></span>
          </div>
          <div class="d-flex justify-content-center align-items-center mb-3">
            <span style="color: gray">Kode Tiket: <span id="codelabel"></span></span>
            <span id="codelabelLoading" class="spinner-border spinner-border-sm d-none" role="status"
                  aria-hidden="true"></span>
          </div>
          <div class="d-flex justify-content-center text-center mb-3">
            <h5>Simpan kode tersebut dengan baik!</h5>
          </div>
          <div class="d-flex justify-content-center text-center mb-3">
            <h5 style="color: red; font-weight: bold">Jangan membagikan kode tersebut kepada orang lain, kecuali panitia acara!</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-3">
            <h4>Pemberian Skor</h4>
          </div>
          <div class="d-flex justify-content-center text-center mb-3">
            <form action="{{ route('review.store', $event->id) }}" method="POST">
              @csrf
              <div class="form-group">
                <div class="star-rating display-6 mb-3">
                  <i class="far fa-star" data-value="1"></i>
                  <i class="far fa-star" data-value="2"></i>
                  <i class="far fa-star" data-value="3"></i>
                  <i class="far fa-star" data-value="4"></i>
                  <i class="far fa-star" data-value="5"></i>
                </div>
              </div>
              <input type="hidden" name="rating" id="rating">
              <button type="submit" class="btn btn-primary" style="color: white">Beri Skor</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>

  <script type="module">
    const payModal = new bootstrap.Modal(document.getElementById("paymentModal"));
    const reviewModal = new bootstrap.Modal(document.getElementById("reviewModal"));
    const successModal = new bootstrap.Modal(document.getElementById("successModal"));
    const qrCodeLink = document.querySelector("#successModal #qrcode");
    const qrCodeImage = document.querySelector("#successModal #qrcode img");
    const codeLabel = document.querySelector("#successModal #codelabel");

    const stars = document.querySelectorAll('.star-rating i');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
      star.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        ratingInput.value = value;

        stars.forEach(star => {
          if (star.getAttribute('data-value') <= value) {
            star.classList.remove('far');
            star.classList.add('fas');
          } else {
            star.classList.remove('fas');
            star.classList.add('far');
          }
        });
      });
    });

    codeLabel.addEventListener("click", function () {
      navigator.clipboard.writeText(codeLabel.textContent);
      alert("Kode telah disalin");
    });

    document.getElementById("review-btn").addEventListener("click", function () {
      reviewModal.show();
    });

    document.getElementById("ticket-btn").addEventListener("click", function () {
      payModal.show();
    });

    document.getElementById('pay-button').onclick = function () {
      document.getElementById("pay-button").disabled = true;
      document.getElementById("pay-label").classList.add("d-none");
      document.getElementById("loadingIcon").classList.remove("d-none");
      fetch("{{ route('payment.create', $event->id) }}")
        .then(response => response.json())
        .then(data => {
          snap.pay(data.snapToken, {
            onSuccess: function (result) {
              payModal.hide();
              document.getElementById("qrcodeLoading").classList.remove("d-none");
              document.getElementById("codelabelLoading").classList.remove("d-none");
              qrCodeImage.classList.add("d-none");
              codeLabel.classList.add("d-none");
              successModal.show();
              console.log(result);

              fetch(`{{ url('/payment/update') }}/${data.transaction.id}`)
                .then(response => response.json())
                .then(data => {
                  qrCodeLink.href = data.qrCodePath;
                  qrCodeImage.src = data.qrCodePath;
                  codeLabel.textContent = data.code;
                  document.getElementById("qrcodeLoading").classList.add("d-none");
                  document.getElementById("codelabelLoading").classList.add("d-none");
                  qrCodeImage.classList.remove("d-none");
                  codeLabel.classList.remove("d-none");
                  console.log("Transaction updated successfully", data);
                })
                .catch(error => {
                  console.error("Error updating transaction:", error);
                });
            },
            onPending: function (result) {
              console.log(result);
            },
            onClose: function (result) {
              console.log(result);
            },
            onError: function (result) {
              console.log(result);
            }
          });
        })
        .catch(error => console.error("Error fetching transaction data:", error))
        .finally(() => {
          document.getElementById("pay-button").disabled = false;
          document.getElementById("pay-label").classList.remove("d-none");
          document.getElementById("loadingIcon").classList.add("d-none");
        });
    };

  </script>
  @endauth

</body>

</html>