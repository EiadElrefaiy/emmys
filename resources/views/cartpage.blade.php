@extends('layouts.app') <!-- Assuming you have a layout file -->

@php
    $hideHeaderButton = true;
@endphp

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{ URL::asset('images/bar.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الرئيسية</a></li>
                <li style="font-family: 'Quest'; font-size: 23px;">العربة</li>
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
                                <th class="remove" style="font-family: 'Quest';">حذف</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            <!-- Your dynamic cart items will be looped here -->
                            @foreach($cartItems as $cartItem)
                                <tr class="cart-item">
                                    <th><a href="#">
                                            <img src="{{ URL::asset($cartItem->product_image) }}" alt="{{ $cartItem->product_name }}">
                                        </a></th>
                                    <td style="font-family: 'Quest';"><a href="#">{{ $cartItem->product_name}}</a></td>
                                    <td class="product_price" dir="ltr">{{ $cartItem->product_price }} SR</td>
                                    <td>
                                        <div class="product-quantity-count">
                                            <button class="add qty-btn"
                                            data-user-id="{{ $cartItem->user_id }}"
                                            data-product-id="{{ $cartItem->product_id  }}"
                                            >
                                            -</button>
                                            <input class="product-quantity-box" type="text" name="quantity" value="{{ $cartItem->quantity }}">
                                            <button class="sub qty-btn"
                                            data-user-id="{{ $cartItem->user_id }}"
                                            data-product-id="{{ $cartItem->product_id  }}"
                                            >
                                            +</button>
                                        </div>
                                    </td>
                                    <td dir="ltr" class="total_price">{{ $cartItem->quantity * $cartItem->product_price}} SR</td>
                                    <td>
                                        <button class="remove-btn"
                                        data-cart-id="{{ $cartItem->id }}"
                                        ><i class="sli-close"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- End of dynamic cart items loop -->
                        </tbody>
                    </table>
                    <!-- Cart Table For Tablet & Up Devices End -->
                    <!-- Cart Action Buttons Start -->
                    <div class="row justify-content-between gap-3">
                        <div class="col-auto"><a href="{{ route('shop') }}" class="btn btn-outline-dark btn-primary-hover rounded-0" style="font-family: 'Quest';">إضافة منتجات اخرى</a></div>
                        <div class="col-auto d-flex flex-wrap gap-3">
                                <button class="btn text-white rounded-0 clear" style="font-family: 'Quest'; background-color:#bb2d3b;"
                                 data-user-id="{{ auth()->check() ? auth()->user()->id : null }}"
                                >حذف العربة</button>
                        </div>
                    </div>
                    <!-- Cart Action Buttons End -->

                </div>

                <!-- Cart Totals Start -->
                <div class="col">
                    <br>
                    <br>
                    <div class="cart-totals">
                        <h4 class="title" style="font-family: 'Quest';">اجمالي العربة</h4>
                        <table class="table table-borderless bg-transparent">
                            <tbody>
                                <tr class="total">
                                    <th style="font-family: 'Quest';">الاجمالي</th>
                                    <td><strong><span class="amount" dir="ltr">{{ $totalPrice }} SR</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="font-family: 'Quest';" href="{{ route('checkout') }}" class="btn btn-dark btn-primary-hover rounded-0">الدفع</a>
                    </div>
                </div>
                <!-- Cart Totals End -->

            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    // Assuming you're using jQuery for simplicity
    $(document).ready(function() {        
        
        $('.qty-btn').on('click', function() {
            var productId = $(this).data('product-id');

            var userId = $(this).data('user-id');

            var quantityInput = $(this).parent().find('.product-quantity-box');
            var totalPrice = $(this).parent().parent().parent().find('.total_price');
            var productPrice = parseInt($(this).parent().parent().parent().find('.product_price').html());

            var currentQuantity = parseInt(quantityInput.val()); // Ensure it's a valid number, default to 0

            var newQuantity = currentQuantity + ($(this).hasClass('sub') ? 1 : -1);

            // Ensure the quantity is at least 1
            newQuantity = Math.max(newQuantity, 1);

            // Update the UI
            quantityInput.val(newQuantity);

            totalPrice.html((newQuantity * productPrice) + " " +"SR");
            
            var total = 0;
            $(".total_price").each(function(){
                total += parseInt($(this).html());
            });
            $(".amount").html(total + " " + "SR");

            console.log("Updating quantity for Cart Item ID:", productId, userId, "to", newQuantity , );
            updateCartItemQuantity(productId, userId , newQuantity);
        });
        
        function updateCartItemQuantity(productId, userId , quantity) {
            // Customize this URL according to your routes
            var updateQuantityUrl = "{{ route('updateCartItemQuantity') }}";

            // Retrieve the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


            // Send AJAX request to update quantity
            $.ajax({
                type: 'POST',
                url: updateQuantityUrl,
                data: {
                    user_id: userId,
                    product_id: productId,
                    quantity: quantity,
                    _token: csrfToken
                },
                success: function(response) {
                    console.log(response);
                    //alert('Cart item quantity updated successfully!');
                },
                error: function(error) {
                    console.error(error);
                    alert('Error updating item quantity.');
                }
            });
        }

        $('.remove-btn').on('click', function() {

            var CartId = $(this).data('cart-id');

            $(this).parent().parent().fadeOut();

            $(this).parent().parent().find('.total_price').removeClass('total_price');

            var total = 0;

            $(".total_price").each(function(){
                total += parseInt($(this).html());
            });

            $(".amount").html(total + " " + "SR");

            deleteItemFromCart(CartId);
        });

        function deleteItemFromCart(cartId) {
            // Customize this URL according to your routes
            var deleteItemFromCart = "{{ route('removeFromCart') }}";

            // Retrieve the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


            // Send AJAX request to update quantity
            $.ajax({
                type: 'POST',
                url: deleteItemFromCart,
                data: {
                    id: cartId,
                    _token: csrfToken
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                    alert('Unexpected Error.');
                }
            });
        }

        $('.clear').on('click', function() {
            var UserId = $(this).data('user-id');
            $(".cart-item").each(function(){
                $(this).hide();
            });
            $(".amount").html(0 + " " + "SR");
            deleteAllItemFromCart(UserId);
        });

        function deleteAllItemFromCart(userId) {
            // Customize this URL according to your routes
            var deleteAllItemFromCart = "{{ route('removeAllFromCart') }}";

            // Retrieve the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


            // Send AJAX request to update quantity
            $.ajax({
                type: 'POST',
                url: deleteAllItemFromCart,
                data: {
                    user_id: userId,
                    _token: csrfToken
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                    alert('Unexpected Error.');
                }
            });
        }

    });
</script>

@endsection
