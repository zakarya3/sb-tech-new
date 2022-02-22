<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Order;
use App\Models\User;

class FrontendController extends Controller
{
    public function index()
    {
        $category = Category::all()->count();
        $product = Product::all()->count();
        $brand = Brand::all()->count();
        $order = Order::where('status','0')->count();
        $station = User::where('role_as','2')->orderBy('created_at','desc')->get();
        $admins = User::where('role_as','1')->orWhere('role_as','3')->orWhere('role_as','4')->get();
        return view('admin.index', compact('category','product','brand','order','station','admins')); 
    }
}
