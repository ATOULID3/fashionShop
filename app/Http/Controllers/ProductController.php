<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Fetch fake products from API
        $response = Http::get('https://fakestoreapi.com/products');
        $products = $response->json();

        // Paginate results manually
        $perPage = 12; // Number of products per page
        $currentPage = request()->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;

        $paginatedProducts = new LengthAwarePaginator(
            array_slice($products, $offset, $perPage),
            count($products),
            $perPage,
            $currentPage,
            ['path' => url('shop')]
        );

        return view('pages.shop.shop', compact('paginatedProducts'));
    }
    public function show($id)
    {
        // Fetch single product details from API
        $response = Http::get("https://fakestoreapi.com/products/{$id}");
        $product = $response->json();

        return view('pages.shop.shop-details', compact('product'));
    }
}

