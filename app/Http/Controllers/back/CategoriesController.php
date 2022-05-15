<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('bo.categories-list');
    }

    public function create()
    {
        return view('bo.categories-create');
    }

    public function store(CategoryRequest $request)
    {
        Category::firstOrCreate($request->except('_token'));
        return redirect()->route('categories.list');
    }
}
