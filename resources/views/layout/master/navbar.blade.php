<div class="branding">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logo-sia.png" alt="">
            <h1 class="sitename">SIA<br></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('blog') }}" class="{{ Request::routeIs('blog') || Request::routeIs('blog.*') ? 'active' : '' }}">Berita</a></li> 
                <li><a href="{{ route('team') }}" class="{{ Request::routeIs('team') ? 'active' : '' }}">Dosen</a></li>
                <li><a href="{{ route('portfolio') }}" class="{{ Request::routeIs('portfolio') ? 'active' : '' }}">Galeri</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</div>