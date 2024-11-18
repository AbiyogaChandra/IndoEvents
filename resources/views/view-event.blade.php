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
    <x-navbar/>

    <div class="container mt-5 mb-5">
        <h1>{{ $event->title }}</h1>
        <p>{{ $event->description }}</p>
        <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($event->event_time)->format('d F Y, h:i A') }}</p>
        <p><strong>Lokasi:</strong> {{ $event->location }}</p>
        <p><strong>Harga Tiket:</strong> Rp{{ number_format($event->ticket_price, 0, ',', '.') }}</p>
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