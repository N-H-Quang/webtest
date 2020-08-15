<?php

namespace Modules\Admin\Http\Controllers;

use App\product;
use App\User as User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminUserController extends Controller
{
   public function index()
   {
      $user= User::all();
      foreach($user as $key=>$item)
      {
         if($item->name=='admin')
         {
            unset($user[$key]);
         }
      }
     return view('admin::user.index',compact('user'));
   }
   public function destroy($id, Request $request)
   {
     $user=User::with(['products:userid,id'])->get();
     $user=$user->find($id);
     if(count($user->products)>0)
     {
      $request->session()->flash('error','xóa thất bại');
      return redirect()->back();
     }
     else
     {
        $user->delete();
        $request->session()->flash('sucesss','xóa thành công');
        return redirect()->back();
     }
   }
}
