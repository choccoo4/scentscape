<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap"
            rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Belleza&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <title>HOME | Makeup-store</title>
    </head>

    <body>
        <div class="top-bar d-flex justify-content-between align-items-center p-3">
            <h2 class="site-name">PureBeauty</h2>
            <h3 class="tagline text-center mx-auto">Skin Protection</h3>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light p-2">
            <div class="container-fluid">
                <form action="#" method="GET" class="d-flex align-items-center w-100">
                    <i class="bi bi-search"></i>
                    <input class="form-control me-2 border-0" type="search" name="keyword" placeholder="Search..." value="{{ request('keyword') }}">
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                    <div class="d-flex align-items-center ms-auto">
                        <!-- Icon User login -->
                        @if (session()->has('user'))
                        <!-- Jika pengguna sudah login -->
                        <div class="user-menu position-relative">
                            <i class="bi bi-person me-2 user-icon"></i>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/profile') }}">My Account</a></li>
                                <li><a href="{{ url('/history_ord') }}">History Order</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                        @else
                        <!-- Jika pengguna belum login -->
                        <i class="bi bi-person me-2"></i>
                        <a href="{{ route('login') }}" class="me-4">Log In</a>
                        @endif

                        <!-- Icon keranjang -->
                        <a href="{{ url('/cart') }}"><i class="bi bi-bag"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="banner-container">
            <img src="{{ asset('assets/img/SPA natural cosmetic on marble.jpeg') }}" class="banner-img" alt="Banner Image">
            <div class="banner-text">
                <p>TEMUKAN KEINDAHANMU YANG SESUNGGUHNYA</p>
                <h1>“We Repair Your Skin Barrier”</h1>
                <a href="#" class="shop-now-btn">SHOP NOW ></a>
            </div>
        </div>

        <section class="new-arrivals py-5">
            <div class="container">
                <h2 class="text-center mb-5">New Arrivals</h2>
                <div class="row justify-content-center">
                    @forelse($products as $product)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img src="{{ asset($product->gambar_produk) }}" class="card-img-top" alt="{{ $product->nama_produk }}">
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center">Produk belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>THANK YOU</h2>
                <p>For Visiting Our Website</p>
                <div class="copyright">
                    <span>©2024 by PureBeauty</span>
                </div>
            </div>
            <div class="footer-middle">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SHIPPING & RETURNS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
            </div>
        </div>
    </footer>

    </html>
</div>