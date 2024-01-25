@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="bg-light">
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{ URL::asset('images/bar.jpg') }});background-size:cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الرئيسية</a></li>
                <li style="font-family: 'Quest'; font-size: 23px;">تفاصيل المنتح</li>
            </ul>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <div class="product-details-section section pt-5">
        <div class="container">
        <div id="successPopup" class="success-popup">
                        تم اضافة المنتج الى العربة
                </div>

        <div class="row row-cols-md-2 row-cols-1 mb-n6" dir="rtl">

                            <!-- Product Image Start -->
                            <div class="col-md-4 mb-3">
                                <div class="single-product-image">

                                    <!-- Product Badge Start -->
                                    <div class="single-product-badge-left">
                                        <span class="single-product-badge-new">new</span>
                                    </div>
                                    <div class="single-product-badge-right">
                                        <span class="single-product-badge-sale">sale</span>
                                        <span class="single-product-badge-sale">-11%</span>
                                    </div>
                                    <!-- Product Badge End -->

                                    <!-- Product Image Slider Start -->
                                    <div class="">
                                            <div class="card"><img class="product_img" loading="lazy" src="{{ URL::asset($product->image) }}" alt="Signature Blend Roast Coffee"></div>
                                    </div>
                                    <!-- Product Image Slider End -->

                                </div>
                            </div>
                            <!-- Product Image End -->

                <!-- Product Content Start -->
                <div class="col-md-8 mb-6" dir="rtl">
                    <div class="single-product-content">
                        <h1 class="single-product-title" style="font-family: 'Quest';">{{ $product->name }}</h1>
                        <div class="single-product-price">{{ $product->price }} ريال
                                <!--del dir="rtl">{{ $product->original_price }} ريال</del-->
                        </div>
                        <ul class="single-product-meta">
                        <li><span class="label">النوع :</span> <span class="value">{{ $product->name }}</span></li>
                            <li><span class="label">التوافر :</span> <span class="value">متوفرة</span></li>
                            <li><span class="label">الحجم :</span> <span class="value">200 جرام</span></li>
                        </ul>
                        <div class="single-product-actions">
                            <div class="single-product-actions-item">
                                <button style="background-color: #1f3a71; border-radius: 20px;" class="btn text-white"
                                data-product-id="{{ $product->id }}"
                                data-product-name="{{ $product->name }}"
                                data-product-price="{{ $product->price }}"
                                >اضافة الى العربة</button>
                            </div>
                        </div>
                        <div class="single-product-safe-payment">
                            <p>طرق الدفع</p>
                            <img src="{{ URL::asset('images/footer/footer-payment.png') }}" alt="payment">
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->

                </div>
                <!-- Single Product Top Area End -->

        </div>
    </div>
    <!-- Product Details Section End -->
<br>
<br>
    <div id="products" class="h1-product-section section pt-5" dir="ltr">
        <div class="container">
            <h2 class="text-center" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">منتجات إيميز </h2>
            <div class="product-carousel swiper">

                <div class="swiper-wrapper text-center">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="product" dir="rtl" style="height: 90%; border-radius: 20px;">
                            <div class="product-thumb">
                                <a href="{{ route('productDetails', ['id' => $product->id]) }}" class="product-image"><img style="scale: 0.75;" loading="lazy" src="{{ URL::asset($product->image) }}" alt="House Coffee Original"></a>
                            </div>
                            <div class="product-content" style="position: relative; top: -40px;">
                                <h5 class="product-title name" style="font-family: 'Quest';"><a href="{{ route('productDetails', ['id' => $product->id]) }}">{{$product->name}}</a></h5>
                                <h5 class="product-title weight" style="font-family: 'Quest';"><span dir="ltr"> 200 gm</span></h5>
                                <h5 class="product-title price" style="font-family: 'Quest'; color: #2a4e98; font-weight: bold; font-size: 20px;"><span dir="ltr">{{$product->price}} SR</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                <div class="swiper-pagination d-md-none"></div>
                <div class="swiper-button-prev d-none d-md-flex"></div>
                <div class="swiper-button-next d-none d-md-flex"></div>
            </div>

        </div>
    </div>
    <!-- Product Section End -->
    <div>
    <br>
    <br>


        <!-- Add this script at the end of your view to handle the button click -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            // Ensure the document is ready before executing JavaScript
            $(document).ready(function() {
                // Attach a click event to the button class
                $('.btn').on('click', function() {
                    // Retrieve product information from data attributes
                    var productId = $(this).data('product-id');
                    var productName = $(this).data('product-name');
                    var productPrice = $(this).data('product-price');
                    var productImage = $(".product_img").attr('src');
                    var quantity = 1; // Default quantity

                    // Log product information to the console (for testing)
                    console.log('Product ID:', productId);
                    console.log('Product Name:', productName);
                    console.log('Product Price:', productPrice);

                    // Retrieve user ID from the authenticated user (if available)
                    var userId = {{ auth()->check() ? auth()->user()->id : 0 }};

                    // Check if the user is authenticated
                    if (userId == 0) {
                        // Redirect to the logout route
                        var logoutForm = document.createElement('form');
                            logoutForm.method = 'POST';
                            logoutForm.action = "{{ route('logout') }}";

                            // Add CSRF token input
                            var csrfTokenInput = document.createElement('input');
                            csrfTokenInput.type = 'hidden';
                            csrfTokenInput.name = '_token';
                            csrfTokenInput.value = "{{ csrf_token() }}";
                            logoutForm.appendChild(csrfTokenInput);

                            // Append the form to the body and submit it
                            document.body.appendChild(logoutForm);
                            logoutForm.submit();

                            // Remove the form from the body
                            document.body.removeChild(logoutForm);

                            return;
                    }

                    // Log user ID to the console (for testing)
                    console.log('User ID:', userId);

                    // Customize this URL according to your routes
                    var addToCartUrl = "{{ route('addToCart') }}";

                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                    
                    $.ajax({
                        type: 'POST',
                        url: addToCartUrl,
                        data: {
                            user_id: userId,
                            product_id: productId,
                            quantity: quantity,
                            _token: csrfToken
                        },
                        success: function(response) {
                            console.log(response);
                            $('#successPopup').fadeIn().delay(2000).fadeOut(); // Show for 2 seconds
                            var countElement = $(".count");
                            if (countElement.length) {
                                countElement.html(parseInt(countElement.html()) + 1);
                            }else{
                                $(".sli-basket-loaded").append('<span class="count" style="background-color: #1f3a71;">1</span>');
                            }
                            $(".header-cart-products").append(' <div class="header-cart-product"> <div class="header-cart-product-thumb"> <a href="product-details.html" class="header-cart-product-image"><img src="'+productImage+'" alt="Medium Roast Ground Coffee" width="90" height="103"></a> <button class="header-cart-product-remove" style="font-family:' + "Quest" +';"><i class="sli-close"></i></button> </div> <div class="header-cart-product-content"> <h5 class="header-cart-product-title" style="font-family:' + "Quest" +';"><a href="product-details.html">'+productName+'</a></h5> <span class="header-cart-product-quantity"><span dir="ltr">'+quantity+' x '+productPrice+' SR</span></span> </div> </div> ');             
                            $(".header-cart-total").find("span").html(parseInt($(".header-cart-total").find("span").html()) + (quantity * parseInt(productPrice)) + " " + "SR")
                        },
                        error: function(error) {
                            console.error(error);
                            //alert('Error adding product to cart.');
                        }
                    });
                    
                });
            });
        </script>


@endsection
