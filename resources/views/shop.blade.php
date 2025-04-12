<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Shop | PureBeauty</title>
</head>

<body>
    <!-- Nama toko -->
    <div class="top-bar d-flex justify-content-between align-items-center p-3">
        <h2 class="site-name">PureBeauty</h2>
        <h3 class="tagline text-center mx-auto">Skin Protection</h3>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <div class="container-fluid">

            <!-- Search bar -->
            <div class="search-container d-flex align-items-center">
                <form action="{{ route('shop') }}" method="GET" class="d-flex align-items-center w-100">
                    <i class="bi bi-search"></i>
                    <input class="form-control me-2 border-0" type="search" name="keyword" placeholder="Search..." aria-label="Search" value="{{ request('keyword') }}" />
                </form>
            </div>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                </ul>

                <div class="d-flex align-items-center ms-auto">
                    @auth
                        <!-- Jika user sudah login -->
                        <div class="user-menu position-relative">
                            <i class="bi bi-person me-2 user-icon"></i>
                        </div>
                    @else
                        <!-- Jika user belum login -->
                        <i class="bi bi-person me-2"></i>
                    @endauth

                    <!-- Icon keranjang -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Browse by and Product Grid -->
    <div class="shop-container d-flex">
        <!-- Tombol Filter -->
        <div class="filter-button d-md-none" id="filter-toggle">
            <i class="fa-solid fa-filter"></i>
        </div>

        <!-- Sidebar Kategori -->
        <div class="sidebar hidden d-md-block" id="sidebar">
            <h4>Browse by</h4>
            <ul>
                <li><a href="{{ route('shop') }}">All Products</a></li>
                <li><a href="{{ route('shop', ['category' => 'Face Mask']) }}">Face Mask</a></li>
                <li><a href="{{ route('shop', ['category' => 'Moisturizer']) }}">Moisturizer</a></li>
                <li><a href="{{ route('shop', ['category' => 'Serum']) }}">Serum</a></li>
                <li><a href="{{ route('shop', ['category' => 'Sunscreen']) }}">Sunscreen</a></li>
            </ul>
        </div>

        <!-- Grid Produk -->
        <div class="shop-container flex-grow-1">
            <div class="container">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-4">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="col">
                                <div class="product-item text-center">
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                                        <img src="{{ asset($product->gambar_produk) }}" alt="{{ $product->nama_produk }}" class="img-fluid" />
                                    </a>
                                    <h5 class="mt-2">{{ $product->nama_produk }}</h5>
                                    <p>Rp{{ number_format($product->harga_produk, 0, ',', '.') }}</p>
                                    <div class="quantity-control d-flex align-items-center justify-content-center" data-max-stock="{{ $product->stok_produk }}">
                                        <button type="button" class="btn btn-quantity decrement">-</button>
                                        <span class="quantity mx-2">1</span>
                                        <button type="button" class="btn btn-quantity increment">+</button>
                                    </div>
                                    <form method="POST" action="{{ route('cart.add') }}">
                                        @csrf
                                        <input type="hidden" name="id_produk" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1" class="quantity-input">
                                        <button type="submit" class="btn btn-add-to-cart mt-2">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">No products available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Import Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/tes.js') }}"></script>
</body>

<footer>
    <div class="footer-container">
        <div class="footer-left">
            <h2>THANK YOU</h2>
            <p>For Visiting Our Website</p>
            <div class="copyright">
                <span>
