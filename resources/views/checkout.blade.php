@extends('layouts.app')

@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{URL::asset('images/bar.jpg')}});background-size:cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الدفع</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section section section-padding">
        <div class="container">
                <div class="row g-4">

                    <div class="col-lg-7">

                        <!-- Billing Address -->
                    <form action="#" method="POST" id="paymentForm">
                        @csrf
                        <div id="billing-form">
                            <h4 class="mb-4" style=" font-family: 'Quest';">بيانات الدفع</h4>
                            <div class="row row-cols-sm-2 row-cols-1 g-4">
                                <div class="col">
                                    <label>رقم البطاقة*</label>
                                    <input class="form-field" type="text" name="card_number" id="card_number" placeholder="0000-0000-0000-0000">
                                </div>
                                <div class="col">
                                    <label>تاريخ الانتهاء*</label>
                                    <input class="form-field" type="text" name="expiry" id="expiry" placeholder="MM/YY" required placeholder="الاسم الثاني">
                                </div>
                                <div class="col">
                                    <label>رقم الامان CVV *</label>
                                    <input class="form-field" type="text" name="cvv" id="cvv" required placeholder="123">
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>

                    <div class="col-lg-5">

                        <!-- Checkout Summary Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4" style=" font-family: 'Quest';">اجمالي الفاتورة</h4>

                            <form method="POST" action="{{route('payment')}}">
                            @csrf

                            @foreach($cartItems as $index => $item)
                            <input type="hidden" name="items[{{ $index }}][product_image]" value="{{ $item->product_image }}">
                            <input type="hidden" name="items[{{ $index }}][product_price]" value="{{ $item->product_price}}">
                            <input type="hidden" name="items[{{ $index }}][quantity]" value="{{ $item->quantity}}">
                            <input type="hidden" name="items[{{ $index }}][total]" value="{{$item->quantity * $item->product_price}}">
                            @endforeach

                            <table class="checkout-summary-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>المنتج</th>
                                        <th>الاجمالي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cartItems as $index => $item)
                                    <tr>
                                        <td>{{$item->product_name}} x {{$item->quantity}}</td>
                                        <td>{{$item->quantity * $item->product_price}} ريال</td>
                                    </tr>
                                @endforeach
                                    <!--tr>
                                        <td class="border-top">التوصيل</td>
                                        <td>110.00 ريال</td>
                                    </tr-->

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="border-top">اجمالي الطلب</th>
                                        <td>{{ $cartTotal }} ريال</td>
                                        <input type="hidden" name="total" value="{{ $cartTotal }}">
                                    </tr>
                                </tfoot>
                            </table>
                            <button type="submit" style="font-family: 'Quest'; margin-top:20px;" class="btn btn-dark btn-primary-hover rounded-0">تأكيد الدفع</button>
                         </form>
                        </div>
                        <!-- Checkout Summary End -->
                    </div>

                </div>
        </div>
    </div>
    <!-- Product Section End -->
    @endsection
