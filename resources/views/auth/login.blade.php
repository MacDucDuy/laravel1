@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Đăng nhập hệ thống</div>

                <div class="card-body">
                    @if($errors->any())
                  
                    <div class="alert alert-danger">
                        Đã có lỗi xảy ra
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Địa chỉ email hoặc tên đăng nhập</label>

                            <div class="col-md-6">
                                <input  placeholder="Địa chỉ Email hoặc username" id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                name="username" value="{{ old('username') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label aria-placeholder="Mật khẩu" for="password" class="col-md-4 col-form-label text-md-end">Mật khẩu</label>

                            <div class="col-md-6">
                                <input placeholder="Mật khẩu" id="password" type="password" class="form-control @error('password') is-invalid 
                                @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       Ghi nhớ mật khấu
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Đăng nhập
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Quên mật khẩu
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
