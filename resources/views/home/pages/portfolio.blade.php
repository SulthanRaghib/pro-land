@extends('homepage')
@section('content')
    <div> <!-- Page Title -->
        <div class="page-title position-relative overflow-hidden pb-0" data-aos="fade">
            <img src="{{ asset('assets/img/jas_pro_land/portofolio_proyek.jpg') }}" alt="Konsultan Pertambangan"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                style="z-index:0; filter: blur(8px) brightness(0.7); pointer-events:none;">
            <div class="container position-relative text-white pb-5">
                <h1 class="text-white">Proyek Konstruksi & Development PT. JAS PRO LAND</h1>
                <div class="lead text-center text-white mb-5">
                    <span>Lihat</span> <span class="description-title">Portofolio Proyek Kami</span>
                </div>
            </div>
        </div>
        <section id="proyek" class="portfolio section" style="overflow: visible;">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <!-- Filter Buttons -->
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                        <li data-filter="*" class="filter-active">
                            <i class="bi bi-grid-3x3-gap"></i> Semua Proyek
                        </li>
                        <li data-filter=".filter-pembangunan">
                            <i class="bi bi-building"></i> Pembangunan
                        </li>
                        <li data-filter=".filter-baja">
                            <i class="bi bi-diagram-3"></i> Baja Ringan
                        </li>
                        <li data-filter=".filter-urugan">
                            <i class="bi bi-truck"></i> Urugan
                        </li>
                        <li data-filter=".filter-tambang">
                            <i class="bi bi-gem"></i> Tambang
                        </li>
                        <li data-filter=".filter-konsultasi">
                            <i class="bi bi-person-lines-fill"></i> Konsultasi
                        </li>
                    </ul>

                    <div class="container">
                        <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                            @foreach ($allProjects as $project)
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $project['filter'] }}">
                                    <article class="portfolio-entry">
                                        <figure class="entry-image">
                                            <img src="{{ $project['image'] }}" class="img-fluid" alt="{{ $project['alt'] }}"
                                                loading="lazy">
                                            <div class="entry-overlay">
                                                <div class="overlay-content">
                                                    <div class="entry-meta text-capitalize">
                                                        {{ $project['category'] }}
                                                    </div>
                                                    <h2 class="entry-title">{{ $project['alt'] }}</h2>
                                                    <div class="entry-links">
                                                        <a href="{{ $project['image'] }}" class="glightbox"
                                                            data-gallery="portfolio-gallery"
                                                            data-glightbox="title: {{ $project['alt'] }}; description: Proyek konstruksi berkualitas bersama PT. JAS PRO LAND.">
                                                            <i class="bi bi-arrows-angle-expand"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->


        <section id="contact" class="contact section" style="overflow: visible;">
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
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let portfolioContainer = document.querySelector('.isotope-container');
                let portfolioIsotope;

                if (portfolioContainer) {
                    portfolioIsotope = new Isotope(portfolioContainer, {
                        itemSelector: '.isotope-item',
                        layoutMode: 'masonry'
                    });

                    let portfolioFilters = document.querySelectorAll('.portfolio-filters li');

                    portfolioFilters.forEach(function(filter) {
                        filter.addEventListener('click', function() {
                            // Remove active class from all filters
                            portfolioFilters.forEach(li => li.classList.remove('filter-active'));
                            // Add active class to the clicked filter
                            this.classList.add('filter-active');

                            let filterValue = this.getAttribute('data-filter');
                            portfolioIsotope.arrange({
                                filter: filterValue
                            });

                            // --- START New Logic for No Data ---
                            let visibleItems = portfolioIsotope.getFilteredItemElements();
                            let noProjectsMessage = document.getElementById('no-projects-message');

                            if (visibleItems.length === 0) {
                                if (!noProjectsMessage) {
                                    // Create the message and CTA if it doesn't exist
                                    noProjectsMessage = document.createElement('div');
                                    noProjectsMessage.id = 'no-projects-message';
                                    noProjectsMessage.className =
                                        'col-12 text-center mb-5'; // Add some margin for better appearance
                                    noProjectsMessage.innerHTML = `
                            <p class="text-muted mb-0">Belum ada portofolio proyek yang ditampilkan saat ini.</p>
                            <a href="{{ route('hubungi.kami') }}" class="btn btn-outline-primary mt-2 rounded-5">Mari Mulai Proyek Anda <i class="bi bi-arrow-right"></i></a>
                        `;
                                    portfolioContainer.appendChild(noProjectsMessage);
                                }
                                noProjectsMessage.style.display = 'block'; // Show the message
                            } else {
                                if (noProjectsMessage) {
                                    noProjectsMessage.style.display =
                                        'none'; // Hide the message if items are visible
                                }
                            }
                            // --- END New Logic for No Data ---
                        });
                    });
                }
            });
        </script>
    @endpush
@endsection
