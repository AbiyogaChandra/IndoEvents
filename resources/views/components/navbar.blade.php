@props(['currentRoute'])
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="home">
                <img src="{{ asset('images/logo.png') }}" height="48px" />
                <span class="left">Indo</span>
                <span class="right">Events</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-1">
                    <li class="nav-item {{ $currentRoute === 'home' ? 'active' : '' }}">
                        <a class="nav-link" href="home">Beranda</a>
                    </li>
                    <li class="nav-item {{ $currentRoute === 'events' ? 'active' : '' }}">
                        <a class="nav-link" href="events">Telusuri Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">Buat Acara</a>
                    </li>
                </ul>
                <div class="user_option ml-auto">
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