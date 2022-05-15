<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        return view('bo.products-list', [
            'products' => Product::get()
        ]);
    }

    public function create()
    {
        return view('bo.products-create', [
            'categories' => Category::get(),
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
