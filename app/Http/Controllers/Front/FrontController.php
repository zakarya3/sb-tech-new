<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('welcome', compact('cartItems'));
    }

    public function products($name)
    {
        if (Category::where('name',$name)->exists()) {
            $category = Category::where('name',$name)->first();
            $id = $category->id;
            $brand = Brand::all();
            $product = Product::where('cate_id',$id)->paginate(12);
            $cartItems = \Cart::getContent();
            return view('products',compact('product','brand','cartItems'));

        }
    }

    public function filter($id)
    {
        $product = Product::where('brand_id',$id)->paginate(12);
        $brand = Brand::all();
        $cartItems = \Cart::getContent();
        return view('products',compact('product','brand','cartItems'));
    }

    public function product($cate, $name)
    {
        $category = Category::where('name',$cate)->first();
        $id = $category->id;
        $other_prd = Product::where('cate_id',$id)->get()->take(3);
        $product = Product::where('product_name',$name)->first();
        $cartItems = \Cart::getContent();
        return view('product', compact('product','other_prd','cartItems'));
    
    }
}
