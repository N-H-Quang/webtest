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
            <h1>Quản lý sản phẩm    <a name="" id="" class="float-right btn btn-primary" href="{{route('product.create')}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path d="M1216 832V704q0-26-19-45t-45-19H896V384q0-26-19-45t-45-19H704q-26 0-45 19t-19 45v256H384q-26 0-45 19t-19 45v128q0 26 19 45t45 19h256v256q0 26 19 45t45 19h128q26 0 45-19t19-45V896h256q26 0 45-19t19-45zm320-64q0 209-103 385.5T1153.5 1433T768 1536t-385.5-103T103 1153.5T0 768t103-385.5T382.5 103T768 0t385.5 103T1433 382.5T1536 768z" fill="#626262"/></svg></a> </h1>
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
              <td><a href="{{route('product.update',$item['id'])}}"  class="btn btn-success"><i class="fas fa-pen">Sửa</i></a>
                
                  {!! Form::open(array('route'=>array('product.destroy',$item['id']),'method'=>'DELETE')) !!}
                   <button type="submit" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></button>
                  {!! Form::close() !!}
                </td> 
                 </tr>   
                @endforeach
              </table>
              {{-- {{$pt->links()}} --}}
            </div>
          </main>
        </div>
      </div>
@endsection
@section('script')
<script>
 
  $("table > tbody > tr > .badge").click(function()
  {
 
 var id=   $( this ).parent().attr("data-product");
 var url="{{url("adminmanager/changestatus")}}/"+id;
 $.ajax({
        url: url,
        type: "GET",
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        success: function(data){
            alert("okay");
            location.reload();

        }, 
        error: function(){
              alert("failure From php side!!! ");
         }
        }); 

       
  
  })  
</script>    
@endsection