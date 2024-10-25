@props(['currentRoute'])
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" height="48px" />
                <span class="left">Indo</span>
                <span class="right">Events</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-1">
                    @if (isset($currentRoute))
                        <li class="nav-item {{ $currentRoute === 'home' ? 'active' : '' }}">
                            <a class="nav-link" href="home">Beranda</a>
                        </li>
                        <li class="nav-item {{ $currentRoute === 'events' ? 'active' : '' }}">
                            <a class="nav-link" href="events">Telusuri Acara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">Buat Acara</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events">Telusuri Acara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Buat Acara</a>
                        </li>
                    @endif
                    @auth
                        @if(auth()->user()->level == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="admin">Panel Admin</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                <div class="user_option ms-auto">
                    @auth
                        <a href="api/logout" class="order_online">Keluar</a>
                    @else
                        <a href="register" class="order_online">Buat Akun</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</header>