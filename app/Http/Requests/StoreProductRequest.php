<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        if($request->_method=='PUT')
        {
            return [
                'pro_name'=>'required|min:8',
                'pro_price'=>'required',
                'pro_number'=>'numeric|min:0',
                'pro_status'=>'required',
            ];
        }else
        return [
            'pro_name'=>'required|min:8|unique:products,name'.$this->name,
            'pro_price'=>'required',
            'pro_number'=>'numeric|min:0',
            'pro_status'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>'nhập tên sản phẩm',
            'pro_name.min'=>'nhập tên dài hơn',
            'pro_price.required'=>'nhập giá của sản phẩm',
            'pro_number.min'=>'nhập số lượng sản phẩm',
            'pro_status.required'=>'chọn status'
        ];
    }
}
