@extends('layouts.app2')

@section('content')
@if (Session::has('sucesss'))
      <div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
          <strong>Success!</strong> {{session('sucesss')}}
        </div>
      @endif
      @if (Session::has('error'))
      <div class="pull-right alert alert-danger" style=" display: inline-table;float: right;">
          <strong>error!</strong> {{session('error')}}
        </div>
      @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('vui lòng nhập email của bạn') }}

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="email" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Gửi Mail') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
