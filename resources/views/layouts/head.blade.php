<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>@yield('meta_title', 'PT. JAS PRO LAND - Jasa Konstruksi Profesional & Developer Properti Terpercaya di Indonesia')</title>
<meta name="description" content="@yield('meta_description', 'PT. JAS PRO LAND menyediakan layanan konstruksi gedung, proyek baja ringan, urugan tanah, pengelolaan tambang, serta jasa konsultasi properti dan pertambangan profesional. Wujudkan proyek pembangunan Anda bersama developer terpercaya Indonesia.')">
<meta name="keywords" content="@yield('meta_keywords', 'jasa konstruksi profesional, developer properti terpercaya, proyek baja ringan, jasa urugan tanah, proyek pertambangan, konsultasi properti, konsultasi pertambangan, perusahaan konstruksi Indonesia, jasa bangun gedung, pengembang properti')">
<link rel="canonical" href="{{ url()->current() }}">
<meta name="author" content="PT. JAS PRO LAND">
<meta property="og:title" content="@yield('meta_title', 'PT. JAS PRO LAND - Jasa Konstruksi Profesional & Developer Properti Terpercaya di Indonesia')">
<meta property="og:description" content="@yield('meta_description', 'PT. JAS PRO LAND menyediakan layanan konstruksi gedung, proyek baja ringan, urugan tanah, pengelolaan tambang, serta jasa konsultasi properti dan pertambangan profesional.')">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">

<!-- Favicons -->
<link href="{{ url('assets/img/jas_pro_land/logo-jas.png') }}" rel="icon">
<link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ url('assets/css/main.css') }}" rel="stylesheet">

{{-- Icon Bootstrap 5 --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- =======================================================
  * Template Name: Strategy
  * Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
  * Updated: May 09 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
    /* Mega Menu Styling */
    .mega-menu {
        background-color: #333;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.25);
    }

    .mega-menu a {
        text-decoration: none;
        color: inherit;
        display: block;
        padding: 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .mega-menu a:hover {
        background: rgba(255, 215, 0, 0.1);
        transform: translateY(-2px);
    }

    .active-layanan {
        background: rgba(255, 215, 0, 0.2);
        color: #ffd700 !important;
    }

    .mega-menu h5 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #fff;
        transition: color 0.3s ease;
    }

    .mega-menu h5 span {
        color: #ffd700;
    }

    .mega-menu a:hover h5 {
        color: #ffd700;
    }

    .mega-menu p {
        font-size: 13px;
        line-height: 1.4;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 0;
        transition: none !important;
        /* Matikan semua transisi pada paragraf */
    }

    /* Pastikan paragraf tidak berubah saat hover */
    .mega-menu a:hover p {
        color: rgba(255, 255, 255, 0.7) !important;
    }

    .mega-menu i {
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .mega-menu a:hover i {
        transform: scale(1.1);
        color: #ffd700;
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .mega-menu h5 {
            font-size: 14px;
        }

        .mega-menu p {
            font-size: 12px;
        }

        .mega-menu i {
            font-size: 24px !important;
        }
    }
</style>
