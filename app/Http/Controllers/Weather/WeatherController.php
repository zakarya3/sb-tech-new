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
        $user = User::where('name',Auth::user()->name)->first();
        return view('overview', compact('user'));
        // dd($user);
    }

    public function search(Request $request)
    {
        $user = User::where('name',Auth::user()->name)->first();
        return view('search', compact('user'));
        // dd($user);
    }
}
 