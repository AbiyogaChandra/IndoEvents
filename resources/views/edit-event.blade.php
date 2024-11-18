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
        <h1>Ubah Acara</h1>
        <form action="{{ route('submit-request') }}" method="POST">
            @csrf
            <input type="hidden" name="type" value="update">
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $event->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="event_time" class="form-label">Waktu Acara</label>
                <input type="datetime-local" class="form-control" id="event_time" name="event_time" value="{{ \Carbon\Carbon::parse($event->event_time)->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}" required>
            </div>
            <div class="mb-3">
                <label for="ticket_price" class="form-label">Harga Tiket</label>
                <input type="number" class="form-control" id="ticket_price" name="ticket_price" value="{{ $event->ticket_price }}" required>
            </div>
            <button type="submit" class="btn btn-primary" style="color: white">Kirim Permintaan</button>
        </form>
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