@extends('layouts.app')

@section('content')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 align-items-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-3 f-w-400">Login into your account</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="feather icon-mail"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email address"@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="feather icon-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password"@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="text-left mt-2">
                            <div class="checkbox checkbox-primary d-inline">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember" class="cr">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">
                            {{ __('Login') }}
                        </button>

                        <div class="form-group text-left">
                            
                        @if (Route::has('password.request'))
                            <a class="anchor-link" href="{{ route('password.request') }}">
                                {{ ('Forgot Your Password?') }}
                            </a>
                        @endif

                        @if(Route::has('register'))
                        <p class="mb-0 text-muted">Don’t have an account? <a class="anchor-link" href="{{ route('register') }}">Signup</a></p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->
@endsection
