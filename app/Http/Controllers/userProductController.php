<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\product;
use Illuminate\Http\Request;

class userProductController extends Controller
{
    public function index()
    {
        $product=product::where('userid',get_data_user('web','id'))->get();
        return view('uploadproduct.index',compact('product'));
      
    }
    public function create()
    {
        return view('uploadproduct.create');
    }
    public function store(StoreProductRequest $request)
    {
        $data=['name'=>$request->pro_name,'description'=>$request->pro_description,'price'=>$request->pro_price,'status_in_stock'=>$request->pro_status,'quantity'=>$request->pro_number,'userid'=>get_data_user('web','id')]; 
        product::create($data);
         $request->session()->flash('sucesss','thêm thành công');
         return redirect()->back();
    }
    public function show($id)
    {
        $items=product::find($id);
        return view('uploadproduct.update',compact('items'));
    }
    public function update(StoreProductRequest $request,$id)
    {

        $data=['name'=>$request->pro_name,'description'=>$request->pro_description,'price'=>$request->pro_price,'status_in_stock'=>$request->pro_status,'quantity'=>$request->pro_number,'userid'=>get_data_user('web','id')]; 
        $item=product::find($id);
        $update=$item->update($data);
        $request->session()->flash('sucesss','sữa thành công');
        return redirect()->back();
    }
}
