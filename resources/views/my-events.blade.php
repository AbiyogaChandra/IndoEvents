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
    <x-navbar :currentRoute="$currentRoute" />
    
    <div class="container mt-5 mb-5">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Acara Saya</h1>
            <div class="btn-box">
                <a href="/create-event" class="submit-btn">Buat Acara</a>
            </div>
        </div>

        <!-- Events Table -->
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Waktu</th>
                    <th scope="col" class="text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>Event Title</td>
                    <td>4.5</td>
                    <td>March 10, 2025, 6:00 PM</td>
                    <td class="text-center">
                        <a href="/view-event/1" class="btn btn-info btn-sm me-2">
                            <i class="fa fa-eye"></i> 
                        </a>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(1)">
                            <i class="far fa-trash-can"></i>
                        </button>
                    </td>
                </tr>
                <!-- Repeat rows as necessary for each event -->
            </tbody>
        </table>
    </div>

    <x-footer />

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