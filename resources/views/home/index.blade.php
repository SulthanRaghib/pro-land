@extends('homepage')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        @include('home.hero')
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        @include('home.about')
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        @include('home.services')
    </section><!-- /Services Section -->

    <!-- Steps Section -->
    <section id="steps" class="steps section">
        @include('home.steps')
    </section><!-- /Steps Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
        @include('home.call_to_action')
    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
        @include('home.testimonials')
    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        @include('home.portfolio')
    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">
        @include('home.team')
    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">
        @include('home.pricing')
    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section" id="faq">
        @include('home.faq')
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        @include('home.contact')
    </section><!-- /Contact Section -->
@endsection
