<div class="header sticky-header section" style="z-index: 20;">
        <div class="container-fluid">
            <div class="row align-items-center">

                <!-- Logo Start -->
                <div class="col-lg-2 col">
                    <div class="header-logo">
                        <a href="{{ route('home', ['scrollId' => 0 ]) }}">
                            <img src="{{URL::asset('images/logo/Png/Asset 11@4x.png')}}" style="width: 140px; height: 55px; padding: 5px;" alt="">
                            <img class="light" src="{{URL::asset('images/logo/Png/Asset 11@4x.png')}}" width="125" height="42" alt="">
                        </a>
                    </div>
                </div>
                <!-- Logo End -->

                <!-- Menu Start -->
                <div class="col d-none d-lg-block">
                    <nav class="main-menu">
                        <ul>
                            <li class="has-sub-menu" style="font-family: 'Quest';">
                                <a href="{{ route('home', ['scrollId' => 0 ]) }}">الرئيسية</a>
                            </li>
                            <li class="has-sub-menu" style="font-family: 'Quest';">
                                <a href="{{route('shop')}}">المتجر</a>
                            </li>
                            <li class="has-sub-menu" style="font-family: 'Quest';">
                                <a href="{{route('menu')}}">القائمة</a>
                            </li>
                            <li class="has-sub-menu" style="font-family: 'Quest';">
                                <a href="{{ route('home', ['scrollId' => 1 ]) }}">من نحن</a>
                            </li>
                            <li style="font-family: 'Quest';">
                                <a href="{{route('branches')}}">فروعنا</a>
                            </li>
                            <li style="font-family: 'Quest';">
                                <a href="{{ route('home', ['scrollId' => 2 ]) }}">تواصل معنا</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Menu End -->
                <div class="col-auto" style="direction: rtl;">
                    <div class="header-action">

                    @if(Auth::check() &&Auth::user()->email_verified_at == null)
                        <div class="header-action-item">
                        <button class="header-action-toggle text-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                            <a href="{{ route('verification.notice') }}" style="text-decoration: none; color: inherit;" data-tooltip-text="التحقق من البريد الالكتروني">
                            <img src="{{URL::asset('images/warning.png')}}" style="width:26px; position:relative; top:-2px;">
                            </a> 
                        </button>
                        </div>
                    @endif
                        

                    @if(isset($hideHeaderButton) && $hideHeaderButton)
                        <!-- If $hideHeaderButton is true, do not display the button -->
                    @else
                        <div class="header-action-item">
                            <button class="header-action-toggle text-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                        <i class="sli-basket-loaded sli-basket-loaded-header" style="font-size: 20px;">
                            @if(count($cartItems) > 0)
                                <span class="count" style="background-color: #1f3a71;">{{ count($cartItems) }}</span>
                            @endif
                        </i>
                     </button>
                        </div>
                    @endif

                        <div class="header-action-item dropdown">
                            <button class="header-action-toggle text-center" type="button" data-bs-toggle="dropdown" style="color: #1f3a71;"><i class="sli-user" style="font-size: 20px;"></i></button>
                            <div class="dropdown-menu header-dropdown-menu">
                            @guest
                            <h6 class="header-dropdown-menu-title text-center" style="font-family: 'Quest';">زائر</h6>
                                <ul class="text-center">
                                    <li><a href="{{ route('login') }}" style="font-family: 'Quest';">تسجيل دخول</a></li>
                                </ul>
                            @else
                        <h6 class="header-dropdown-menu-title text-center" style="font-family: 'Quest';">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</h6>
                                <ul class="text-center">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-family: 'Quest';">تسجيل خروج</a>

                                    <li><a href="{{route('account')}}" style="font-family: 'Quest';">حسابي</a></li>
                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>

                              @endguest
                            </div>    
                        </div>

            
                        <div class="header-action-item d-lg-none">
                        <button class="header-action-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                            <img style="width: 22px; position: relative; top: 4px;" src="{{ URL::asset('images/hero-slider/menu (1).svg') }}">
                        </button>
                        </div>


                    </div>
                </div>
                    </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" id="offcanvas-header">
        <div class="offcanvas-header" dir="ltr">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <nav class="mobile-menu">
                    <ul>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{ route('home', ['scrollId' => 0 ]) }}">الرئيسية</a>
                        </li>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{route('shop')}}">المتجر</a>
                        </li>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{route('menu')}}">القائمة</a>
                        </li>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{ route('home', ['scrollId' => 1 ]) }}">من نحن</a>
                        </li>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{route('branches')}}">فروعنا</a>
                        </li>
                        <li class="has-sub-menu" style="font-family: 'Quest'; font-size: 23px;">
                        <a href="{{ route('home', ['scrollId' => 2 ]) }}">تواصل معنا</a>
                        </li>
                 </ul>    


                 <div class="container-fluid text-center" style="height: 20%; background-color: #203b72; position: absolute; bottom: 0; right: 0;">
                    <div class="row">
                        <!-- Footer Widget Start -->
                        <div class="col-12 col-12 mx-auto">
                            <div class="footer-widget">
                              
                                <img loading="lazy" src="{{URL::asset('images/hero-slider/about-trees.svg')}}" alt="site logo" class="overlay-image4" style="z-index: -1;">
                                
                                <div class="footer-widget-about text-center mb-4" style="position: relative; top: 10px;">
    
                                    <img loading="lazy" src="{{URL::asset('images/logo/Png/white_logo.png')}}" alt="site logo" style="width: 200px;">
                                </div>
    
                                <div class="text-center" dir="ltr" style="position: relative; top: -35px;">
                                    <a href="https://twitter.com/emmysksa">
                                        <img src="{{URL::asset('images/social media/twitter2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="#">
                                        <img src="{{URL::asset('images/social media/mail2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="#">
                                        <img src="{{URL::asset('images/social media/snapshat2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="https://www.instagram.com/emmysksa">
                                        <img src="{{URL::asset('images/social media/instagram2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="https://www.facebook.com/EmmysKSA">
                                        <img src="{{URL::asset('images/social media/facebook2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="#">
                                        <img src="{{URL::asset('images/social media/youtube2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                    <a href="#">
                                        <img src="{{URL::asset('images/social media/tiktok2.svg')}}" style="width: 25px; margin-right: 2px; scale: 1.8;">
                                    </a>
                                </div>

                                <div class="text-center" dir="rtl" style="position: relative; top: -65px;">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{route('shop')}}">
                                                <p style="font-family: 'Quest'; color: #ffffff; padding:10px 40px; font-size: 10px; position: relative; right: 12px;">المتجر</p>
                                            </a>        
                                        </div>    
                                        <div class="col-6">
                                            <a href="{{ route('home', ['scrollId' => 2 ]) }}">
                                                <p style="font-family: 'Quest'; color: #ffffff; padding:10px 40px; font-size: 10px; position: relative; left: 12px;">تواصل معنا</p>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                                
            
                            </div>
                        </div>
                        <!-- Footer Widget End -->
    
                    </div>
                </div>

              </nav>
        </div>
    </div>
