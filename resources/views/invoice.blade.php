@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{ URL::asset('images/bar.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الرئيسية</a></li>
                <li style="font-family: 'Quest'; font-size: 23px;">حسابي / فاتورة</li>
            </ul>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n6 mb-lg-n10 cart_table">

            <div class="col-12 mb-6 mb-lg-10" style="overflow-x:auto;">

                    <!-- Cart Table For Tablet & Up Devices Start -->
                    <table style="width:1295px;" class="cart-table table table-bordered text-center align-middle mb-6 d-md-table">
                        <thead>
                            <tr>
                                <th class="image" style="font-family: 'Quest';">صورة</th>
                                <th class="title" style="font-family: 'Quest';">المنتج</th>
                                <th class="price" style="font-family: 'Quest';">السعر</th>
                                <th class="quantity" style="font-family: 'Quest';">كمية</th>
                                <th class="total" style="font-family: 'Quest';">اجمالي</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            <!-- Your dynamic cart items will be looped here -->
                            @foreach($invoice_items as $Item)
                                <tr class="cart-item">
                                    <th><a href="#">
                                            <img src="{{ URL::asset($Item->image) }}" alt="{{ $Item->name }}">
                                        </a></th>
                                    <td style="font-family: 'Quest';"><a href="#">{{ $Item->name}}</a></td>
                                    <td class="product_price" dir="ltr">{{ $Item->price }} SR</td>
                                    <td>
                                        <div class="product-quantity-count">
                                            <input class="product-quantity-box" type="text" name="quantity" disabled value="{{ $Item->quantity }}">
                                        </div>
                                    </td>
                                    <td dir="ltr" class="total_price">{{ $Item->quantity * $Item->price}} SR</td>
                                </tr>
                            @endforeach
                            <!-- End of dynamic cart items loop -->
                        </tbody>
                    </table>
                    <!-- Cart Table For Tablet & Up Devices End -->
                </div>

                <!-- Cart Totals Start -->
                <div class="col">
                    <br>
                    <br>
                    <div class="cart-totals">
                        <h4 class="title" style="font-family: 'Quest';">اجمالي الفاتورة</h4>
                        <table class="table table-borderless bg-transparent">
                            <tbody>
                                <tr class="total">
                                    <th style="font-family: 'Quest';">الاجمالي</th>
                                    <td><strong><span class="amount" dir="ltr">{{ $totalPrice }} SR</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Cart Totals End -->

            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection
