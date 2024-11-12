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
        .main-body {
            padding: 15px;
        }

        .settings-container {
            min-height: 500px; /* Adjust this value as needed */
        }

        .nav-link {
            color: #4a5568;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }

        /* Override active tab link color */
    .nav-pills .nav-link.active, 
    .nav-pills .show > .nav-link {
        background-color: #FF6060; /* Set to your primary color */
        color: white; /* Set active text color */
    }

    .nav-link:not(.active):hover, .nav-link:not(.active):focus {
        color: #FF6060 !important;
        text-decoration: none;
    }

    /* Ensure icon colors match */
    .nav-pills .nav-link .feather {
        stroke: currentColor;
    }

    .upload-label {
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        background-color: rgba(0, 0, 0, 0.4); 
        opacity: 0; 
        transition: opacity 0.3s;
        border-radius: 50%;
    }

    .profile-photo-container:hover .upload-label {
        opacity: 1;
    }
    </style>

</head>

<body>
    <x-navbar />
    @auth
    <div class="container settings-container mt-5 mb-5">
        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                                class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user me-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profil
                            </a>
                            <a href="#account" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" role="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings me-2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Akun
                            </a>
                            <a href="#security" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" role="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shield me-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Keamanan
                            </a>
                            <a href="#billing" id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing" role="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card me-2">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>Transaksi
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none" role="navigation">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#account" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" role="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#security" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" role="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#billing" id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing" role="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <h6>PENGATURAN PROFIL</h6>
                            <hr>
                            <form>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            Foto Profil
                                            <div class="profile-photo-container mb-4" style="position: relative; width: 128px; height: 128px;">
                                                <img id="selectedAvatar" src="{{ Auth::user()->profile?->profile_photo ? asset('storage/' . Auth::user()->profile->profile_photo) : asset('images/placeholder.jpg') }}"
                                                    class="rounded-circle mt-2" style="width: 128px; height: 128px; object-fit: cover;" alt="example placeholder" />

                                                <label for="profilePhoto" class="mt-2 upload-label text-white d-flex justify-content-center align-items-center">
                                                    <div class="text-center">
                                                        <i class="fs-3 fa fa-file-image" aria-hidden="true"></i><br>
                                                        Unggah Foto
                                                    </div>
                                                </label>

                                                <input type="file" class="form-control d-none" id="profilePhoto" name="profilePhoto"
                                                    onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group mb-3">
                                            <label for="fullName">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="fullName"
                                                aria-describedby="fullNameHelp" placeholder="Masukkan nama lengkapmu"
                                                value="{{ auth()->user()->profile?->display_name }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-primary" style="color: white">Simpan Perubahan</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="account" role="tabpanel">
                            <h6>PENGATURAN AKUN</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="username">Nama Akun</label>
                                    <input type="text" class="form-control" id="username"
                                        aria-describedby="usernameHelp" placeholder="Masukkan nama akunmu"
                                        value="abiyogachandra">
                                    <small id="usernameHelp" class="form-text text-muted">Setelah mengganti nama akunmu, nama akunmu yang lama dapat digunakan oleh orang lain.</small>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-primary" style="color: white">Simpan Perubahan</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="security" role="tabpanel">
                            <h6>PENGATURAN KEAMANAN</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block">Ganti Kata Sandi</label>
                                    <input type="text" class="form-control" placeholder="Masukkan kata sandimu saat ini">
                                    <input type="text" class="form-control mt-3" placeholder="Masukkan kata sandi baru">
                                    <input type="text" class="form-control mt-3" placeholder="Ulangi kata sandi baru">
                                </div>
                            </form>
                            <hr>
                            <button type="button" class="btn btn-primary" style="color: white">Simpan Perubahan</button>
                        </div>
                        <div class="tab-pane" id="billing" role="tabpanel">
                            <h6>RIWAYAT TRANSAKSI</h6>
                            <hr>
                            <form>
                                <div class="form-group mb-0">
                                    <label class="d-block">Riwayat Transaksi</label>
                                    <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">Belum ada transaksi.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth

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

    <script>
        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</body>

</html>