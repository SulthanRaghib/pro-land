<!-- Vendor JS Files -->
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ url('assets/js/main.js') }}"></script>

{{-- faq active menghilang --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach(item => {
            item.addEventListener("click", function() {
                // Hapus semua class 'faq-active' dari semua item
                faqItems.forEach(i => i.classList.remove("faq-active"));

                // Tambahkan class 'faq-active' ke item yang diklik
                this.classList.add("faq-active");
            });
        });
    });
</script>
