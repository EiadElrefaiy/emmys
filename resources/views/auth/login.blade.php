@extends('layouts.app')

@section('content')
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->

    <!-- Login Section Start -->
    <div class="section section-padding" dir="rtl">
        <div class="container">
            <div class="login-register-form">
                <h3 class="title" style="font-family: 'Quest';">تسجيل الدخول</h3>
                <p style="font-family: 'Quest';">ادخل الايميل و كلمة السر</p>
                <form method="POST" action="{{ route('login') }}">
                   @csrf
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <input  id="email" type="email" placeholder="الايميل" class="form-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="font-family: 'Quest';">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ "خطأ في البريد الالكتروني او كلمة السر" }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col">
                        <input id="password" type="password" class="form-field form-control @error('password') is-invalid @enderror" placeholder="كلمة السر" name="password" required autocomplete="current-password" style="font-family: 'Quest';">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ "خطأ في البريد الالكتروني او كلمة السر" }}</strong>
                                    </span>
                         @enderror
                        </div>
                        <div class="col">
                            <input class="btn btn-dark btn-primary-hover rounded-0 w-100" type="submit" value="دخول" style="font-family: 'Quest';">
                        </div>
                        <div class="col" style="font-family: 'Quest';">لبس لديك حساب؟ &nbsp;<a href="{{route('register')}}"><b>انشاء حساب</b></a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

@endsection
