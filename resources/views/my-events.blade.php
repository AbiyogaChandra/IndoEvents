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
                @forelse ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fa{{ $i <= round($event->averageRating) ? '' : 'r' }} fa-star" aria-hidden="true"></i>
                            @endfor
                        </td>
                        <td>{{ \Carbon\Carbon::parse($event->event_time)->format('d F Y, h:i A') }}</td>
                        <td class="text-center">
                            <a href="{{ route('view-event', $event->id) }}" class="btn btn-info btn-sm me-2">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('edit-event', $event->id) }}" class="btn btn-primary btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event?')">
                                    <i class="far fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada acara ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $events->links('pagination::bootstrap-5') }}
        </div>
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