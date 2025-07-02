@extends('homepage')
@section('content')
    <div class="pt-5">
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portofolio Konstruksi & Development PT. JAS PRO LAND</h2>
                <div><span>Telusuri</span> <span class="description-title">proyek konstruksi profesional.</span></div>
            </div><!-- End Section Title -->

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

                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                        @forelse ($allProjects as $project)
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
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum ada portofolio proyek yang ditampilkan saat ini.</p>
                                <a href="{{ route('hubungi.kami') }}" class="btn btn-primary mt-3">Hubungi Kami untuk
                                    Konsultasi
                                    Proyek</a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
    </div>
@endsection
