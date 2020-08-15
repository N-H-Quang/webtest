@extends('admin::layouts.master')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
        <li class="breadcrumb-item"><a href="#">Nhân Viên </a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
    </ol>
</nav>
<form>
</form>
<div class="table-responsive">
    <h1>Quản lý Nhân Viên</h1>
        <table class="table table-striped table-sm">
            <tr>

                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>email_verified_at</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>action</th>
            </tr>
            @foreach ($user as $item)
            <tr data-product="{{$item['id']}}">
                <td>{{$item['id']}}</td>
                <td class="pl-1">
                    {{$item['name']}}
                </td>
                <td>
                    {{$item['email']}}
                </td>

                <td>{{$item['email_verified_at']}}</td>

                <td>{{$item['created_at']}}</td>
                <td>{{$item['updated_at']}}</td>
                <td>{!! Form::open(array('route'=>array('usercontroller.destroy',$item['id']),'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash">Xóa</i></button>
                   {!! Form::close() !!}</td>
            </tr>
            @endforeach
        </table>
        {{-- {{$pt->links()}} --}}
</div>
</main>
</div>
</div>
@endsection