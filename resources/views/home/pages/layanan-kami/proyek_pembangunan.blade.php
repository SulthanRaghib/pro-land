@extends('homepage')
@section('content')
    @push('styles')
        <style>
            /* Pastikan container gambar punya ukuran tetap */
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
            <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan.png') }}" alt="Proyek Pembangunan"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Proyek Pembangunan</h1>
                <p>Mewujudkan konstruksi berkualitas tinggi yang tepat waktu dan sesuai standar terbaik industri bersama JAS
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
                                <h1>Proyek Pembangunan</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Premium</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                    {{-- <span><i class="bi bi-star-fill"></i> 5.0/5 Rating</span> --}}
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menghadirkan layanan konstruksi profesional untuk berbagai proyek
                                    pembangunan gedung, perumahan, dan infrastruktur skala kecil maupun besar di seluruh
                                    Indonesia.
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
                                                    <h3>Konstruksi Berkualitas Tinggi</h3>
                                                    <p>Kami mengutamakan standar mutu dalam setiap tahap pembangunan. Tim
                                                        profesional kami berpengalaman menangani proyek gedung bertingkat,
                                                        perumahan modern, serta fasilitas publik.</p>
                                                    <p>Didukung teknologi terbaru dan pengawasan ketat, kami memastikan
                                                        hasil
                                                        konstruksi yang kokoh, tepat waktu, dan sesuai spesifikasi.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/pembangunan_img.jpg') }}"
                                                    alt="Proyek Pembangunan Gedung" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Survey & Perencanaan</h4>
                                                    <p>Melakukan analisis kebutuhan proyek, studi lokasi, dan penyusunan
                                                        rencana konstruksi detail.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Desain & Persiapan Material</h4>
                                                    <p>Menyiapkan desain teknis dan spesifikasi material sesuai standar mutu
                                                        konstruksi.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Pengerjaan Konstruksi</h4>
                                                    <p>Pelaksanaan pembangunan oleh tenaga profesional dengan pengawasan
                                                        ketat setiap tahap.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Quality Control & Serah Terima</h4>
                                                    <p>Pengecekan akhir untuk memastikan kualitas, keamanan, dan kesiapan
                                                        penggunaan proyek.</p>
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
                                                    <h4>Konstruksi Aman & Tahan Lama</h4>
                                                    <p>Setiap bangunan dirancang untuk ketahanan maksimal dan keselamatan
                                                        penghuni.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-clock-history"></i></div>
                                                    <h4>Tepat Waktu</h4>
                                                    <p>Proyek diselesaikan sesuai jadwal tanpa mengurangi kualitas
                                                        pekerjaan.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-currency-dollar"></i></div>
                                                    <h4>Efisiensi Biaya</h4>
                                                    <p>Solusi pembangunan yang hemat biaya dengan anggaran transparan.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Dukungan Profesional</h4>
                                                    <p>Tim ahli siap membantu Anda mulai perencanaan hingga serah terima
                                                        proyek.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Proyek Kami</h3>
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
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serang.png') }}"
                                                    alt="Proyek Pembangunan Rumah Klasik Modern Serang" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Rumah Klasik Modern Serang</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serangg.png') }}"
                                                    alt="Proyek Pembangunan Rumah Klasik Modern Serang" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Rumah Klasik Modern Serang</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serang_2.png') }}"
                                                    alt="Proyek Pembangunan Rumah Klasik Modern Serang 2"
                                                    class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Rumah Klasik Modern Serang 2</h5>
                                                    {{-- <p>Lingkungan nyaman dan berkelanjutan.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serangg_2.png') }}"
                                                    alt="Proyek Pembangunan Rumah Klasik Modern Serang" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Rumah Klasik Modern Serang 2</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_cafe_saung_serang.png') }}"
                                                    alt="Proyek Pembangunan Cafe Saung Serang" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Cafe Saung Serang</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_cafe_saung_serangg.png') }}"
                                                    alt="Proyek Pembangunan Cafe Saung Serang" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Cafe Saung Serang</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_pembangunan_ruko_dan_rumah_subsidi_mitra_garden_serang.png') }}"
                                                    alt="Proyek Pembangunan Ruko dan Rumah Subsidi Mitra Garden Serang"
                                                    class="img-fluid" loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Pembangunan Ruko dan Rumah Subsidi Mitra Garden Serang</h5>
                                                    {{-- <p>Proyek selesai tepat waktu dan sesuai spesifikasi.</p> --}}
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
                                <h3>Tertarik Membangun Bersama Kami?</h3>
                                <p>Hubungi tim PT. JAS PRO LAND untuk konsultasi gratis mengenai proyek pembangunan Anda.
                                </p>
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
                                            <a href="https://wa.me/62811135745" class="text-decoration-none"
                                                target="_blank">
                                                +62 811-1357-45</a>
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
