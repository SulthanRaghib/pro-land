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
            <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan.png') }}" alt="Proyek Urugan"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white py-5">
                <h1>Detail Layanan Proyek Urugan</h1>
                <p>Persiapan lahan yang stabil, rata, dan siap bangun dengan proses urugan tanah profesional.</p>
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
                                <h1>Proyek Urugan</h1>
                                <div class="service-meta">
                                    <span><i class="bi bi-award"></i> Layanan Premium</span>
                                    <span><i class="bi bi-clock"></i> Sejak 2025</span>
                                </div>
                                <p class="lead">
                                    PT. JAS PRO LAND menyediakan jasa urugan tanah untuk persiapan pondasi bangunan,
                                    perataan lahan proyek perumahan, industri, maupun infrastruktur lainnya. Kami
                                    menggunakan peralatan modern dan tim berpengalaman untuk memastikan hasil yang presisi
                                    dan berkualitas.
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
                                                    <h3>Persiapan Lahan yang Optimal</h3>
                                                    <p>Kami melakukan penimbunan dan perataan tanah dengan teknik sesuai
                                                        spesifikasi teknis proyek, termasuk pemadatan bertahap agar pondasi
                                                        bangunan kokoh dan stabil.</p>
                                                    <p>Dengan dukungan alat berat modern dan pengawasan profesional, layanan
                                                        urugan kami memastikan lahan siap digunakan sesuai jadwal
                                                        pembangunan Anda.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan_img.jpg') }}"
                                                    alt="Proyek Urugan Tanah" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Process -->
                                    <div class="tab-pane fade" id="service-details-tab-2" role="tabpanel">
                                        <div class="process-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-marker">01</div>
                                                <div class="timeline-content">
                                                    <h4>Survey Lokasi & Analisa Kebutuhan</h4>
                                                    <p>Melakukan pengecekan kondisi lahan, jenis tanah, dan kebutuhan
                                                        ketinggian urugan.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">02</div>
                                                <div class="timeline-content">
                                                    <h4>Persiapan Material Urugan</h4>
                                                    <p>Menentukan jenis material pengurugan (tanah merah, batu kapur, dll.)
                                                        sesuai rencana kerja.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">03</div>
                                                <div class="timeline-content">
                                                    <h4>Proses Urugan & Pemadatan</h4>
                                                    <p>Penimbunan bertahap dengan alat berat dan pemadatan setiap lapisan
                                                        untuk mencegah penurunan tanah.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker">04</div>
                                                <div class="timeline-content">
                                                    <h4>Pemeriksaan Kualitas & Serah Terima</h4>
                                                    <p>Quality control akhir memastikan ketinggian, kemiringan, dan kekuatan
                                                        lahan sesuai standar.</p>
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
                                                    <h4>Lahan Stabil & Aman</h4>
                                                    <p>Siap menopang struktur bangunan tanpa risiko amblas atau retak.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-clock-history"></i></div>
                                                    <h4>Proses Cepat & Tepat Waktu</h4>
                                                    <p>Pengerjaan sesuai jadwal untuk mempercepat tahap pembangunan
                                                        berikutnya.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-currency-dollar"></i></div>
                                                    <h4>Efisiensi Biaya</h4>
                                                    <p>Estimasi anggaran jelas dan akurat sejak awal proyek.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-icon"><i class="bi bi-people"></i></div>
                                                    <h4>Dukungan Tim Profesional</h4>
                                                    <p>Tenaga ahli siap mendampingi proses dari survey hingga serah terima.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-gallery" data-aos="fade-up" data-aos-delay="300">
                                <h3>Galeri Proyek Urugan</h3>
                                <div class="service-details-slider swiper init-swiper">
                                    <script type="application/json" class="swiper-config">
                                    {
                                        "loop": true,
                                        "speed": 800,
                                        "autoplay": {"delay": 5000},
                                        "slidesPerView": 1,
                                        "spaceBetween": 30,
                                        "breakpoints": {"768": {"slidesPerView": 2}},
                                        "pagination": {"el": ".swiper-pagination","type": "bullets","clickable": true}
                                    }
                                </script>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan_1.png') }}"
                                                    alt="Proyek Urugan Tanah Grand Harmony Balaraja" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Urugan Tanah Grand Harmony Balaraja</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan_2.png') }}"
                                                    alt="Proyek Urugan Tanah Grand Harmony Balaraja" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Urugan Tanah Grand Harmony Balaraja</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan_3.png') }}"
                                                    alt="Proyek Urugan Tanah Grand City The Extention" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Urugan Tanah Grand City The Extention</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="portfolio-item">
                                                <img src="{{ asset('assets/img/jas_pro_land/proyek_urugan_4.png') }}"
                                                    alt="Proyek Urugan Tanah Grand City The Extention" class="img-fluid"
                                                    loading="lazy">
                                                <div class="portfolio-info">
                                                    <h5>Proyek Urugan Tanah Grand City The Extention</h5>
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
                                <h3>Tertarik Mengurug Lahan Anda?</h3>
                                <p>Hubungi tim kami untuk konsultasi gratis dan estimasi harga urugan tanah profesional.</p>
                                <a href="{{ route('hubungi.kami') }}" class="btn-primary">Konsultasi Sekarang</a>
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
