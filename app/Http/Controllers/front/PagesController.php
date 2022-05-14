<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('fo.home', [
            'categories' => Category::get(),
            'products' => Product::limit(4)->get()
        ]);
    }
}
