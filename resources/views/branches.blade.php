@extends('layouts.app')

@section('content')

<div class="bg-light">
      <!-- Page Banner Section Start -->
      <div class="page-banner-section section" style="background-image: url({{URL::asset('images/bar.jpg')}});background-size:cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">الرئيسية</a></li>
                    <li style="font-family: 'Quest'; font-size: 23px;">فروعنا</li>
                </ul>
            </div>
        </div>
        <!-- Page Banner Section End -->

<div class="container-fluid" style="width: 100%;" dir="rtl">
        <div id="branches" class="h2-reservation-section section  pt-5 ">
                <div class="row" dir="rtl">
    

    
                    <div class="col-lg-5" dir="rtl" style="padding-bottom: 25px;">
                        <div class="reservation-form horizontal-scrollable" style="height: 465px; overflow: auto;">
                            <div class="row">
                               <div id="Branch1" class="col-12 mb-2 toggle-button" style="height: 70px;" onclick="showBranch1();">
                                <a href="#a" style="width: 100%;">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; background-color: #01408f; border-radius: 10px;">
                                    <img src="{{URL::asset('images/icons/down-filled-triangular-arrow (1).png')}}" style="width: 40px; position: relative; right: 10px; top: -5px;"> <span class="text-white" style="position: relative; top: -5px; margin: 0px 20px 10px 20px; font-family: 'Quest'; font-size: 30px;">فروع جدة</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_1();">
                                    <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                        <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق الملك مع شارع البترجي</span>
                                    </div>          
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_2();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق سعود الفيصل قبل كوبري المربع</span>
                                  </div>    
                                  </a>  
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_3();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">شارع فلسطين بجوار الراية ماركت</span>
                                  </div>      
                                  </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_4();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق مكة – محطة الرحيلي</span>
                                  </div>    
                                </a>  
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_5();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">حي الوزيرية محطة بترولايز</span>
                                  </div>   
                                </a>   
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_6();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">ممشي حي الأمير فواز بجوار إفنت مول</span>
                                  </div>     
                                </a> 
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_7();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">أبحر الشمالية حي الياقوت محطة إيسو</span>
                                </div>    
                                </a>  
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_8();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق جدة مكة محطة لتر</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_9();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">حي الفلاح محطة الدريس الصفوة سابقا</span>
                                  </div>      
                                  </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_10();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق ثول محطة الجزيرة</span>
                                  </div> 
                                  </a>     
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch1">
                                <a href="#a" style="width: 100%;" onclick="branch1_11();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق المدينة حي طيبة بعد محطة الرحيلي</span>
                                  </div>      
                                  </a>
                               </div>
                               <div id="Branch2" class="col-12 mb-2 toggle-button" style="height: 70px;" onclick="showBranch2();">
                                <a href="#a" style="width: 100%;">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; background-color: #01408f; border-radius: 10px;">
                                    <img src="{{URL::asset('images/icons/down-filled-triangular-arrow (1).png')}}" style="width: 40px; position: relative; right: 10px; top: -5px;"> <span class="text-white" style="position: relative; top: -5px; margin: 0px 20px 10px 20px; font-family: 'Quest'; font-size: 30px;">فروع مكة</span>
                                  </div>   
                                </a>   
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_1();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">مكة شارع الحج بجوار حديقة التنعيم</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_2();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق مكة جدة محطة الشميسي</span>
                                  </div> 
                                </a>     
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_3();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">الزايدي طريق مكة جدة محطة ساسكو</span>
                                  </div> 
                                </a>     
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_4();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">مكة المكرمة الرصيفة مقابل الجريشي مول</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_5();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">مكة العوالي محطة درب</span>
                                  </div>    
                                </a>  
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch2">
                                <a href="#a" style="width: 100%;" onclick="branch2_6();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">مكة الشرايع محطة منصور للبترول</span>
                                  </div>   
                                </a>   
                               </div>
                               <div id="Branch3" class="col-12 mb-2 toggle-button" style="height: 70px;" onclick="showBranch3();">
                                <a href="#a" style="width: 100%;">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; background-color: #01408f; border-radius: 10px;">
                                    <img src="{{URL::asset('images/icons/down-filled-triangular-arrow (1).png')}}" style="width: 40px; position: relative; right: 10px; top: -5px;"> <span class="text-white" style="position: relative; top: -5px; margin: 0px 20px 10px 20px; font-family: 'Quest'; font-size: 30px;">فروع الطائف</span>
                                  </div>    
                                </a>  
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch3">
                                <a href="#a" style="width: 100%;" onclick="branch3_1();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق الهدا جدة محطة ساسكو</span>
                                  </div>
                                </a>      
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch3">
                                <a href="#a" style="width: 100%;" onclick="branch3_2();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">الحوية طريق المطار محطة ساسكو</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch3">
                                <a href="#a" style="width: 100%;" onclick="branch3_3();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق السيل الصغير قبل محطة الدريس</span>
                                  </div>   
                                </a>   
                               </div>
                               <div id="Branch4" class="col-12 mb-2 toggle-button" style="height: 70px;" onclick="showBranch4();">
                                <a href="#a" style="width: 100%;">
                                    <div class="dropdown p-2" style="width: 100%; height: 100%; background-color: #01408f; border-radius: 10px;">
                                        <img src="{{URL::asset('images/icons/down-filled-triangular-arrow (1).png')}}" style="width: 40px; position: relative; right: 10px; top: -5px;"> <span class="text-white" style="position: relative; top: -5px; margin: 0px 20px 10px 20px; font-family: 'Quest'; font-size: 30px;">فروع ينبع</span>
                                      </div>          
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch4">
                                <a href="#a" style="width: 100%;" onclick="branch4_1();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">طريق الأمير مقرن محطة لتر</span>
                                  </div>      
                                </a>
                               </div>
                               <div class="col-12 mb-2 branch-content d-none branch4">
                                <a href="#a" style="width: 100%;" onclick="branch4_2();">
                                <div class="dropdown p-2" style="width: 100%; height: 100%; border-radius: 10px; border: 2px solid #01408f;">
                                   <img src="{{URL::asset('images/icons/maps-and-flags.png')}}" style="width: 30px;" > <span class="" style="margin: 0px 10px 0px 20px; font-family: 'Quest'; font-size: 19px; color: #01408f;">الواجهة البحرية بالكورنيش</span>
                                  </div>    
                                </a>  
                               </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-7" style="padding: 0 30px;">
                        <iframe id="map" title="" src="https://www.google.com/maps/d/u/9/embed?mid=1ICvYBFTs1el_SvVVSnlZOn98X1fPKKQ&ehbc=1e3a71" style="border:0; width: 100%; height: 465px"  loading="lazy"></iframe>
                    </div>

                </div>
        </div>
    </div>
    <br>
    <br>
    @endsection
