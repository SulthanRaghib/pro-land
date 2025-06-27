<div>
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <div><span>Pelajari Lebih Lanjut</span> <span class="description-title">Tentang Kami</span></div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gx-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="about-image position-relative">
                    <img src="{{ url('assets/img/about/about-portrait-1.webp') }}" class="img-fluid rounded-4 shadow-sm"
                        alt="About Image" loading="lazy">
                    {{-- <div class="experience-badge">
                            <span class="years">20+</span>
                            <span class="text">Years of Expertise</span>
                        </div> --}}
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <h2>Bersama <span class="fw-bold" style="color: #e3a127">PT. JAS PRO LAND</span>, Setiap Proyek
                        Lebih dari Sekadar Konstruksi</h2>

                    <p>
                        Berdiri kokoh melalui Akta No. 88 tanggal 26 Februari 2025, <strong>PT. JAS PRO LAND</strong>
                        hadir sebagai <strong>perusahaan konstruksi dan developer properti profesional di
                            Indonesia</strong>. Sejak awal, kami berkomitmen mendukung pembangunan nasional, baik untuk
                        proyek pemerintah maupun sektor swasta, dengan menjunjung tinggi <strong>nilai profesionalisme,
                            integritas, dan kualitas hasil kerja</strong>.
                    </p>

                    <p>
                        Kami menyediakan <strong>layanan jasa konstruksi terintegrasi</strong> mulai dari pembangunan
                        gedung, infrastruktur jalan raya, sistem irigasi atau saluran air, hingga struktur atap baja
                        ringan. Tak hanya itu, PT. JAS PRO LAND juga aktif sebagai <strong>developer properti</strong>
                        dan turut berkontribusi dalam sektor pertambangan, memperluas dampak positif dalam pembangunan
                        berkelanjutan.
                    </p>

                    <p>
                        Dengan rekam jejak yang terpercaya dan pengalaman lintas proyek di berbagai wilayah Indonesia,
                        kami telah menjadi <strong>mitra strategis</strong> bagi banyak institusi. Slogan kami,
                        <em>"Properties That Understand Your Need"</em>, mencerminkan dedikasi kami dalam menciptakan
                        hunian dan infrastruktur yang <strong>aman, fungsional, dan sesuai kebutuhan masyarakat
                            modern</strong>.
                    </p>

                    <a href="{{ route('home') }}#services" class="btn btn-primary mt-4">Jelajahi Layanan Konstruksi</a>
                </div>
            </div>

            <div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <div class="row g-4 mt-3">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="feature-item">
                                <div class="d-flex align-items-center gap-3 mb-0">
                                    <i class="bi bi-people-fill"></i>
                                    <h5>Visi Kami</h5>
                                </div>
                                <ul>
                                    <li>Mewujudkan kawasan modern suatu lahan atau wilayah.</li>
                                    <li>Di terima dan bermanfaat bagi masyarakat.</li>
                                    <li>Memberdayakan masyarakat.</li>
                                    <li>Mengutamanakan kebutuhan sosial</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                            <div class="feature-item">
                                <div class="d-flex align-items-center gap-3 mb-0">
                                    <i class="bi bi-flag-fill"></i>
                                    <h5>Misi Kami</h5>
                                </div>
                                <ul>
                                    <li>Membangun kawasan modern yang terencana dan berkelanjutan.</li>
                                    <li>Mengembangkan kawasan yang inklusif dan berorientasi pada masyarakat.</li>
                                    <li>Membangun keterlibatan aktif masyarakat dalam pengembangan kawasan.</li>
                                    <li>Memperioritaskan kebutuhan sosial dalam setiap pembangunan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
                        <div class="testimonial-intro">
                            <h3>Our Clients Speak Highly</h3>
                            <p>Hear directly from those who have experienced the impact of our partnership and
                                achieved their strategic goals.</p>
                            <div class="swiper-nav-buttons mt-4">
                                <button class="slider-prev"><i class="bi bi-arrow-left"></i></button>
                                <button class="slider-next"><i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
                        <div class="testimonial-slider swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 800,
                                    "autoplay": {
                                    "delay": 5000
                                    },
                                    "slidesPerView": 1,
                                    "spaceBetween": 30,
                                    "navigation": {
                                    "nextEl": ".slider-next",
                                    "prevEl": ".slider-prev"
                                    },
                                    "breakpoints": {
                                    "768": {
                                        "slidesPerView": 2
                                    }
                                    }
                                }
                                </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="rating mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>"Their strategic vision and unwavering commitment to results provided
                                            exceptional value. Our operational efficiency has signficantly
                                            improved."</p>
                                        <div class="client-info d-flex align-items-center mt-4">
                                            <img src="{{ url('assets/img/person/person-f-1.webp') }}" class="client-img"
                                                alt="Client" loading="lazy">
                                            <div>
                                                <h6 class="mb-0">Eleanor Vance</h6>
                                                <span>Operations Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="rating mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <p>"Collaborating with their team was a revelation. Their innovative
                                            strategies guided us toward achieving our objectives with precision and
                                            speed."</p>
                                        <div class="client-info d-flex align-items-center mt-4">
                                            <img src="{{ url('assets/img/person/person-m-1.webp') }}" class="client-img"
                                                alt="Client" loading="lazy">
                                            <div>
                                                <h6 class="mb-0">David Kim</h6>
                                                <span>Product Lead</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="rating mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>"The depth of knowledge and unwavering dedication they bring to every
                                            project is exceptional. They've become an essential ally in driving our
                                            expansion."</p>
                                        <div class="client-info d-flex align-items-center mt-4">
                                            <img src="{{ url('assets/img/person/person-f-2.webp') }}" class="client-img"
                                                alt="Client" loading="lazy">
                                            <div>
                                                <h6 class="mb-0">Isabella Diaz</h6>
                                                <span>Research Analyst</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="rating mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <p>"Their dedication to delivering superior solutions and their meticulous
                                            attention to detail have profoundly impacted our corporate growth
                                            trajectory."</p>
                                        <div class="client-info d-flex align-items-center mt-4">
                                            <img src="{{ url('assets/img/person/person-f-3.webp') }}"
                                                class="client-img" alt="Client" loading="lazy">
                                            <div>
                                                <h6 class="mb-0">Olivia Chen</h6>
                                                <span>Development Strategist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>

</div>
