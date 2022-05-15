<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('bo.categories-list', [
            'categories' => Category::get()
        ]);
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
