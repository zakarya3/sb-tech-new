<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Notification;
use Illuminate\Support\Facades\Session;
use App\Notifications\SendEmailNotification;
use App\Models\Order;
use App\Models\OrderItem;
use Mail;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        if (User::where('name',$request->session()->get('name'))->exists()) {
            $user = User::where('name',$request->session()->get('name'))->first();
        }else{
            $user=NULL;
        }
        return view('checkout', compact('cartItems','user'));
        
    }

    public function paymentmethod(Request $request)
    {
        $user = User::where('name',$request->session()->get('name'))->first();
        $order = Order::where('user_id',$user->id)->latest('created_at','desc')->first();
        $user_name = $user->name;
        $email['to'] = $user->email;
        $trackin = $order->tracking_no;
        $price = $order->total_price;
        $choice = $request->order_choice;
        $data = ['user_name' => $user_name, 'trackin' => $trackin, 'price' => $price,'choice' => $choice];
        Mail::send('mail', $data, function ($message) use ($email) {
            $message->to($email['to']);
            $message->subject('test');
        });
    }
}
