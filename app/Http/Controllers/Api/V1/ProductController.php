<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::when(request()->input('category'), function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('id', request()->input('category'));
                });
            })
            ->paginate(6);

        return new ProductResource($products);
    }
}
