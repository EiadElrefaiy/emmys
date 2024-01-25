@extends('layouts.app')

@section('content')

    <!-- Login Section Start -->
    <div class="section section-padding" dir="rtl">
        <div class="container">
            <div class="login-register-form">
                <h3 class="title" style="font-family: 'Quest';">تسجيل الدخول</h3>
                <p style="font-family: 'Quest';">ادخل الايميل و كلمة السر</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="row row-cols-1 g-4">
                        <div class="col-md-6">
                        <input id="fname" class="form-field form-control @error('first_name') is-invalid @enderror" type="text" placeholder="الاسم الاول" name="first_name" value="{{ old('first_name') }}" autocomplete="fname" style="font-family: 'Quest';">
                             @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                    </div>
                        <div class="col-md-6">
                        <input id="lname" class="form-field form-control @error('last_name') is-invalid @enderror" type="text" placeholder="الاسم الثاني" name="last_name" value="{{ old('last_name') }}" autocomplete="lname" style="font-family: 'Quest';">
                                 @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                      
                    </div>
                        <div class="col-md-6">
                        <input id="email" class="form-field form-control @error('email') is-invalid @enderror" type="email" placeholder="البريد الالكتروني" name="email" value="{{ old('email') }}" autocomplete="email" style="font-family: 'Quest';">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        
                    </div>
                        <div class="col-md-6">
                        <input id="phone" class="form-field form-control @error('phone') is-invalid @enderror" type="text" placeholder="رقم الجوال" name="phone" value="{{ old('phone') }}" autocomplete="phone" style="font-family: 'Quest';">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        
                    </div>
                        <div class="col">
                        <input id="address" class="form-field form-control @error('address') is-invalid @enderror" type="text" placeholder="العنوان" name="address" value="{{ old('address') }}" autocomplete="address" style="font-family: 'Quest';">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                      
                    </div>
                        <div class="col">
                        <input class="form-field form-control @error('password') is-invalid @enderror" type="password"  placeholder="كلمة السر" name="password" autocomplete="new-password" style="font-family: 'Quest';">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
                    </div>
                        <div class="col">
                            <input  id="password-confirm" type="password" placeholder="تأكيد كلمة السر" class="form-field form-control" name="password_confirmation" autocomplete="new-password" style="font-family: 'Quest';">
                        </div>
                        <div class="col"><input class="btn btn-dark btn-primary-hover rounded-0 w-100" type="submit" value="تسجيل" style="font-family: 'Quest';"></div>
                        <div class="col" style="font-family: 'Quest';">لديك حساب بالفعل؟ &nbsp;<a href="{{route('login')}}"><b>تسجيل الدخول</b></a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

@endsection
