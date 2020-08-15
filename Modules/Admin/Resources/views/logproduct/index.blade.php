@extends('admin::layouts.master')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
      <li class="breadcrumb-item"><a href="#">Sản Phẩm </a></li>
      <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
    </ol>
  </nav>
  <form>
  </form> 
            <div class="table-responsive">
            <h1>Quản lý sản phẩm  </h1>
              <table class="table table-striped table-sm">
                <tr>
                  
                  <th>id</th>
                  <th>name</th>
                  <th>description</th>
                  <th>price</th>
                  <th>quantity</th>
                  <th>status in stock</th>
                  <th>date of submission</th>
                  <th>status</th>
                  <th>action</th>
                </tr>
                @foreach ($product as $item)
                 <tr data-product="{{$item['id']}}">
                 <td>{{$item['id']}}</td>
                 <td class="pl-1">
                   {{$item['name']}}
                </td>
                <td>
                  {{$item['description']}}
                </td>
                
                 <td>{{$item['price']}}</td> 
              
                 <td>{{$item['quantity']}}</td> 
              <td>{{$item['status_in_stock']}}</td>
                 <td>{{$item['created_at']}}</td>
                 <td class="badge {{$item->getstatus()['class']}}">{{$item->getstatus()['name']}}</td>  
            <td ><a href="{{route('restore',$item['id'])}}" lass="btn btn-success">restore
                {!! Form::open(array('route'=>array('restoredestroy',$item['id']),'method'=>'DELETE')) !!}
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></button>
               {!! Form::close() !!}
                </td> 
                 </tr>   
                @endforeach
              </table>
              
            </div>
          </main>
        </div>
      </div>
@endsection
