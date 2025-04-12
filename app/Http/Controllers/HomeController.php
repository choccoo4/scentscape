<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('produk')->orderByDesc('id_produk')->limit(3)->get();
        return view('home', compact('products'));
    }
}
