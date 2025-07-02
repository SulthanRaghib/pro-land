@extends('homepage')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Hero Section -->
    <section id="beranda" class="hero section">
        @include('home.pages.hero')
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="tentang-kami" class="about section">
        @include('home.pages.about')
    </section><!-- /About Section -->

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
    {{-- <section class="faq-9 faq section" id="faq">
        @include('home.pages.faq')
    </section><!-- /Faq Section --> --}}

    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">
        @include('home.pages.contact')
    </section><!-- /Contact Section --> --}}
@endsection
