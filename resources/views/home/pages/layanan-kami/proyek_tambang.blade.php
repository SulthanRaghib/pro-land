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
            <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang.png') }}" alt="Proyek Tambang Profesional"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Proyek Tambang</h1>
                <p>Layanan pertambangan terintegrasi dan konstruksi infrastruktur tambang terpercaya bersama JAS PRO LAND.
                </p>
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
                                <h1>Proyek Tambang</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Profesional</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menyediakan jasa pengelolaan proyek tambang terpadu, termasuk
                                    konstruksi fasilitas tambang, penyediaan peralatan tambang modern, perizinan resmi,
                                    serta penerapan standar K3 (*Keselamatan dan Kesehatan Kerja*) sesuai regulasi industri
                                    pertambangan Indonesia.
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
                                                    <h3>Manajemen Proyek Tambang Modern</h3>
                                                    <p>JAS PRO LAND membantu pemilik tambang dalam pengelolaan end-to-end
                                                        mulai dari studi kelayakan, konstruksi infrastruktur tambang,
                                                        instalasi mesin produksi, hingga pengawasan operasional tambang.</p>
                                                    <p>Kami memadukan keahlian konstruksi dan teknologi pertambangan untuk
                                                        memastikan setiap proyek tambang berjalan optimal, aman, dan
                                                        menguntungkan.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_img.jpg') }}"
                                                    alt="Konstruksi Tambang JAS PRO LAND" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Studi Kelayakan & Perencanaan</h4>
                                                    <p>Analisis potensi tambang, uji laboratorium material, serta
                                                        perencanaan teknis dan komersial proyek pertambangan.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Pengurusan Perizinan</h4>
                                                    <p>Proses legalitas izin usaha pertambangan (IUP) dan dokumen lingkungan
                                                        secara lengkap dan sah.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Konstruksi Infrastruktur Tambang</h4>
                                                    <p>Pembangunan jalan tambang, area stockpile, kantor operasional, dan
                                                        fasilitas penunjang produksi lainnya.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Instalasi Peralatan Tambang</h4>
                                                    <p>Pemasangan unit crusher, conveyor, genset, serta alat berat sesuai
                                                        standar keselamatan kerja.</p>
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
                                                    <h4>Standar K3 Optimal</h4>
                                                    <p>Penerapan protokol keselamatan kerja pertambangan secara ketat di
                                                        setiap tahapan proyek.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                                    <h4>Perizinan Lengkap</h4>
                                                    <p>Dukungan legalitas penuh sesuai regulasi Kementerian ESDM dan
                                                        pemerintah daerah.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-lightning-charge"></i></div>
                                                    <h4>Efisiensi Produksi</h4>
                                                    <p>Proses konstruksi cepat dan sistem pertambangan modern yang
                                                        meningkatkan produktivitas.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Dukungan Profesional</h4>
                                                    <p>Tim ahli pertambangan dan konstruksi selalu siap mendampingi hingga
                                                        proyek beroperasi optimal.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Proyek Tambang</h3>
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
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_pasir_1.png') }}"
                                                    alt="Proyek Tambang Pasir Serang" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Tambang Pasir Serang</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_pasir_2.png') }}"
                                                    alt="Proyek Tambang Pasir Serang" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Tambang Pasir Serang</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_pasir_3.png') }}"
                                                    alt="Proyek Tambang Pasir Serang" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Tambang Pasir Serang</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_pasir_4.png') }}"
                                                    alt="Proyek Tambang Pasir Serang" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Tambang Pasir Serang</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_tambang_pasir_5.png') }}"
                                                    alt="Proyek Tambang Pasir Serang" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Tambang Pasir Serang</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="service-sidebar" data-aos="fade-left">
                            <div class="action-card" data-aos="zoom-in" data-aos-delay="100">
                                <h3>Konsultasi Proyek Tambang?</h3>
                                <p>Hubungi tim JAS PRO LAND untuk diskusi teknis dan studi kelayakan pertambangan Anda.</p>
                                <a href="{{ route('hubungi.kami') }}" class="btn-primary">Konsultasi Sekarang</a>
                                <span class="guarantee"><i class="bi bi-shield-check"></i> Kepuasan 100% Dijamin</span>
                            </div>
                            <div class="contact-info" data-aos="fade-up" data-aos-delay="200">
                                <h4>Pertanyaan?</h4>
                                <div class="contact-method">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <span>Telepon Kami</span>
                                        <p>
                                            <a href="wa.me/62811135745" target="_blank">+62 811-1357-45</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-method">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div>
                                        <span>Email</span>
                                        <p>
                                            <a href="mailto:prolandjas@gmail.com">prolandjas@gmail.com</a>
                                        </p>
                                        <p>
                                            <a href="mailto:info@jasproland.co.id">info@jasproland.co.id</a>
                                        </p>
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
