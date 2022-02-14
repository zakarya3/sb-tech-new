<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class FrontendController extends Controller
{
    public function index()
    {
        $category = Category::all()->count();
        $product = Product::all()->count();
        $brand = Brand::all()->count();
        return view('admin.index', \compact('category','product','brand')); 
    }
}
