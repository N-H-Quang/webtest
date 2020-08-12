@extends('admin::layouts.master')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="">Sản phẩm </a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
</ol>
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" runat="server">
    <div class="row">
        @csrf
        <div class="col-7">
            <div class="form-group col">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" placeholder="Name of product" name="pro_name"
                    value="{{old('pro_name',isset($items->pro_name) ? $items->pro_name:'')}}">
                @if($errors->has('pro_name'))
                <div class="error-text text-danger">
                    {{$errors->first('pro_name')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="pro_description"><b>description</b></label>
                <textarea name="pro_description" id="" class="form-control" cols="30"
                    rows="3">{{old('pro_description',isset($items->pro_description) ? $items->pro_description:'')}}</textarea>
                @if($errors->has('pro_description'))
                <div class="error-text text-danger">
                    {{$errors->first('pro_description')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="pro_price"><b>Price</b></label><br>
                <input type="text" name="pro_price" class="form-control"
                    value="{{old('pro_price',isset($items->pro_price) ? $items->pro_price:'')}}">
                @if($errors->has('pro_price'))
                <div class="error-text text-danger">
                    {{$errors->first('pro_price')}}
                </div>
                @endif
            </div>
        </div>
        <div class="Offset-1 col-4">
            <div class="form-group col">
                <label for="pro_number"><b> quantity</b></label><br>
                <input placeholder="quantity" type="number" name="pro_number"
                    value="{{old('pro_number',isset($items->pro_number) ? $items->pro_number:'0')}}"
                    class="form-control">
                    @if($errors->has('pro_number'))
                    <div class="error-text text-danger">
                        {{$errors->first('pro_number')}}
                    </div>
                          @endif
            </div>
            <div class="form-group col">
                <label for="title"><b>status</b></label><br>
                <select class="btn" name="pro_status">
                <option value="">--choose status--</option>
                <option value="approved">approved</option>
                <option value="on sale">on sale</option>
                <option value="not for sale">not for sale</option>
                <option value="in stock">in stock</option>
                <option value="out of stock">out of stock</option>
                <option value="not availability">not availability</option>
                <option value="sold">sold</option>
            </select>
              @if($errors->has('pro_status'))
              <div class="error-text text-danger">
                  {{$errors->first('pro_status')}}
              </div>
                    @endif
              </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success col">Lưu Thông Tin</button>
            </div>
        </div>
    </div>
</form>
@endsection