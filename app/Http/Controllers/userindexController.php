<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userindexController extends Controller
{
    public function index()
    {
        $product=product::where('status','1')->get();
        return view('user.index',compact('product'));
    }
    public function login()
    {
        return view('login.login');
    }
    public function accesslogin(Request $request)
    {
        $remember = false;
    if (isset($request->remember))
        $remember = true;
    $credentials = $request->only('email', 'password');
    if (Auth::guard('web')->attempt($credentials, $remember)) {
        return redirect()->route('home');
    }
    return redirect()->back();
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('userlogin');
    }
}
