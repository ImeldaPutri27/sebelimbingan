<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <!-- <a class="nav-brand d-flex align-items-center" href="/" style="font-weight: 900; font-size: 1.5rem; color: #000000ff; text-shadow: 2px 2px 4px rgba(0, 102, 255, 0.5);">
    <img src="{{ asset('img/icons') }}/kukarrr.jpg" width="60" alt="Logo" class="mr-3 rounded-circle mt-1">
    Desa Sebelimbingan
</a> -->
<!-- <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/kukarrr.jpg" width="60" alt="Logo" class="mr-3 rounded-circle mt-1" style="text-shadow: 2px 2px 4px rgba(0, 102, 255, 0.5);"> Desa Sebelimbingan</a> -->
<a class="nav-brand" href="/" style="font-weight: 400; font-size: 1.5rem; color: #000000ff; text-shadow: 2px 2px 4px rgba(0, 102, 255, 0.7);">
    <img src="{{ asset('img/icons') }}/kukarrr.jpg" width="60" alt="Logo" class="mr-3 rounded-circle mt-1">
    Desa Sebelimbingan
</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-primary' : '' }}">Profile Desa</a></li>
                        <li><a href="{{ route('potensi') }}" class="{{ Request::is('potensi') ? 'text-primary' : '' }}">Potensi</a></li>
                        <li>
                            <a href="#" class="{{ in_array(Request::segment(1), ['artikel', 'pengumuman', 'agenda']) ? 'text-primary' : '' }}">Berita</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('artikel') }}" class="{{ Request::segment(1) == 'artikel' ? 'text-primary' : '' }}">Artikel</a></li>
                                <li><a href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                                <li><a href="{{ route('agenda') }}" class="{{ Request::segment(1) == 'agenda' ? 'text-primary' : '' }}">Agenda</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('login') }}" class="{{ Request::is('login') ? 'text-primary' : '' }}">Login</a></li>
                    </ul>

                    <!-- Search Button -->
                    <!-- <div class="search-area">
                        <form action="{{ route('artikel.search') }}" method="GET">
                            <input name="keyword" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> -->

                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>


