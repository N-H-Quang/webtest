@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="">Sản phẩm </a></li>
    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
</ol>
{!! Form::open(array('route'=>array('uploadproduct.update',$items->id),'method'=>'PUT')) !!}
    <div class="row">
        @csrf
        <div class="col-7">
            <div class="form-group col">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" placeholder="Name of product" name="pro_name"
                    value="{{old('pro_name',isset($items->name) ? $items->name:'')}}">
                @if($errors->has('pro_name'))
                <div class="error-text text-danger">
                    {{$errors->first('pro_name')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="pro_description"><b>description</b></label>
                <textarea name="pro_description" id="" class="form-control" cols="30"
                    rows="3">{{old('pro_description',isset($items->description) ? $items->description:'')}}</textarea>
                @if($errors->has('pro_description'))
                <div class="error-text text-danger">
                    {{$errors->first('pro_description')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="pro_price"><b>Price</b></label><br>
                <input type="text" name="pro_price" class="form-control"
                    value="{{old('pro_price',isset($items->price) ? $items->price:'')}}">
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
                    value="{{old('pro_number',isset($items->quantity) ? $items->quantity:'0')}}"
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
                <option  value="">--choose status--</option>
                <option @if ($items->status=='approved')  selected  
                @endif value="approved">approved</option>
                <option @if ($items->status=='on sale')  selected  
                    @endif value="on sale">on sale</option>
                <option @if ($items->status=='not for sale') selected   
                    @endif value="not for sale">not for sale</option>
                <option @if ($items->status=='in stock')    selected
                    @endif value="in stock">in stock</option>
                <option @if ($items->status=='out of stock')  selected  
                    @endif value="out of stock">out of stock</option>
                <option @if ($items->status=='not availability')  selected  
                    @endif value="not availability">not availability</option>
                <option @if ($items->status=='sold')    selected    
                    @endif value="sold">sold</option>
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
{!! Form::close() !!}
@endsection