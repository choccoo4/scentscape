@extends('layouts.app')

@section('title', 'Contact | PureBeauty')

@section('content')
<!-- Nama toko -->
<div class="top-bar d-flex justify-content-between align-items-center p-3">
    <h2 class="site-name">PureBeauty</h2>
    <h3 class="tagline text-center mx-auto">Skin Protection</h3>
</div>

<!-- Main Content -->
<main class="container mt-5">
    <div class="row align-items-center">
        <!-- Kolom Gambar -->
        <div class="col-md-6">
            <img src="{{ asset('assets/img/product.jpg') }}" alt="Contact Us Image" class="img-fluid">
        </div>
        
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h2 class="text-2xl font-bold mb-4">CONTACT US</h2>
            <p>We are here to help you!</p>
            <p class="mb-4">Feel free to contact us through the following information:</p>
            <p class="font-bold">Email: purebeautysofficial@gmail.com</p>
            <p class="font-bold">Instagram: @purebeautys_id</p>
            <p class="font-bold">Twitter: @purebeautyid</p>
        </div>
    </div>
</main>
@endsection