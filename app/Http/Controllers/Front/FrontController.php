<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function products($name)
    {
        if (Category::where('name',$name)->exists()) {
            $category = Category::where('name',$name)->first();
            $id = $category->id;
            $brand = Brand::all();
            $product = Product::where('cate_id',$id)->paginate(12);
            return view('products',compact('product','brand'));

        }
    }

    public function filter($id)
    {
        $product = Product::where('brand_id',$id)->paginate(12);
        $brand = Brand::all();
        return view('products',compact('product','brand'));
    }
}
