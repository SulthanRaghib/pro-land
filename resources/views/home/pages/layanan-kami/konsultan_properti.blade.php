@extends('homepage')
@section('content')
    @push('styles')
        <style>
            .portfolio-item img {
                width: 100%;
                height: 300px;
                object-fit: cover;
                object-position: center;
                display: block;
            }
        </style>
    @endpush
    <main class="main">
        <!-- Page Title -->
        <div class="page-title position-relative overflow-hidden" data-aos="fade">
            <img src="{{ asset('assets/img/jas_pro_land/konsultan_properti.png') }}" alt="Konsultan Properti Profesional"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Konsultan Properti</h1>
                <p>Jasa Konsultan Properti Terpercaya untuk Pengembangan, Legalitas, dan Pemasaran Properti Anda bersama JAS
                    PRO LAND.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="current">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">

                    <div class="col-lg-8 order-lg-1 order-2">
                        <div class="service-main-content">
                            <div class="service-header" data-aos="fade-up">
                                <h1>Konsultan Properti Profesional</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Premium</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menyediakan layanan konsultan properti lengkap untuk memaksimalkan
                                    potensi investasi properti Anda. Dari analisis pasar, pendampingan legalitas, hingga
                                    strategi pemasaran yang efektif, kami membantu pemilik dan developer properti
                                    menciptakan nilai tambah secara optimal.
                                </p>
                            </div>

                            <div class="service-tabs" data-aos="fade-up" data-aos-delay="200">
                                <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#service-details-tab-1" type="button" role="tab"
                                            aria-controls="overview" aria-selected="true">
                                            <i class="bi bi-info-circle"></i> Overview
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#service-details-tab-2" type="button" role="tab"
                                            aria-controls="process" aria-selected="false">
                                            <i class="bi bi-diagram-3"></i> Process
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#service-details-tab-3" type="button" role="tab"
                                            aria-controls="benefits" aria-selected="false">
                                            <i class="bi bi-graph-up-arrow"></i> Benefits
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <!-- Overview -->
                                    <div class="tab-pane fade show active" id="service-details-tab-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="content-block">
                                                    <h3>Jasa Konsultan Properti Terpadu</h3>
                                                    <p>Tim konsultan properti JAS PRO LAND memiliki pengalaman panjang dalam
                                                        membantu klien dari tahap perencanaan, perizinan, hingga pemasaran
                                                        properti di seluruh Indonesia.</p>
                                                    <p>Kami memastikan setiap proyek properti berjalan sesuai regulasi
                                                        hukum, tepat sasaran pasar, dan mengoptimalkan nilai investasi Anda.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/konsultan_properti_img.jpg') }}"
                                                    alt="Konsultan Properti JAS PRO LAND" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Konsultasi Awal & Analisis Pasar</h4>
                                                    <p>Kami mempelajari kebutuhan properti Anda, riset lokasi, dan potensi
                                                        pasar properti secara detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Pendampingan Legalitas</h4>
                                                    <p>Tim ahli kami membantu pengurusan izin mendirikan bangunan (IMB),
                                                        sertifikat tanah, dan perizinan properti lainnya.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Strategi Pengembangan Properti</h4>
                                                    <p>Perencanaan desain, konsep pengembangan, dan pengelolaan proyek
                                                        properti secara menyeluruh.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Pemasaran & Penjualan Properti</h4>
                                                    <p>Strategi pemasaran digital, offline, dan relasi agen properti untuk
                                                        memastikan properti Anda cepat terjual.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Benefits -->
                                    <div class="tab-pane fade" id="service-details-tab-3" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-shield-check"></i></div>
                                                    <h4>Legalitas Terjamin</h4>
                                                    <p>Kami memastikan seluruh proses perizinan dan sertifikasi properti
                                                        sesuai regulasi terbaru.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                                    <h4>Nilai Investasi Meningkat</h4>
                                                    <p>Properti Anda lebih bernilai dengan strategi pengembangan yang
                                                        terukur dan profesional.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-megaphone"></i></div>
                                                    <h4>Pemasaran Efektif</h4>
                                                    <p>Jaringan pemasaran kami membantu menjangkau calon pembeli secara luas
                                                        dan tepat sasaran.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Dukungan Konsultan Ahli</h4>
                                                    <p>Tim profesional JAS PRO LAND mendampingi setiap tahapan proyek Anda
                                                        hingga sukses.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Konsultasi & Proyek Properti</h3>
                                <div class="service-details-slider swiper init-swiper">
                                    <script type="application/json" class="swiper-config">
                                        {
                                            "loop": true,
                                            "speed": 800,
                                            "autoplay": {"delay": 5000},
                                            "slidesPerView": 1,
                                            "spaceBetween": 30,
                                            "breakpoints": {"768": {"slidesPerView": 2}},
                                            "pagination": {
                                                "el": ".swiper-pagination",
                                                "type": "bullets",
                                                "clickable": true
                                            }
                                        }
                                    </script>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/konsultan_1.jpg') }}"
                                                    alt="Pendampingan Legalitas Properti" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Pendampingan Legalitas Properti</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/konsultan_2.jpg') }}"
                                                    alt="Pengembangan Proyek Perumahan" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Pengembangan Proyek Perumahan</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/konsultan_3.jpg') }}"
                                                    alt="Pemasaran Properti Digital" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Pemasaran Properti Digital</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="service-sidebar" data-aos="fade-left">
                            <div class="action-card" data-aos="zoom-in" data-aos-delay="100">
                                <h3>Konsultasi Properti Sekarang</h3>
                                <p>Hubungi JAS PRO LAND untuk solusi pengelolaan dan pengembangan properti terbaik.</p>
                                <a href="{{ route('hubungi.kami') }}" class="btn-primary">Hubungi Kami</a>
                                <span class="guarantee"><i class="bi bi-shield-check"></i> Kepuasan 100% Dijamin</span>
                            </div>
                            <div class="contact-info" data-aos="fade-up" data-aos-delay="200">
                                <h4>Pertanyaan?</h4>
                                <div class="contact-method">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <span>Telepon Kami</span>
                                        <p><a href="wa.me/62811135745" target="_blank">+62 811-1357-45</a></p>
                                    </div>
                                </div>
                                <div class="contact-method">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div>
                                        <span>Email</span>
                                        <p><a href="mailto:prolandjas@gmail.com">prolandjas@gmail.com</a></p>
                                        <p><a href="mailto:info@jasproland.co.id">info@jasproland.co.id</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
