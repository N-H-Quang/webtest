<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\resetpasswordrequest;
use App\product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
    public  function signup()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest  $request)
    {
        $data=$request->except('_token','password_confirmation');
        $data['password']=Hash::make($request->password);
        User::create($data);
        $request->session()->flash('sucesss','thêm thành công');
        return redirect()->back();
    }
    public function resetpassword(Request $request)
    {
        return view('auth.passwords.confirm');
    }
    public function sendmail(Request $request)
    {
        $user=User::where('email',$request->email)->get();
        
        if(count($user)==0)
        {
            $request->session()->flash('error','không có email này');
        return redirect()->back();
        }
        else
        {
            $user=$user->first();
         $code = md5($user->email . $user->name . $user->updated_at);
         $url = route("reset-password", ['code' => $code, 'email' => $request->email]);
         $data = ['route' => $url];
             Mail::send('admin::email.email', $data, function ($message) use ($user) {
                $message->to($user->email, $user->name)->subject('Láy lại mật khẩu');
            });
        $request->session()->flash('sucesss','gửi thành công');
        return redirect()->back();
        }
    }
    public function checkcode(Request $request)
    {
        $user=User::where('email',$request->email)->get();
        $user=$user->first();
        $data=[
            'user'=>$user,
            'code'=>$request->code
        ];

        return view('auth.passwords.forgot',$data);
    }
    public function setforgotpassword(resetpasswordrequest $request)
    {
        $user=User::where('email',$request->email)->first();
        $user->password=Hash::make($request->password);
        $user->updated_at=Carbon::now();
        $user->save();
        $request->session()->flash('sucesss','mật khẩu đã được đổi');
        return redirect()->route('home');
    }
}