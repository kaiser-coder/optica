<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return '';
    }

    public function create()
    {
        return view('bo.products', [
            'categories' => ['Category 1', 'Category 2'],
            'benchmarks' => ['Prada', 'Dolce', 'Ray Ban'],
            'countries' => ['France', 'Allemagne', 'Londres']
        ]);
    }

    public function store(ProductRequest $request)
    {
        Product::firstOrCreate($request->except('_token'));
        return redirect()->route('products.list');
    }
}
