<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Tambahkan ini

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua produk dari database
        return view('shop', compact('products'));
    }
}
