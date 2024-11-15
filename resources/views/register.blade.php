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

    @vite(['resources/scss/bootstrap.scss', 'resources/scss/app.scss', 'resources/js/app.js'])
    <!-- toggle password visiblity css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toggle-password-visibility.css') }}" />
    <!-- nice select  -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}"/>
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

  </head>

  <body>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex min-vh-100" style="background-color: #eae7dc;">
      <div class="container-fluid auth">
        <div class="row justify-content-center align-items-center d-flex-row text-center h-100">
          <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-4 h-50 ">
            <div class="card shadow">
              <div class="card-body mx-auto">
                <h4 class="card-title mt-3 mb-3 text-center montserrat">Buat Akun</h4>
                @if ($errors->any())
                  <div class="alert alert-danger">
                    {{ $errors->first() }}
                  </div>
                @endif
                <form action="api/register" method="POST">
                  @csrf
                  <div class="mb-3 input-group">
                    <div class="d-flex input-group-prepend">
                      <span class="input-group-text text-black-50"> <i class="fa fa-user fa-fw"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="Nama Akun" type="text" autocomplete="username">
                  </div>
                  <div class="mb-3 input-group">
                    <div class="d-flex input-group-prepend">
                      <span class="input-group-text text-black-50"> <i class="fa fa-envelope fa-fw"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Alamat E-Mail" type="email" autocomplete="email">
                  </div>
                  <div class="mb-3 input-group">
                    <div class="d-flex input-group-prepend">
                      <span class="input-group-text text-black-50"> <i class="fa fa-lock fa-fw"></i> </span>
                    </div>
                    <input name="password" type="password" data-toggle="password" class="form-control" placeholder="Kata sandi" autocomplete="new-password">
                    <div class="input-group-text">
                      <button type="button" class="btn border-0 btn-toggle-password-visibility"></button>
                    </div>
                  </div>
                  <div class="mb-3 input-group">
                    <div class="d-flex input-group-prepend">
                      <span class="input-group-text text-black-50"> <i class="fa fa-lock fa-fw"></i> </span>
                    </div>
                    <input name="password_confirmation" type="password" data-toggle="password" class="form-control" placeholder="Ulangi kata sandi" autocomplete="current-password">
                    <div class="input-group-text">
                      <button type="button" class="btn border-0 btn-toggle-password-visibility"></button>
                    </div>
                  </div>
                  <div class="mb-3 btn-box">
                    <input type="submit" class="submit-btn rounded w-100" value="Buat Akun">
                  </div>
                </form>
                <p class="text-muted font-weight-bold ">
                  <span>ATAU</span>
                </p>
                <p>
                  <a href="auth/google/redirect" class="btn btn-block google-login-button w-100">
                    <i class="fa-brands fa-google me-2"></i>Gunakan Akun Google
                  </a>
                </p>
                <p class="text-center">Sudah punya akun?
                  <a class="link-primary" href="login">Masuk</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- toggle password visibility js -->
    <script src="{{ asset('js/toggle-password-visibility.js') }}"></script>
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
