@extends('homepage')
@section('meta_description',
    'FAQ JAS PRO LAND - Pertanyaan Umum tentang layanan konstruksi, baja ringan, urugan tanah,
    tambang, dan konsultasi kami.')
@section('meta_keywords',
    'FAQ, JAS PRO LAND, pertanyaan umum, layanan konstruksi, baja ringan, urugan tanah, tambang,
    konsultasi')

@section('content')
    <div>
        <!-- Section Title -->
        <div class="page-title position-relative overflow-hidden pb-0" data-aos="fade">
            <img src="{{ asset('assets/img/jas_pro_land/webp/faq.webp') }}" alt="FAQ JAS PRO LAND"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white pb-5">
                <h1 class="text-white">FAQ</h1>
                <p class="lead text-center text-white mb-5">
                    <span>Pertanyaan Umum</span> <span class="description-title">Tentang JAS PRO LAND</span>
                </p>
            </div>
        </div><!-- End Section Title -->

        <!-- Faq Section -->
        <section class="faq-9 faq section bg-gradient-green" id="faq">
            @include('home.pages.faq')
        </section><!-- /Faq Section -->

        @include('home.pages.tentang-kami.alamat_contact')
    </div>
@endsection
