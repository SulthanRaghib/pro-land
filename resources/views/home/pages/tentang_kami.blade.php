@extends('homepage')
@section('content')
    <div>
        <!-- Section Title -->
        <div class="page-title position-relative overflow-hidden pb-0" data-aos="fade">
            <img src="{{ asset('assets/img/jas_pro_land/tentang_kami.jpg') }}" alt="Tentang Kami JAS PRO LAND"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white pb-5">
                <h1 class="text-white">Tentang Kami</h1>
                <p class="lead text-center text-white mb-5">
                    <span>Kenali</span> <span class="description-title">JAS PRO LAND</span>
                </p>
            </div>
        </div><!-- End Section Title -->

        <!-- About Section -->
        <section id="tentang-kami" class="about section bg-gradient-green">
            @include('home.pages.about')
        </section><!-- /About Section -->

        <!-- Team Section -->
        <section id="ceo" class="team section light-background">
            @include('home.pages.team')
        </section><!-- /Team Section -->
    </div>
@endsection
