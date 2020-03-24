<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        $products = Product::when(request()->input('category'), function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('id', request()->input('category'));
                });
            })
            ->paginate(6);

        return view('home', compact('categories', 'products'));
    }
}
