@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<header class="text-center py-5 bg-light">
    <h1 class="fw-bold">Skin Protection</h1>
</header>

<!-- Main Content -->
<main class="container my-5">
    <div class="row align-items-center">
        <!-- Kolom Gambar -->
        <div class="col-md-6">
            <img src="{{ asset('assets/img/scincare.jpg') }}" alt="Skincare Product" class="img-fluid">
        </div>
        
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <div class="p-4">
                <h3 class="fw-bold">Welcome to PureBeauty</h3>
                <p class="text-muted">Solusi terpercaya bagi Anda yang mencari produk kecantikan berkualitas tinggi dan original.</p>
                <p class="text-muted">PureBeauty didirikan pada tahun 2024 dengan tujuan memberikan kemudahan bagi pembeli untuk mendapatkan produk kecantikan terbaik.</p>
                <p class="text-muted">Saat ini, PureBeauty hanya melayani pengiriman untuk wilayah Kota Batam dengan biaya flat <b>Rp15.000</b>.</p>
                <p class="text-muted">Bersama PureBeauty, mari wujudkan kecantikan alami Anda!</p>
            </div>
        </div>
    </div>
</main>

@endsection
