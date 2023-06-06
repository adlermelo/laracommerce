<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::get('https://dummyjson.com/products');

        $products = $response->json();

        //dd('products.index');

        return view('produtos.index', compact('products'));
    }
}
