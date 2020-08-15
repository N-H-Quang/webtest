<?php

namespace Modules\Admin\Http\Controllers;

use App\logproduct;
use App\product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminLogproductController extends Controller
{
    public function index()
    {
        $product=logproduct::all();
        return view('admin::logproduct.index',compact('product'));
    }
    public function restore(Request $request, $id)
    {
        $product=logproduct::find($id);
        $product2=$product->toArray();
        product::create($product2);
        $product->delete();
        $request->session()->flash('sucesss','restore thành công');
        return redirect()->back();
    }
    public function destroy(Request $request,$id)
    {
        $product=logproduct::findorfail($id);
        $product->delete();
        $request->session()->flash('sucesss','xóa thành công');
        return redirect()->back();
    }
}
