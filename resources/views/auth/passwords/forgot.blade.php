@extends('layouts.app2')
@section('content')
<form class="col-6 offset-3" action="" method="POST">
  @csrf
  <input type="text" style="display: none" name="code" value="{{$code}}" />
  <input type="text" style="display: none" name="email" value="{{$user->email}}" />
  .<div class="form-group">
    <label for=""></label>
    <input type="text" name="password" id="" class="form-control" placeholder="Please enter your new password"
      aria-describedby="helpId">
      @error('password')
      <div class="error-text text-danger">
        {{ $message }}
    </div>
      @enderror
  </div>
 
  <div class="form-group">
    <label for=""></label>
    <input type="text" name="password_confirmation" id="" class="form-control" placeholder="Please enter your new password"
      aria-describedby="helpId">
    @error('password_confirmation')
      <div class="error-text text-danger">
        {{ $message }}
    </div>
    @enderror
    
  </div>
  <div class="form-group">
    <button type="submit" value="Reset password">Reset password</button>
  </div>
</form>
@endsection