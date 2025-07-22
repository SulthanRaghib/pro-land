<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>@yield('meta_title', 'PT. JAS PRO LAND - Jasa Konstruksi Profesional & Developer Properti Terpercaya di Indonesia')</title>
<meta name="description" content="@yield('meta_description', 'PT. JAS PRO LAND menyediakan layanan konstruksi gedung, proyek baja ringan, urugan tanah, pengelolaan tambang, serta jasa konsultasi properti dan pertambangan profesional. Wujudkan proyek pembangunan Anda bersama developer terpercaya Indonesia.')">
<meta name="keywords" content="@yield('meta_keywords', 'jasa konstruksi profesional, developer properti terpercaya, proyek baja ringan, jasa urugan tanah, proyek pertambangan, konsultasi properti, konsultasi pertambangan, perusahaan konstruksi Indonesia, jasa bangun gedung, pengembang properti')">
<link rel="canonical" href="{{ url()->current() }}">
<meta name="author" content="PT. JAS PRO LAND">
<meta name="apple-mobile-web-app-title" content="JAS PRO LAND">
<meta name="application-name" content="JAS PRO LAND">
<meta property="og:title" content="@yield('meta_title', 'PT. JAS PRO LAND - Jasa Konstruksi Profesional & Developer Properti Terpercaya di Indonesia')">
<meta property="og:description" content="@yield('meta_description', 'PT. JAS PRO LAND menyediakan layanan konstruksi gedung, proyek baja ringan, urugan tanah, pengelolaan tambang, serta jasa konsultasi properti dan pertambangan profesional.')">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ url('favicon.ico') }}">
<meta property="og:image:alt" content="PT. JAS PRO LAND Logo">
<meta property="og:site_name" content="PT. JAS PRO LAND">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Beranda",
      "item": "https://www.jasproland.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Layanan",
      "item": "https://www.jasproland.com/layanan-kami"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Konstruksi",
      "item": "https://www.jasproland.com/layanan-kami/proyek-pembangunan"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Baja Ringan",
      "item": "https://www.jasproland.com/layanan-kami/proyek-baja-ringan"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Urugan Tanah",
      "item": "https://www.jasproland.com/layanan-kami/urugan-tanah"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "Tambang",
      "item": "https://www.jasproland.com/layanan-kami/proyek-tambang"
    },
    {
      "@type": "ListItem",
      "position": 7,
      "name": "Konsultan Properti",
      "item": "https://www.jasproland.com/layanan-kami/konsultan-properti"
    },
    {
      "@type": "ListItem",
      "position": 8,
      "name": "Konsultan Pertambangan",
      "item": "https://www.jasproland.com/layanan-kami/konsultan-pertambangan"
    }
  ]
}
</script>

<!-- Favicon for all devices -->
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png') }}">
<link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
<link rel="icon" type="image/svg+xml" href="{{ url('favicon.svg') }}">
<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('apple-touch-icon.png') }}">
<!-- Android Chrome Icon -->
<link rel="icon" type="image/png" sizes="192x192" href="{{ url('android-chrome-192x192.png') }}">
<!-- Web App Manifest -->
<link rel="manifest" href="{{ url('site.webmanifest') }}">


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

<!-- Animate.css for animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

{{-- Custom CEO SHOWCASE --}}
<link rel="stylesheet" href="{{ url('assets/css/ceo-showcase.css') }}">

<style>
    .bg-gradient-green {
        background: linear-gradient(to bottom, #0f3f2e, #198754, #66d1a8);
    }

    .bg-gradient-green h2,
    .bg-gradient-green p {
        color: var(--contrast-color) !important;
    }


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
        background: #1987543d;
        transform: translateY(-2px);
    }

    .active-layanan {
        background: var(--green-color);
        color: var(--ascent-color);
    }

    /* buat tag <i></i> dan tag <h5></h5> dan tag <p></p> setelah class .active-layanan di dalamannya menjadi text white */
    .mega-menu a.active-layanan i,
    .mega-menu a.active-layanan h5,
    .mega-menu a.active-layanan p {
        color: var(--contrast-color);
    }

    .mega-menu h5 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #00820e;
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
        color: #00820e;
        margin-bottom: 0;
        transition: none !important;
        /* Matikan semua transisi pada paragraf */
    }

    /* Pastikan paragraf tidak berubah saat hover */
    .mega-menu a:hover p {
        color: #00820e !important;
    }

    .mega-menu i {
        color: var(--ascent-color);
        transition: all 0.3s ease;
    }

    .mega-menu a:hover i {
        transform: scale(1.1);
        color: #ffd700;
    }

    .btn-warning-custom {
        background-color: #ffc107;
        color: #000000;
        border-radius: 5px;
        padding: 15px 25px;
        font-size: 16px;
        font-weight: 600;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-warning-custom:hover {
        background-color: #ffffff;
        transform: translateY(-2px);
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .mega-menu h5 {
            font-size: 14px;
            color: var(--contrast-color);
        }

        .mega-menu p {
            font-size: 12px;
        }

        .mega-menu i {
            font-size: 24px !important;
        }
    }
</style>
