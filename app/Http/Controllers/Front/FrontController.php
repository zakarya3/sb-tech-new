<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Session;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Mail;
use App\Models\Reference;

class FrontController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        $latest = Product::latest()->take(10)->get();
        $featured_products = Product::where('trending','1')->take(8)->get();
        return view('welcome', compact('cartItems', 'featured_products','latest'));
    }

    public function products($name)
    {
        if (SubCategory::where('name',$name)->exists()) {
            $category = SubCategory::where('name',$name)->first();
            $id = $category->id;
            $id_tp = $category->categ_id;
            $type = SubCategory::where('categ_id',$id_tp)->get();
            $product = Product::where('cate_id',$id)->paginate(12);
            $cartItems = \Cart::getContent();
            return view('products',compact('product','type','cartItems','name'));

        }
    }
    public function products_cat($name)
    {
        if (Category::where('name',$name)->exists()) {
            $cartItems = \Cart::getContent();
            $category1 = Category::where('name',$name)->first();
            $id = $category1->id;
            $type = SubCategory::where('categ_id',$id)->get();
            $id_type = SubCategory::where('categ_id',$id)->pluck('id');
            $product = Product::whereIn('cate_id',$id_type)->paginate(12);
            return view('products',compact('type','name','product','cartItems'));

        }
    }
    public function search(Request $request)
    {
        $name = $request->item;
        $product = Product::where('product_name',$name)->first();
        $id_prd = $product->cate_id;
        $category = SubCategory::where('id',$id_prd)->first();
        $id = $category->id;
        $other_prd = Product::where('cate_id',$id)->get()->take(3);
        $cartItems = \Cart::getContent();
        return view('product', compact('product','name','cartItems','other_prd'));
    }

    public function product($cate, $name)
    {
        $category = SubCategory::where('name',$cate)->first();
        $id = $category->id;
        $other_prd = Product::where('cate_id',$id)->get()->take(3);
        $product = Product::where('product_name',$name)->first();
        $cartItems = \Cart::getContent();
        return view('product', compact('product','other_prd','cartItems'));
    
    }

    public function contact()
    {
        $cartItems = \Cart::getContent();
        return view('contact', compact('cartItems'));
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $subject = $request->subject;
        $message1 = $request->message;
        $data = ['name'=> $name, 'phone'=> $phone, 'email'=> $email, 'subject'=> $subject, 'message1'=> $message1];
        $token = $request->input('g-recaptcha-response');
        if ($token) {
            Mail::send('message', $data, function ($message) use ($email) {
                $message->to('info@sbtech.ma');
                $message->subject('Question?');
            });
            return redirect()->back();
        } else {
            return redirect()->back()->with('status', 'please make sure to select the captcha');
        }
        
    }

    public function reference()
    {
        $cartItems = \Cart::getContent();
        $references = Reference::all();
        return view('references', compact('references', 'cartItems'));
    }

    public function pdf(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $company = $request->company;
        $data = ['name' => $name, 'company' => $company, 'email' => $email];
        Mail::send('catalogue', $data, function ($message) use ($email) {
            $message->to($email);
        });

        Mail::send('admin-cata', $data, function ($message) use ($email) {
            $message->from($email);
            $message->to('info@sbtech.ma');
            $message->subject('Téléchargement du catalogue');
        });
        return redirect()->back();
    }
}
