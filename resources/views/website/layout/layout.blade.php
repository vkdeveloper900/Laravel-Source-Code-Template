<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetAlert Examples</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">



</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="brand-logo">
            <i class="bi bi-box"></i> Template
        </div>
        <nav class="nav">
            <a href="{{ route('dashboard') }}"
                class="nav-link {{ ($nav ?? '') == 'dashboard' ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('alert') }}" class="nav-link {{ ($nav ?? '') == 'alert' ? 'active' : '' }}">Alert</a>
            <a href="#" class="nav-link">Forms</a>
            <a href="#" class="nav-link">Tables</a>
            <a href="#" class="nav-link">Charts</a>
        </nav>

    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="topbar d-flex justify-content-between align-items-center p-3 bg-light border-bottom">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-house-door-fill"></i> Home
                        </a>
                    </li>
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (count($breadcrumb) > 1)
                            <li class="breadcrumb-item">
                                <a href="{{ $breadcrumb[1] }}">{{ $breadcrumb[0] }}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item active">{{ $breadcrumb[0] }}</li>
                        @endif
                    @endforeach
                </ol>
            </nav>

            <!-- Notification and Profile Section -->
            <div class="d-flex align-items-center">
                <i class="bi bi-envelope me-3 fs-5" title="Messages"></i>
                <i class="bi bi-bell me-3 fs-5" title="Notifications"></i>
                <img src="https://via.placeholder.com/30" alt="Profile" class="rounded-circle" title="Profile">
            </div>
        </div>

        <!-- Content Section -->
        <div class="content p-4">
            @yield('content')
        </div>
    </div>



    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
