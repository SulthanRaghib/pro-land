<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    @section('title', 'This site can’t be reached')

    <div class="d-flex flex-column justify-content-center align-items-center vh-100 bg-light text-center">
        <div class="mb-4">
            <i class="bi bi-file-earmark-x fs-1 text-secondary"></i>
        </div>
        <h3 class="fw-normal">This site can’t be reached</h3>
        <p class="text-muted mb-1">Check if there is a typo in <span class="fw-semibold">apps.panelbear.com</span>.</p>
        <p class="text-secondary small mb-4">DNS_PROBE_FINISHED_NXDOMAIN</p>
        <a href="{{ url()->current() }}" class="btn btn-primary px-4 rounded-3">Reload</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
