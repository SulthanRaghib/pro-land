 <div id="carouselHero" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="5000">
     <div class="carousel-inner h-100">

         <!-- Slide -->
         @php
             $slides = [
                 [
                     'image' => 'gedung.png',
                     'title' => 'JAS PRO LAND',
                     'subtitle' => 'DEVELOPMENT',
                     'desc' => 'Properties That Understand Your Needs',
                     'text' =>
                         'Membangun masa depan dengan inovasi konstruksi dan pengembangan lahan berkelanjutan. Solusi properti yang memahami kebutuhan Anda dengan kualitas terpercaya.',
                     'btn' => [
                         'label' => 'MULAI PROYEK ANDA SEKARANG',
                         'link' => '#layanan-kami',
                         'class' => 'btn-success btn-lg p-3',
                     ],
                 ],
                 [
                     'image' => 'pembangunan_img.jpg',
                     'title' => 'Bangun Masa Depan',
                     'subtitle' => 'Dengan JAS PRO LAND',
                     'desc' => 'Infrastruktur yang dibangun dengan visi jangka panjang.',
                     'text' => '',
                     'btn' => [
                         'label' => 'LIHAT PORTOFOLIO',
                         'link' => route('portfolio'),
                         'class' => 'btn-warning btn-lg p-3',
                     ],
                 ],
                 [
                     'image' => 'konsultan_tambang.png',
                     'title' => 'Solusi Konstruksi',
                     'subtitle' => 'Bersama Profesional Terpercaya',
                     'desc' => 'Keamanan, kenyamanan, dan nilai investasi properti Anda.',
                     'text' => '',
                     'btn' => [
                         'label' => 'HUBUNGI KAMI',
                         'link' => route('hubungi.kami'),
                         'class' => 'btn-primary btn-lg p-3',
                     ],
                 ],
             ];
         @endphp

         @foreach ($slides as $i => $s)
             <div class="carousel-item h-100 {{ $i == 0 ? 'active' : '' }}">
                 <div class="position-absolute w-100 h-100 bg-dark opacity-75 z-1"></div>
                 <div class="position-absolute w-100 h-100 bg-image z-0"
                     style="background-image: url('{{ asset('assets/img/jas_pro_land/' . $s['image']) }}'); background-size: cover; background-position: center; background-attachment: fixed;">
                 </div>
                 <div
                     class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center h-100 text-white z-2">
                     <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">
                         {{ $s['title'] }}</h1>
                     <h2 class="fw-light text-white animate__animated animate__fadeInLeft">{{ $s['subtitle'] }}</h2>
                     <p class="lead mt-3 animate__animated animate__fadeInUp">{{ $s['desc'] }}</p>
                     @if ($s['text'])
                         <p class="mt-3 animate__animated animate__fadeInUp px-5">{{ $s['text'] }}</p>
                     @endif
                     <div class="cta-button mt-3">
                         <a href="{{ $s['btn']['link'] }}" class="btn {{ $s['btn']['class'] }} rounded-5">
                             {{ $s['btn']['label'] }} <i class="bi bi-arrow-right"></i>
                         </a>
                     </div>
                 </div>
             </div>
         @endforeach

     </div>

     <!-- Arrows -->
     <button class="carousel-control-prev z-3" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
         <span class="carousel-control-prev-icon rounded-circle p-3" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next z-3" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
         <span class="carousel-control-next-icon rounded-circle p-3" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>
