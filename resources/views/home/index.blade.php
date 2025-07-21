@extends('homepage')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Hero Section -->
    <!-- Hero Carousel with Parallax and Animated Text -->
    <section id="beranda" class="container-fluid p-0 position-relative overflow-hidden" style="height: 100vh;">
        @include('home.pages.hero')
    </section>
    <!-- /Hero Section -->

    <section class="min-vh-100 d-flex align-items-center bg-gradient-green py-5" id="why-us">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="fw-bold display-5">Mengapa <span class="text-warning">Memilih Kami?</span></h2>
                <p class="lead text-muted">Kami memberikan yang terbaik demi kepuasan dan kepercayaan Anda</p>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mb-3 text-warning fs-1">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h5 class="fw-semibold">Kepercayaan & Kualitas Teruji</h5>
                        <p class="text-muted small" style="color: black !important;">
                            Rekam jejak terbukti dalam proyek berkualitas tinggi dan kepuasan konsumen dari berbagai
                            kalangan.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mb-3 text-warning fs-1">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5 class="fw-semibold">Solusi Komprehensif</h5>
                        <p class="text-muted small" style="color: black !important;">
                            Layanan terpadu dari gedung, jalan, atap baja ringan, hingga developer dan pertambangan.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mb-3 text-warning fs-1">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5 class="fw-semibold">Tim Profesional</h5>
                        <p class="text-muted small" style="color: black !important;">
                            Organisasi solid dari pemilik hingga man power, menjamin proyek ditangani ahli yang
                            berpengalaman.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mb-3 text-warning fs-1">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h5 class="fw-semibold">Fokus pada Kepuasan Anda</h5>
                        <p class="text-muted small" style="color: black !important;">
                            “Properties That Understand Your Needs”, kami hadir untuk kenyamanan dan keamanan hunian Anda.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- About Section -->
    {{-- <section id="tentang-kami" class="about section">
        @include('home.pages.about')
    </section><!-- /About Section --> --}}

    <!-- Services Section -->
    <section id="layanan-kami" class="services section">
        @include('home.pages.services')
    </section><!-- /Services Section -->

    <!-- Steps Section -->
    {{-- <section id="steps" class="steps section">
        @include('home.pages.steps')
    </section><!-- /Steps Section --> --}}

    <!-- Call To Action Section -->
    {{-- <section id="call-to-action" class="call-to-action section">
        @include('home.pages.call_to_action')
    </section><!-- /Call To Action Section --> --}}

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section light-background">
        @include('home.pages.testimonials')
    </section><!-- /Testimonials Section --> --}}

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">
        @include('home.pages.portfolio')
    </section><!-- /Portfolio Section --> --}}

    <!-- Team Section -->
    <section id="ceo" class="team section light-background">
        @include('home.pages.team')
    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    {{-- <section id="pricing" class="pricing section">
        @include('home.pages.pricing')
    </section><!-- /Pricing Section --> --}}

    <!-- Faq Section -->
    <section class="faq-9 faq section bg-gradient-green" id="faq">
        @include('home.pages.faq')
    </section><!-- /Faq Section -->

    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Alamat Kami</h4>
                            <p>House Office Jeruk Tipis, Luwung Semut 003/001 Kragilan, Kabupaten Serang, Banten</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Alamat Email</h4>
                            <a href="mailto:prolandjas@gmail.com">prolandjas@gmail.com</a>
                            <a href="mailto:ahmadsadelircm@gmail.com">ahmadsadelircm@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>Jam Operasional</h4>
                            <p>Senin–Jumat: 08.00 – 16.00</p>
                            <p>Sabtu: 08.00 – 12.00</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">
        @include('home.pages.contact')
    </section><!-- /Contact Section --> --}}
@endsection
