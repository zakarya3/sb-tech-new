<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role_as == '2') {
            $user = User::where('name',Auth::user()->name)->first();
            return view('overview', compact('user'));
            }
            else {
                Auth::logout();
                Session::flush();
                return redirect('/login')->with('status','Please Login First');
            }
        }
        else{
            return redirect('/login')->with('status','Please Login First');
        }
        // dd($user);
    }

    public function search(Request $request)
    {
        $user = User::where('name',Auth::user()->name)->first();
        return view('search', compact('user'));
        // dd($user);
    }
}
 