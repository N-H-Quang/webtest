<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        $product=product::all();
        return view('admin::product.index',compact('product'));
    }
    public function create()
    {
        return view('admin::product.create');
    }
    public function store(StoreProductRequest $request)
    {
        $data=['name'=>$request->pro_name,'description'=>$request->pro_description,'price'=>$request->pro_price,'status_in_stock'=>$request->pro_status,'quantity'=>$request->pro_number,'userid'=>2]; 
        product::create($data);
         $request->session()->flash('sucesss','thêm thành công');
         return redirect()->back();
    }
    public function show($id)
    {
        $items=product::find($id);
        return view('admin::product.show',compact('items'));
    }
    public function update (StoreProductRequest $request,$id)
    {
        $data=['name'=>$request->pro_name,'description'=>$request->pro_description,'price'=>$request->pro_price,'status_in_stock'=>$request->pro_status,'quantity'=>$request->pro_number,'userid'=>2]; 
        $item=product::find($id);
        $update=$item->update($data);
        $request->session()->flash('sucesss','sữa thành công');
        return redirect()->back();
    }
    public function destroy(Request $request,$id)
    {
        $product=product::findorfail($id);
        $product->delete();
        $request->session()->flash('sucesss','xóa thành công');
        return redirect()->back();
    }
    public function changepublic($id)
    {
        $product=product::find($id);
        $product->status==0?$product->status=1:$product->status=0;
        $product->save();
        return 1;
    }
}
