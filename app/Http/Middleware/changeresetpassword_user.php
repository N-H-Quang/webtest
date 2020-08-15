<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class changeresetpassword_user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=User::where('email',$request->email)->get();
        $user2=$user->first();
        $code = md5($user2->email . $user2->name . $user2->updated_at);
        if((count($user)==0)||($code!=$request->code))
        {
       
         $request->session()->flash('error','email không hợp lệ');
         return redirect()->route('home');
        }
        else
        {
          return $next($request);
        }
    }
}
