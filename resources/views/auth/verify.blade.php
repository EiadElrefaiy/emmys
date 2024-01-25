@extends('layouts.app')

@section('content')
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تحقق من عنوان بريدك الإلكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط التحقق الجديد إلى بريدك الإلكتروني.') }}
                        </div>
                    @endif

                    {{ __('يرجى التحقق من بريدك الإلكتروني للعثور على رابط التحقق.') }}
                    {{ __(' إذا لم تستلم البريد الإلكتروني افحصه في ال spams') }},

                    @error('verification')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('انقر هنا لطلب آخر') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection
