@extends('homepage')
@section('meta_description',
    'Layanan Kami JAS PRO LAND - Solusi konstruksi dan pengembangan properti terintegrasi, dari
    proyek pembangunan hingga konsultasi properti dan pertambangan.')
@section('meta_keywords',
    'JAS PRO LAND, layanan konstruksi, proyek pembangunan, baja ringan, urugan tanah, konsultasi
    properti, konsultasi pertambangan')
@section('content')
    <div>
        <!-- Section Title -->
        <div class="page-title position-relative overflow-hidden pb-0" data-aos="fade">
            <img src="{{ asset('assets/img/jas_pro_land/webp/layanan_kami.webp') }}" alt="Layanan Kami"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white pb-5">
                <h1 class="text-white">Layanan Kami</h1>
                <p class="lead text-center text-white mb-5">
                </p>
            </div>
        </div><!-- End Section Title -->

        <!-- Services Section -->
        <section id="layanan-kami" class="services section">
            @include('home.pages.services')
        </section><!-- /Services Section -->

        {{-- contact --}}
        @include('home.pages.tentang-kami.alamat_contact')
    </div>
@endsection
