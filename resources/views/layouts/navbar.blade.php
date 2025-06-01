 <div
     class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

     <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         <!-- Uncomment the line below if you also wish to use an image logo -->
         <!-- <img src="{{ url('assets/img/logo.webp') }}" alt=""> -->
         <h1 class="sitename">JAS PRO LAND</h1>
     </a>

     <nav id="navmenu" class="navmenu">
         <ul>
             <li><a href="{{ route('home') }}#hero" class="{{ Route::is('home') ? 'active' : '' }}">Beranda</a></li>
             <li><a href="{{ route('home') }}#about">Tentang Kami</a></li>
             <li><a href="{{ route('home') }}#services">Layanan Kami</a></li>
             <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
             <li><a href="{{ route('home') }}#team">CEO</a></li>
             <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                         class="bi bi-chevron-down toggle-dropdown"></i></a>
                 <ul>
                     <li><a href="#">Dropdown 1</a></li>
                     <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                 class="bi bi-chevron-down toggle-dropdown"></i></a>
                         <ul>
                             <li><a href="#">Deep Dropdown 1</a></li>
                             <li><a href="#">Deep Dropdown 2</a></li>
                             <li><a href="#">Deep Dropdown 3</a></li>
                             <li><a href="#">Deep Dropdown 4</a></li>
                             <li><a href="#">Deep Dropdown 5</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Dropdown 2</a></li>
                     <li><a href="#">Dropdown 3</a></li>
                     <li><a href="#">Dropdown 4</a></li>
                 </ul>
             </li>
             <li><a href="{{ route('hubungi.kami') }}" class="{{ Route::is('hubungi.kami') ? 'active' : '' }}">Hubungi
                     Kami</a></li>
         </ul>
         <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
     </nav>

     <a class="btn-getstarted" href="#about">Get Started</a>

 </div>
