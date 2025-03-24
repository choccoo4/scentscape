<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PureBeauty - Produk kecantikan berkualitas tinggi dan original.">
    <meta name="keywords" content="PureBeauty, skincare, kecantikan, kosmetik">
    <meta name="author" content="PureBeauty">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
    
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet" />

    <title>@yield('title', 'PureBeauty')</title>
    <style>
        .container-custom {
            max-width: 900px;
            margin: auto;
        }
        .footer-custom {
            background-color: #dde5d4;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">PureBeauty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container container-custom mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center text-lg-start mt-5 p-3">
        <div class="container text-center text-md-start">
            <div class="row">
                <!-- Left Section -->
                <div class="col-md-4">
                    <h2 class="fw-bold">THANK YOU</h2>
                    <p>For Visiting Our Website</p>
                    <span>© 2024 by PureBeauty</span>
                </div>

                <!-- Middle Section -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/about') }}" class="text-dark">ABOUT</a></li>
                        <li><a href="{{ url('/history_ord') }}" class="text-dark">SHIPPING & RETURNS</a></li>
                        <li><a href="{{ url('/contact') }}" class="text-dark">CONTACT</a></li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark" target="_blank"><i class="bi bi-instagram"></i> INSTAGRAM</a></li>
                        <li><a href="#" class="text-dark" target="_blank"><i class="bi bi-twitter"></i> TWITTER</a></li>
                        <li><a href="mailto:support@purebeauty.com" class="text-dark"><i class="bi bi-envelope"></i> EMAIL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>