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
            <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan.png') }}" alt="Proyek Baja Ringan"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Proyek Baja Ringan</h1>
                <p>Solusi rangka baja ringan profesional untuk konstruksi lebih cepat, kuat, dan hemat biaya bersama JAS PRO
                    LAND.</p>
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
                                <h1>Proyek Baja Ringan</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Unggulan</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menghadirkan layanan konstruksi rangka baja ringan berkualitas tinggi
                                    untuk pembangunan rumah tinggal, gedung komersial, dan proyek properti lainnya di
                                    seluruh Indonesia.
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
                                                    <h3>Rangka Baja Ringan untuk Konstruksi Modern</h3>
                                                    <p>JAS PRO LAND menggunakan material baja ringan bersertifikasi SNI yang
                                                        terbukti kokoh, tahan karat, dan memiliki umur pakai lebih panjang
                                                        dibanding rangka kayu konvensional.</p>
                                                    <p>Dengan konstruksi baja ringan, proyek bangunan Anda dapat
                                                        diselesaikan lebih cepat, efisien, dan presisi sesuai desain yang
                                                        diinginkan.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_img.jpg') }}"
                                                    alt="Konstruksi Baja Ringan JAS PRO LAND" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Konsultasi & Survey Lokasi</h4>
                                                    <p>Kami melakukan survey lokasi proyek untuk menentukan kebutuhan rangka
                                                        baja ringan yang tepat.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Desain Struktur Baja Ringan</h4>
                                                    <p>Penyusunan desain rangka baja ringan sesuai spesifikasi proyek
                                                        konstruksi Anda.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Produksi & Persiapan Material</h4>
                                                    <p>Proses fabrikasi rangka baja ringan berkualitas tinggi yang siap
                                                        pasang.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Pemasangan & Finishing</h4>
                                                    <p>Instalasi rangka baja ringan oleh tim ahli konstruksi dengan
                                                        pengawasan ketat.</p>
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
                                                    <h4>Konstruksi Tahan Lama</h4>
                                                    <p>Rangka baja ringan anti rayap, tahan api, dan minim perawatan jangka
                                                        panjang.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-clock-history"></i></div>
                                                    <h4>Proses Cepat</h4>
                                                    <p>Pengerjaan konstruksi baja ringan lebih cepat dibanding sistem
                                                        tradisional.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-currency-dollar"></i></div>
                                                    <h4>Hemat Biaya</h4>
                                                    <p>Harga proyek baja ringan transparan dan kompetitif sesuai kebutuhan
                                                        proyek.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Dukungan Profesional</h4>
                                                    <p>Tim JAS PRO LAND siap membantu Anda dari perencanaan hingga serah
                                                        terima proyek.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Proyek Baja Ringan</h3>
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
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_1.png') }}"
                                                    alt="Proyek Rangka Baja Ringan Rajeg Ciry Mansion" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Ringan Rajeg Ciry Mansion</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_2.png') }}"
                                                    alt="Proyek Rangka Baja Ringan Garden City Balaraja" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Ringan Garden City Balaraja</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_3.png') }}"
                                                    alt="Proyek Rangka Baja Ringan Granada Rajeg City" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Ringan Granada Rajeg City</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_4.png') }}"
                                                    alt="Proyek Rangka Baja Ringan Puri Sepatan" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Ringan Puri Sepatan</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_5.png') }}"
                                                    alt="Proyek Rangka Baja Garden City Solear" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Garden City Solear</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_baja_ringan_6.png') }}"
                                                    alt="Proyek Rangka Baja Sukamahan Asri" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Rangka Baja Sukamahan Asri</h5>
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
                                <h3>Konsultasi Proyek Baja Ringan?</h3>
                                <p>Hubungi JAS PRO LAND untuk mendapatkan solusi konstruksi baja ringan terbaik.</p>
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
