<div
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ url('assets/img/logo.webp') }}" alt=""> -->
        <h1 class="sitename">JAS PRO LAND</h1>
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}#beranda" class="{{ Route::is('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('home') }}#tentang-kami">Tentang Kami</a></li>
            <li
                class="dropdown mega-menu-dropdown {{ (Request::is('/') && request()->has('section') && request()->get('section') == 'layanan-kami') || Request::is('layanan*') ? 'active' : '' }}">
                <a href="{{ route('home') }}#layanan-kami"
                    class="{{ (Request::is('/') && request()->has('section') && request()->get('section') == 'layanan-kami') || Request::is('layanan*') ? 'active' : '' }}">
                    <span>Layanan Kami</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                </a>
                <ul class="mega-menu">
                    <div class="row p-3">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('layanan.proyek.bangunan') }}"
                                class="py-3 px-0 {{ Route::is('layanan.proyek.bangunan') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-building" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Proyek <span>Pembangunan</span></h5>
                                        <p style="margin-bottom: 0px;">Layanan konstruksi gedung dan infrastruktur
                                            berkualitas tinggi dengan
                                            perencanaan detail dan hasil tepat waktu.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('layanan.proyek.baja.ringan') }}"
                                class="py-3 px-0 {{ Route::is('layanan.proyek.baja.ringan') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-layers" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Proyek <span>Baja Ringan</span></h5>
                                        <p style="margin-bottom: 0px;">Solusi rangka baja ringan kuat, hemat biaya, dan
                                            cepat pemasangan untuk
                                            proyek
                                            konstruksi modern.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('layanan.proyek.urugan') }}"
                                class="py-3 px-0 {{ Route::is('layanan.proyek.urugan') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-truck" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Proyek <span>Urugan</span></h5>
                                        <p style="margin-bottom: 0px;">Jasa urugan tanah profesional untuk persiapan
                                            lahan
                                            konstruksi yang stabil dan
                                            siap dibangun.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('layanan.proyek.tambang') }}"
                                class="py-3 px-0 {{ Route::is('layanan.proyek.tambang') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-gem" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Proyek <span>Tambang</span></h5>
                                        <p style="margin-bottom: 0px;">Pengelolaan proyek pertambangan dengan perizinan
                                            lengkap dan standar
                                            keselamatan
                                            kerja terbaik.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('layanan.konsultan.properti') }}"
                                class="py-3 px-0 {{ Route::is('layanan.konsultan.properti') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-briefcase" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Konsultan <span>Properti</span></h5>
                                        <p>Pendampingan legalitas, sertifikasi, pembiayaan, pemasaran, dan pembangunan
                                            properti secara terpadu.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('layanan.konsultan.pertambangan') }}"
                                class="py-3 px-0 {{ Route::is('layanan.konsultan.pertambangan') ? 'active-layanan' : '' }}">
                                <div class="d-flex align-items-center position-relative z-1 gap-3">
                                    <div>
                                        <i class="bi bi-bar-chart" style="font-size: 30px;"></i>
                                    </div>
                                    <div style="white-space: normal;">
                                        <h5>Konsultan <span>Pertambangan</span></h5>
                                        <p>Layanan konsultasi perizinan, strategi produksi, dan pengembangan pasar
                                            industri
                                            pertambangan.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </ul>
            </li>
            <li><a href="{{ route('portfolio') }}" class="{{ Route::is('portfolio') ? 'active' : '' }}">Portfolio</a>
            </li>
            <li><a href="{{ route('home') }}#ceo">CEO</a></li>
            <li><a href="{{ route('hubungi.kami') }}" class="{{ Route::is('hubungi.kami') ? 'active' : '' }}">Hubungi
                    Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="#about">Get Started</a>

</div>
