<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <!-- Tentang Perusahaan -->
            <div class="col-lg-4 col-md-12 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center mb-3">
                    <span class="sitename fw-bold text-warning">
                        <img src="{{ url('assets/img/jas_pro_land/logo-jas.png') }}" alt="Logo JAS PRO LAND"
                            class="img-fluid" style="max-width: 50px; height: auto; margin-right: 10px;">
                        JAS PRO LAND</span>
                </a>
                <p>
                    JAS PRO LAND adalah perusahaan konstruksi dan pengembang properti yang menyediakan layanan
                    pembangunan, konsultasi properti, dan pengelolaan proyek pertambangan dengan standar kualitas
                    terbaik di Indonesia.
                </p>
                {{-- <div class="social-links d-flex mt-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div> --}}
            </div>

            <!-- Tautan Utama -->
            <div class="col-lg-2 col-6 footer-links">
                <h4 class="text-warning">Menu</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('home') }}#tentang-kami">Tentang Kami</a></li>
                    <li><a href="{{ route('home') }}#layanan-kami">Layanan Kami</a></li>
                    <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
                    <li><a href="{{ route('hubungi.kami') }}">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Layanan Kami -->
            <div class="col-lg-3 col-6 footer-links">
                <h4 class="text-warning">Layanan Kami</h4>
                <ul>
                    <li><a href="{{ route('layanan.proyek.bangunan') }}">Proyek Pembangunan</a></li>
                    <li><a href="{{ route('layanan.proyek.baja.ringan') }}">Proyek Baja Ringan</a></li>
                    <li><a href="{{ route('layanan.proyek.urugan') }}">Proyek Urugan</a></li>
                    <li><a href="{{ route('layanan.proyek.tambang') }}">Proyek Pertambangan</a></li>
                    <li><a href="{{ route('layanan.konsultan.properti') }}">Konsultan Properti</a></li>
                    <li><a href="{{ route('layanan.konsultan.pertambangan') }}">Konsultan Pertambangan</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-3 col-md-12 footer-contact text-md-start">
                <h4 class="text-warning">Kontak Kami</h4>
                <p>House Office Jeruk Tipis, Luwung Semut 003/001 Kragilan, Kabupaten Serang, Banten</p>
                <p class="mt-3"><strong>Telepon:</strong>
                    <a href="https://https://wa.me/62811135745" class="text-white">+62 811-1357-45</a>
                </p>
                <p><strong>Email:</strong> <a href="mailto:prolandjas@gmail.com"
                        class="text-white">prolandjas@gmail.com</a></p>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p class="mb-0">&copy; <span>{{ date('Y') }}</span> <strong class="sitename">JAS PRO LAND</strong>. All
            Rights Reserved.</p>
        <div class="credits">
            Designed with ❤️ by <a href="https://www.linkedin.com/in/sulthan-raghib-fillah/" class="text-white">Sulthan
                Raghib Fillah</a>
        </div>
    </div>
</footer>
