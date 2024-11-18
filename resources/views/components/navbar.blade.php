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
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item {{ $currentRoute === 'events' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('events') }}">Telusuri Acara</a>
                        </li>
                        @auth
                            <li class="nav-item {{ $currentRoute === 'my-events' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('my-events') }}">Acara Saya</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route(name: 'register') }}">Buat Acara</a>
                            </li>
                        @endauth
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('events') }}">Telusuri Acara</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my-events') }}">Acara Saya</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Buat Acara</a>
                            </li>
                        @endauth
                    @endif
                </ul>
                <div class="user_option ms-auto text-center">
                    @auth
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center p-2 shadow-sm" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #fff; border-radius: 50px;">
                                <img src="{{ Auth::user()->profile?->profile_photo ? asset('storage/' . Auth::user()->profile->profile_photo) : asset('images/placeholder.jpg') }}" 
                                    class="rounded-circle me-2 border" 
                                    width="40" height="40" alt="User Profile">
                                <span class="fw-semibold" style="color: #333;">{{ auth()->user()->username }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('settings') }}">
                                        <i class="fas fa-cog me-2" style="color: #6c757d;"></i> Pengaturan
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt me-2" style="color: #dc3545;"></i> Keluar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('register') }}" class="order_online">Buat Akun</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</header>