@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="bg-light">
<div id="successPopup" class="success-popup">
    تم اضافة المنتج الى العربة
</div>

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{ URL::asset('images/bar.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الرئيسية</a></li>
                <li style="font-family: 'Quest'; font-size: 23px;">المتجر</li>
            </ul>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section section section-padding">
        <div class="container">

            <!-- Product Tab Start -->
            <div class="tab-content" id="shopProductTabContent">
                <div class="tab-pane fade show active" id="product-grid">
                    <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n6 text-center">
                        @foreach($products as $product)
                            <div class="col mb-6 mb-3">
                                <div class="col mb-6">
                                    <div class="product" dir="rtl" style="height: 90%; border-radius: 20px;">
                                        <div class="product-thumb">
                                            <a href="{{ route('productDetails', ['id' => $product->id]) }}" class="product-image"><img style="scale: 0.75;" loading="lazy" src="{{ URL::asset($product->image) }}" alt="{{ $product->name }}"></a>
                                            <button style="position:absolute; top:10px; right:10px;" class="product-action-btn"
                                                        data-product-id="{{ $product->id }}"
                                                        data-product-name="{{ $product->name }}"
                                                        data-product-price="{{ $product->price }}">
                                                     <i class="sli-basket-loaded"></i>
                                                </button>
                                        </div>
                                        <div class="product-content" style="position: relative; top: -40px;">
                                            <h5 class="product-title name" style="font-family: 'Quest';"><a href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a></h5>
                                            <h5 class="product-title weight" style="font-family: 'Quest';"><span dir="ltr">{{ $product->weight }} gm</span></h5>
                                            <h5 class="product-title price" style="font-family: 'Quest'; color: #2a4e98; font-weight: bold;"><span dir="ltr">{{ $product->price }} SR</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Product Tab End -->

        </div>
    </div>
    <!-- Product Section End -->
</div>
    <!-- Add this script at the end of your view to handle the button click -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Ensure the document is ready before executing JavaScript
    $(document).ready(function() {
        // Attach a click event to the button class
        $('.product-action-btn').on('click', function() {
            // Retrieve product information from data attributes
            var productId = $(this).data('product-id');
            var productName = $(this).data('product-name');
            var productPrice = $(this).data('product-price');
            var productImage = $(this).parent().parent().find(".product-image").find("img").attr('src');
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

            // Check if the user is authenticated            // Log user ID to the console (for testing)
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
                        $(".sli-basket-loaded-header").append('<span class="count" style="background-color: #1f3a71;">1</span>');
                    }
                    $(".header-cart-products").append(' <div class="header-cart-product"> <div class="header-cart-product-thumb"> <a href="product-details.html" class="header-cart-product-image"><img src="'+productImage+'" alt="Medium Roast Ground Coffee" width="90" height="103"></a> <button class="header-cart-product-remove" style="font-family:' + "Quest" +';"><i class="sli-close"></i></button> </div> <div class="header-cart-product-content"> <h5 class="header-cart-product-title" style="font-family:' + "Quest" +';"><a href="product-details.html">'+productName+'</a></h5> <span class="header-cart-product-quantity"><span dir="ltr">'+quantity+' x '+productPrice+' SR</span></span> </div> </div> ');             
                    $(".header-cart-total").find("span").html(parseInt($(".header-cart-total").find("span").html()) + (quantity * parseInt(productPrice)) + " " + "SR")
                },
                error: function(error) {
                    console.error(error);
                    // Redirect to a different route based on your condition
                    window.location.href = "{{ route('EmailVerification') }}";
                }
            });
            
        });
    });
</script>
@endsection
