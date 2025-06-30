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
            <img src="{{ asset('assets/img/jas_pro_land/konsultan_tambang.png') }}" alt="Konsultan Pertambangan"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Konsultan Pertambangan</h1>
                <p>Layanan konsultasi pertambangan terpadu untuk legalitas, perencanaan produksi, hingga pengembangan pasar
                    bersama JAS PRO LAND.</p>
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
                                <h1>Konsultan Pertambangan Profesional</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Unggulan</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menawarkan jasa konsultan pertambangan komprehensif, mulai dari
                                    perizinan tambang, studi kelayakan, perencanaan produksi mineral dan batu bara, hingga
                                    strategi pengembangan bisnis pertambangan di Indonesia.
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
                                                    <h3>Solusi Konsultan Pertambangan Terintegrasi</h3>
                                                    <p>JAS PRO LAND mendampingi perusahaan tambang dalam proses
                                                        <strong>perizinan usaha pertambangan (IUP)</strong>, pengurusan
                                                        dokumen legal, serta pembuatan studi kelayakan teknis dan finansial
                                                        tambang.
                                                    </p>
                                                    <p>Kami juga membantu klien merancang <strong>rencana produksi
                                                            pertambangan</strong>, manajemen keselamatan kerja (K3),
                                                        pengendalian dampak lingkungan, dan strategi pemasaran komoditas
                                                        tambang.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/konsultan_tambang_img.jpg') }}"
                                                    alt="Jasa Konsultan Pertambangan Profesional JAS PRO LAND"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Kajian Awal & Survey Lokasi</h4>
                                                    <p>Analisis potensi cadangan mineral dan identifikasi kebutuhan
                                                        perizinan tambang.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Penyusunan Studi Kelayakan</h4>
                                                    <p>Pembuatan dokumen feasibility study mencakup aspek teknis, finansial,
                                                        dan lingkungan.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Perizinan & Dokumen Legal</h4>
                                                    <p>Pengurusan izin usaha pertambangan, AMDAL, Rencana Kerja Anggaran
                                                        Biaya (RKAB), dan sertifikasi K3.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Implementasi & Pengawasan</h4>
                                                    <p>Pendampingan implementasi operasi produksi hingga monitoring kualitas
                                                        hasil tambang.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Benefits -->
                                    <div class="tab-pane fade" id="service-details-tab-3" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-check-circle"></i></div>
                                                    <h4>Legalitas Lengkap</h4>
                                                    <p>Seluruh proses perizinan pertambangan dijalankan sesuai regulasi
                                                        pemerintah Indonesia.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-graph-up"></i></div>
                                                    <h4>Efisiensi Biaya Produksi</h4>
                                                    <p>Strategi produksi pertambangan dirancang agar lebih hemat dan
                                                        optimal.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-shield-lock"></i></div>
                                                    <h4>Keamanan & K3</h4>
                                                    <p>Prosedur keselamatan kerja pertambangan diterapkan dengan pengawasan
                                                        ketat.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Tim Konsultan Berpengalaman</h4>
                                                    <p>Kami memiliki tim ahli pertambangan yang siap membantu Anda setiap
                                                        tahap.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Proyek Konsultasi Pertambangan</h3>
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
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pertambangan_1.jpg') }}"
                                                    alt="Survey Cadangan Mineral Sumatera" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Survey Cadangan Mineral Sumatera</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pertambangan_2.jpg') }}"
                                                    alt="Penyusunan Feasibility Study Kalimantan" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Feasibility Study Kalimantan</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pertambangan_3.jpg') }}"
                                                    alt="Pengawasan Produksi Batu Bara" class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Pengawasan Produksi Batu Bara</h5>
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
                                <h3>Konsultasi Pertambangan?</h3>
                                <p>Hubungi tim JAS PRO LAND untuk mendapatkan solusi pertambangan terbaik sesuai kebutuhan
                                    proyek Anda.</p>
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
                                            <a href="https://wa.me/62811135745" target="_blank">+62 811-1357-45</a>
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
