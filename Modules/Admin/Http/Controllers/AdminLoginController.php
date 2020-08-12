<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
   public function login()
   {
       return view('admin::admin.login');
   }
   public function acesslogin(Request $request)
   {
    $remember = false;
    if (isset($request->remember))
        $remember = true;
    $credentials = $request->only('email', 'password');
    if (Auth::guard('admins')->attempt($credentials, $remember)) {
        return redirect()->route('tc');
    }
    return redirect()->back();
   }
   public function logout()
   {
    Auth::guard('admins')->logout();
    return redirect()->route('login');
   }
}
