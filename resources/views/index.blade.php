@extends('layouts.app')

@section('content')

<div class="bg-light">
    <div id="successPopup" class="success-popup">
            تم ارسال رسالتك بنجاح
    </div>
    <div id="subSuccessPopup" class="success-popup">
            تم الاشتراك بنجاح
    </div>
    <!-- Slider Section Start -->
    <div class="h1-hero-section section" dir="ltr">
        <div class="hero-slider hero-slider-1 swiper first_slide" >

            <div class="swiper-wrapper">

                <div class="swiper-slide hero-slide-1 bg-light" dir="rtl">
                    <div class="container">
                        <div class="row align-items-center mb-n6">

                            <div class="col-lg-6 col-sm-7 col-12 mb-6">
                                <div class="hero-slide-1-content text-center">
                                    <br>
                                    <br>
                                    <br>
                                    <img class="overlay-image overlay_pc" src="{{URL::asset('images/hero-slider/hero2.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <img class="overlay-image overlay_mob" src="{{URL::asset('images/hero-slider/hero_2-removebg-preview.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <div class="">
                                        <div class="row">
                                         <div class="col-lg-12" style="position: relative; top: -50px;">
                                            <img class="hero_logo" src="{{URL::asset('images/logo/Png/Asset 2@4x.png')}}">
                                            <br>
                                            <br>
                                            <p style="font-weight: bold;" class="hero-slide-1-text logo_text animated-text">يعرف سر مزاجك <br> قهوة مزاجك نظبطها لك  من  2000</p>    
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-5 col-12 mb-6 ">
                                <div class="container_ovelay hero-slide-1-content">
                                    <img class="background-image scale_fade" src="{{URL::asset('images/hero-slider/image-removebg-preview (33).png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <img class="overlay-image overlay-image_move" src="{{URL::asset('images/hero-slider/coffe.png')}}" alt="TIME DISCOVER COFFEE HOUSE">    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide hero-slide-2 bg-light" dir="ltr">
                    <div class="container">
                        <div class="row align-items-center mb-n6">

                            <div class="col-lg-6 col-sm-7 col-12 mb-6">
                                <div class="hero-slide-1-content text-center">
                                    <br>
                                    <br>
                                    <br>
                                    <img class="overlay-image overlay_pc" src="{{URL::asset('images/hero-slider/hero2.png')}}" style="transform: scaleX(-1);" alt="TIME DISCOVER COFFEE HOUSE">
                                    <img class="overlay-image overlay_mob" src="{{URL::asset('images/hero-slider/hero_2-removebg-preview.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <div class="">
                                        <div class="row">
                                         <div class="col-lg-12 hero hero-text-1">
                                            <h1 style="font-weight: bold;" class="hero-slide-1-text logo_text animated-text"> عبوات القهوة الفاخرة</h1>    
                                            <p style="font-weight: bold;" class="hero-slide-1-text logo_text animated-text" dir="rtl">استمتع بتجربة قهوة إيميز الإستثنائية المفضلة لديك على طريقتك الخاصة في منزلك ، مع تشكيلة غنية بالنكهات لتستمتع بكل رشفة<span>.</span></p>    
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-5 col-12 mb-6">
                                <div class="container_ovelay hero-slide-2-content">
                                    <img class="background-image scale_fade bags-image" src="{{URL::asset('images/hero-slider/heroImg2.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide hero-slide-2 bg-light" dir="ltr">
                    <div class="container">
                        <div class="row align-items-center mb-n6">

                            <div class="col-lg-6 col-sm-7 col-12 mb-6">
                                <div class="hero-slide-2-content text-center">
                                    <br>
                                    <br>
                                    <br>
                                    <img class="overlay-image overlay_pc" src="{{URL::asset('images/hero-slider/back-right.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <img class="overlay-image overlay_pc" src="{{URL::asset('images/hero-slider/back-left.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <img class="overlay-image overlay_mob" src="{{URL::asset('images/hero-slider/hero_2-removebg-preview.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-12 hero hero-text-1">
                                               <h1 style="font-weight: bold;" class="hero-slide-1-text logo_text animated-text"> ابدأ يومك مع فطور إيميز</h1>    
                                               <p style="font-weight: bold;" class="hero-slide-1-text logo_text animated-text" dir="rtl">إنغمس في عالم النكهات مع ساندوتشات الفطور في إيميز تذوق الفرق !</p>    
                                            </div>
                                           </div>
                                       </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-5 col-12 mb-6">
                                <div class="container_ovelay hero-slide-2-content">
                                    <img class="background-image scale_fade sandwiches-image" src="{{URL::asset('images/hero-slider/sandwiches.png')}}" alt="TIME DISCOVER COFFEE HOUSE">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev d-none d-md-flex"></div>
            <div class="swiper-button-next d-none d-md-flex"></div>
        </div>
    </div>
    <!-- Slider Section End -->


        <!-- Logo Section Start -->
        <div class="h1-feature-section" style="background-color: #0b548f;">
            <div class="container infinite-movemen">
                <div class="row ticker" style="visibility: hidden;">
    
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (19).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (21).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (22).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (24).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (23).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
                    <div class="col animate">
                        <img loading="lazy" src="{{URL::asset('images/home-menu/svg/png/white/finish/output-onlinepngtools (20).png')}}" alt="about us image" width="100" height="100" style="width: 80px;">
                    </div>
    
                </div>
            </div>
        </div>
        <!-- Logo Section End -->
    
    <!-- Feature Section Start -->
    <div id="about_us" class="section section-padding bg-light" style="padding-left:13px; padding-right:13px;">
        <div class="container p-4" style="background-color: white;">
            <div class="row text-center about-us-row">
                <div class="col-sm-5 mb-6 text-center" >
                    <div class="about-us-content">
                        <div class="text">
                            <img src="{{URL::asset('images/about-us/icoo.png')}}" style="margin: 10px; width: 160px;">
                            <h3 class="mb-4" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">عن ايميز </h3>
                            <p style="font-size: 18px; font-family: 'Quest'; color: #203b72;font-weight: bold;">تأسست إيميز في عام 2000 ومنذ بدايتنا نؤمن بأن القهوة أكثر من مجرد مشروب ، بل وسيلة لتعزيز التواصل ، ولذلك نلتزم بتقديم مشروبات ومأكولات خفيفة فاخرة بنكهات محلية وعالمية وبجودة وعناية من خير الوطن من خلال خبرائنا و وموردينا المحليين ، لنقدم لكم خدمة ترتقي لتطلعاتكم من خلال أكشاك الدرايف ثرو المتطورة.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1 mb-6 text-center">
                    <img src="{{URL::asset('images/about-us/about.svg')}}" style="scale: 18; position: relative; right: 30px; top: 130px;" id="line_pc">
                    <img src="{{URL::asset('images/about-us/horizontal.png')}}" id="line_mob">
                </div>

                <div class="col-sm-5 mb-6 text-center" >
                    <div class="about-us-content">
                        <div class="text">
                            <img src="{{URL::asset('images/about-us/icooo-removebg-preview.png')}}" style="width: 160px;margin: 3px;">
                            <h3 class="mb-4" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">قيمنا </h3>
                            <p style="font-size: 18px; font-family: 'Quest'; color: #203b72;font-weight: bold;" dir="rtl">نهتم في إيميز بتعزيز تجارب عملائنا ، و نسعى للإبتكار و التطوير في قائمتنا لتشمل النكهات المحلية و العالمية على أعلى مستوى ، و كذلك المخبوزات والكيك والسندويشات الطازجة و المعدة كلها بعناية فائقة لتناسب ذوقكم و مزاجكم !كل رشفة قهوة من إيميز تعد تجربة فريدة!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>






    <div class="container">
        <div class="row" dir="ltr">
            <div class="col-lg-6 text-center" dir="ltr">
                <h2 class="offers-title-mob" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">عروض إيميز </h2>
                <div class="h2-hero-section section">
                    <div class="hero-slider hero-slider-2 swiper">
            
                        <div class="swiper-wrapper">
            
                        <div class="swiper-slide hero-slide-2" style="background-image: url({{URL::asset('images/offers/offer1.jpg')}}); background-size:contain; background-position: center; background-repeat: no-repeat;">
                                <div class="container">
                                    <div class="hero-slide-2-content" style="visibility: hidden">
                                        <h5 class="hero-slide-2-sub-title">Black coffee is awesome.</h5>
                                        <h2 class="hero-slide-2-title">TIME DISCOVER <br> COFFEE HOUSE</h2>
                                        <p class="hero-slide-2-text">Experience the decibels like your ears deserve to. Safe for the ears, very for the heart. A treat to your ears.</p>
                                        <p class="hero-slide-2-text">Experience the decibels like your ears deserve to. Safe for the ears, very for the heart. A treat to your ears.</p>
                                        <div class="hero-slide-2-button">
                                            <a href="shop-left-sidebar.html" class="btn btn-primary btn-dark-hover">Explore More <i class="sli-basket-loaded"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="swiper-slide hero-slide-2" style="background-image: url({{URL::asset('images/offers/offer2.jpg')}}); background-size:contain; background-position: center; background-repeat: no-repeat;">
                                <div class="container">
                                    <div class="hero-slide-2-content" style="visibility: hidden">
                                        <h5 class="hero-slide-2-sub-title">Black coffee is awesome.</h5>
                                        <h2 class="hero-slide-2-title">TIME DISCOVER <br> COFFEE HOUSE</h2>
                                        <p class="hero-slide-2-text">Experience the decibels like your ears deserve to. Safe for the ears, very for the heart. A treat to your ears.</p>
                                        <p class="hero-slide-2-text">Experience the decibels like your ears deserve to. Safe for the ears, very for the heart. A treat to your ears.</p>
                                        <div class="hero-slide-2-button">
                                            <a href="shop-left-sidebar.html" class="btn btn-primary btn-dark-hover">Explore More <i class="sli-basket-loaded"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                        </div>
            
                        <div class="swiper-pagination"></div>
            
                        <div class="swiper-button-prev d-none d-md-flex"></div>
                        <div class="swiper-button-next d-none d-md-flex"></div>
                    </div>
                </div>    
            </div>

            <div class="col-lg-6">
                <div class="about-us-content text-center offers-text">
                    <div class="text">
                        <div class="row" dir="rtl">
                            <h2 class="offers-title-pc" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">عروض إيميز </h2>
                            <p style="font-family: 'Quest'; color: #203b72;font-weight: bold;">اشترك بالبريد لتصلك أحدث العروض من إيميز </p>    
                            <div class="col-md-8 mb-2">
                               <div class="form-group">
                                   <input  type="email" class="form-control email_sub" id="email" placeholder="الرجاء ادخال البريد الالكتروني">
                                 </div>
                            </div>
                            <div class="col-md-4 mb-2">
                               <button onclick="sub();" type="button" style="width: 100%; background-color: #1d3b6f;" class="btn text-white subscribe">الاشتراك</button>
                           </div>
                           </div>                   
                    </div>
                </div>
            </div>

            </div>
        
    </div>

    <br>
    <br>
    <br>
    <img class="overlay-image2 " src="{{URL::asset('images/hero-slider/about-trees.svg')}}" alt="TIME DISCOVER COFFEE HOUSE">
    <img class="overlay-image3 " src="{{URL::asset('images/hero-slider/about-trees.svg')}}" alt="TIME DISCOVER COFFEE HOUSE">


    <div id="products" class="h1-product-section section " dir="ltr">
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
                <div style="position: relative; top: -5px;" class="swiper-pagination d-md-none"></div>
                <div class="swiper-button-prev d-none d-md-flex"></div>
                <div class="swiper-button-next d-none d-md-flex"></div>
            </div>

        </div>
    </div>
    <!-- Product Section End -->
<br>
<br>
<br>
    <div  dir="ltr">
        <div id="branches" class="h2-reservation-section section  pt-0">
            <div class="container">
                <h2 class="text-center" style="font-family: 'Quest'; color: #203b72;font-weight: bold;">فروعنا</h2>
                <br>
                <div class="row">
                    <div class="col-lg-7">
                        <iframe title="" src="https://www.google.com/maps/d/u/9/embed?mid=1ICvYBFTs1el_SvVVSnlZOn98X1fPKKQ&ehbc=1e3a71"  loading="lazy"></iframe>
                    </div>
    
                    <div class="col-lg-5" dir="rtl" style="z-index: 10;">
                        <div class="reservation-form">
                            <div class="block-title">
                                <h2 style="font-family: 'Quest';" class="sub-title">تواصل معنا</h2>
                            </div>
                            <form id="contactForm" action="{{ route('storeContact') }}" method="post">
                                @csrf
                                <div class="input-field"><input name="name" style="font-family: 'Quest';" class="form-field" type="text" placeholder="الاسم"></div>
                                <div class="input-field"><input name="email" style="font-family: 'Quest';" class="form-field" type="email" placeholder="الايميل"></div>
                                <div class="input-field"><input name="phone" style="font-family: 'Quest';" class="form-field" type="text" placeholder="الجوال" required></div>
                                <div class="input-field"><textarea name="message" style="font-family: 'Quest';" class="form-field" placeholder="الرسالة"></textarea></div>
                                <button type="button" style="width: 100%; background-color: #1d3b6f;" class="btn text-white subscribe" onclick="submitForm()">ارسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            
                var scrollNum = {{$scrollId ?? 0}};

                if(scrollNum == 1){
                    $('html, body').animate({
                        scrollTop: $('#' + 'about_us').offset().top
                }, 1000); // Adjust the duration as needed
                }

                if(scrollNum == 2){
                    $('html, body').animate({
                        scrollTop: $('#' + 'branches').offset().top
                }, 1000); // Adjust the duration as needed
                }
                // Scroll to the target ID

            function submitForm() {
                var formData = $('#contactForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: $('#contactForm').attr('action'),
                    data: formData,
                    success: function (data) {
                        $('#successPopup').fadeIn().delay(2000).fadeOut(); // Show for 2 seconds
                        console.log(data);
                    },
                    error: function (error) {
                        // Handle errors, e.g., show an error message
                        console.error(error);
                    }
                });
            }
            function sub() {
                $('#subSuccessPopup').fadeIn().delay(2000).fadeOut(); // Show for 2 seconds
            }
        </script>

    @endsection
