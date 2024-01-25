<div class="offcanvas offcanvas-end" id="offcanvas-cart">
        <div class="offcanvas-header">
            <h5 style="font-family: 'Quest';">عربة التسوق</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div class="header-cart-body">
                <div class="header-cart-products">
                @foreach($cartItems as $item)
                        <div class="header-cart-product">
                        <div class="header-cart-product-thumb">
                            <a href="product-details.html" class="header-cart-product-image"><img src="{{URL::asset($item->product_image)}}" alt="Medium Roast Ground Coffee" width="90" height="103"></a>
                            <button class="header-cart-product-remove" style="font-family:'Quest';"><i class="sli-close"></i></button>
                        </div>
                        <div class="header-cart-product-content">
                            <h5 class="header-cart-product-title" style="font-family:'Quest';"><a href="product-details.html">{{$item->product_name}}</a></h5>
                            <span class="header-cart-product-quantity"><span dir="ltr">{{$item->quantity}} x {{$item->product_price}} SR</span></span>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="header-cart-footer">
            <h4 class="header-cart-total" style="font-family: 'Quest';">الاجمالي: <span dir="ltr">{{ $cartTotal }} SR</span></h4>
                <div class="header-cart-buttons">
                    <a href="{{route('checkout')}}" class="btn btn-outline-dark btn-primary-hover" style="font-family: 'Quest';">دفع</a>
                    <a href="{{route('cartpage')}}" class="btn btn-outline-dark btn-primary-hover" style="font-family: 'Quest';">عرض العربة</a>
                </div>
            </div>
        </div>
    </div>
