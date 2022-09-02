<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::where('is_parent',1)->with('childCategories')->get();
    //     return view('vendor.voyager.categories.browse',with(compact('categories')));
    // }
}
