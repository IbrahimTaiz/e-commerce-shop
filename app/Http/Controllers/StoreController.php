<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function products()
    {
        $products = [
            ['id' => 1, 'name' => 'Fancy Product', 'price' => '$40.00 - $80.00', 'sale' => false, 'rating' => 0],
            ['id' => 2, 'name' => 'Special Item', 'price' => '$18.00', 'original_price' => '$20.00', 'sale' => true, 'rating' => 5],
            ['id' => 3, 'name' => 'Sale Item', 'price' => '$25.00', 'original_price' => '$50.00', 'sale' => true, 'rating' => 0],
            ['id' => 4, 'name' => 'Popular Item', 'price' => '$40.00', 'sale' => false, 'rating' => 5],
        ];

        return view('shop.products', ['products' => $products]);
    }

    public function productDetails($id)
    {
        // In a real app, you would fetch this from a database based on $id
        $product = ['id' => $id, 'name' => 'Sample Product', 'description' => 'This is a sample product description.'];
        return view('shop.product-details', ['product' => $product]);
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function about()
    {
        $pageTitle = "About Our Store";
        $rawHtml = "<p>We are a passionate team dedicated to bringing you the best products.</p>";
        
        return view('shop.about-us', [
            'title' => $pageTitle,
            'rawHtml' => $rawHtml
        ]);
    }

    public function contact()
    {
        return view('shop.contact');
    }
}