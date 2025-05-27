<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @stack('styles')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        @include('layouts.navbar')
    </header>

    <main class="main">

        @yield('content')

    </main>

    @include('layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('layouts.scripts')
    @stack('scripts')

</body>

</html>
