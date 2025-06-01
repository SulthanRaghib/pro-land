@extends('homepage')
@section('content')
    <div class="pt-5">
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <div><span>Segera</span> <span class="description-title">Hubungi</span></div>
            </div><!-- End Section Title -->

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

            <!-- Google Maps (Full Width) -->
            <div class="map-section" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d399.94778791068865!2d106.27654681369869!3d-6.123107612685295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMDcnMjIuOCJTIDEwNsKwMTYnMzYuMiJF!5e0!3m2!1sid!2sid!4v1748400037876!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Contact Form Section (Overlapping) -->
            <div class="container form-container-overlap">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-10">
                        <div class="contact-form-wrapper">
                            <h2 class="text-center mb-4">Hubungi Kami</h2>

                            <form action="{{ route('send.message.email') }}" method="POST" class="php-email-form"
                                id="contactForm">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-person"></i>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nama Lengkap">
                                            </div>
                                            <span class="text-danger error-text-name"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-envelope"></i>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Alamat Email">
                                            </div>
                                            <span class="text-danger error-text-email"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-text-left"></i>
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subjek">
                                            </div>
                                            <span class="text-danger error-text-subject"></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-chat-dots message-icon"></i>
                                                <textarea class="form-control" name="message" placeholder="Tulis pesan anda..." style="height: 180px"></textarea>
                                            </div>
                                            <span class="text-danger error-text-message"></span>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Contact Section -->
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("#contactForm");

            // ✅ Tambah event untuk hapus error saat field diubah
            ['name', 'email', 'subject', 'message'].forEach(field => {
                const input = form.querySelector(`[name="${field}"]`);
                if (input) {
                    input.addEventListener('input', function() {
                        const errorSpan = form.querySelector('.error-text-' + field);
                        if (errorSpan) {
                            errorSpan.innerText = '';
                        }
                    });
                }
            });

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                // 🔄 Reset semua error sebelum submit
                ['name', 'email', 'subject', 'message'].forEach(field => {
                    const errorSpan = form.querySelector('.error-text-' + field);
                    if (errorSpan) errorSpan.innerText = '';
                });

                // 🔃 Loading dengan SweetAlert
                Swal.fire({
                    title: 'Mengirim...',
                    text: 'Harap tunggu...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                const formData = new FormData(form);

                fetch(form.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "Accept": "application/json"
                        }
                    })
                    .then(async (response) => {
                        Swal.close(); // Tutup loading

                        if (!response.ok) {
                            const data = await response.json();
                            if (data.errors) {
                                for (let field in data.errors) {
                                    const errorSpan = form.querySelector('.error-text-' + field);
                                    if (errorSpan) {
                                        errorSpan.innerText = data.errors[field][0];
                                    }
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validasi gagal',
                                    text: 'Mohon lengkapi semua formulir yang ada.'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Terjadi kesalahan saat mengirim data.'
                                });
                            }
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Pesan anda telah dikirim.'
                            });

                            form.reset();
                        }
                    })
                    .catch((error) => {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan koneksi atau server.'
                        });
                        console.error(error);
                    });
            });
        });
    </script>
@endpush
