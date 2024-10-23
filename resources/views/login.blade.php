<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="" />

    <title>IndoEvents</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4.css') }}" />
    <!-- nice select  -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}"/>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <style>
      a {
        color: #ff6060;
      }

      a:hover {
        color: #dd6060;
      }
    </style>

  </head>

  <body>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex" style="min-height: 100vh; background-size: cover; background-color: #eae7dc;">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex-row text-center h-100">
          <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-4 h-50 ">
            <div class="card shadow">
              <div class="card-body mx-auto">
                <h4 class="card-title mt-3 text-center" style="font-family: 'Montserrat'">Masuk</h4>
                @if ($errors->any())
                  <div style="color: red;">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action="api/login">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-envelope fa-fw"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Alamat E-Mail" type="email">
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock fa-fw"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Kata sandi" type="password">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" style="background-color: #FF6060;" value="Masuk">
                  </div>
                </form>
                <p class="text-muted font-weight-bold ">
                  <span>ATAU</span>
                </p>
                <p>
                  <a href="auth/google/redirect" class="btn btn-block google-login-button">
                    <i class="fa-brands fa-google mr-2"></i>Gunakan Akun Google
                  </a>
                </p>
                <p class="text-center">Belum punya akun?
                  <a href="register">Buat Akun</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
   </section>

    <!-- jQery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap4.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- nice select -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
