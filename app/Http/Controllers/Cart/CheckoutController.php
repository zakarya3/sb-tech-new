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
        $orders = OrderItem::where('order_id',$order->id)->get();
        $user_name = $user->name;
        $address = $user->address;
        $email['to'] = $user->email;
        $trackin = $order->tracking_no;
        $date = $order->created_at;
        $price = $order->total_price;
        $choice = $request->order_choice;
        $data = ['orders' => $orders, 'date' => $date, 'address' => $address, 'user_name' => $user_name, 'trackin' => $trackin, 'price' => $price,'choice' => $choice];
        Mail::send('mail', $data, function ($message) use ($email) {
            $message->to($email['to']);
            $message->subject('Votre commande');
        });
        Mail::send('admin-mail', $data, function ($message) use ($email) {
            $message->to('zakaria.aanni@gmail.com');
            $message->subject('test');
        });
        \Cart::clear();
        return view('checkout-complete',compact('user'));
    }
}
