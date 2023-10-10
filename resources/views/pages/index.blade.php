
@extends('layouts.master.master')

@section('content')

<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5 text-center">
        <h1 class="display-5 animated fadeIn mb-4">تطبيق <span class="text-primary">البوابة</span> للتسويق الإلكتروني 
            <br>
            <span class="text-primary ">( فن وفكر وإنجاز )</span> 
        </h1>
        <div class="text-center "> 
            <!-- App Store button -->
            <a href="https://apps.apple.com/us/app/%D8%A7%D9%84%D8%A8%D9%88%D8%A7%D8%A8%D8%A9-albawaba/id1557450065#?platform=iphone" target="_blank" class="market-btn apple-btn" role="button">
                <span class="market-button-subtitle">حمل الأن </span>
                <span class="market-button-title">App Store</span>
            </a>
            
            <!-- Google Play button -->
            <a href="https://play.google.com/store/apps/details?id=com.art4Muslimt.tabook&pli=1" target="_blank" class="market-btn google-btn " role="button">
              <span class="market-button-subtitle">حمل الأن </span>
              <span class="market-button-title">Google Play</span>
            </a>
            
            <!-- Windows store button -->

            
            <!-- Amazon button -->
            {{-- <a href="https://www.kobinet.com.tr/" target="_blank" class="market-btn amazon-btn" role="button">
              <span class="market-button-subtitle">Order now at</span>
              <span class="market-button-title">Amazon.com</span>
            </a> --}}
        </div> 
            <p class="animated fadeIn mb-4 pb-2 banner_p">
                تطبيق البوابة هو تطبيق يعمل على تقديم بيع وايجار عقارات بجميع مدن ومناطق السعودية من خلال انشاء إعلانات عن العقار بالصور وعرض العقار على خرائط جوجل.
            </p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">الإنضمام  لدينا</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/banner_1.png')}}" alt="">
                </div>

                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Category Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">أنواع العقارات            </h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-apartment.png')}}" alt="Icon">
                        </div>
                        <h6>الشقق</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-villa.png')}}" alt="Icon">
                        </div>
                        <h6>الفلل</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-house.png')}}" alt="Icon">
                        </div>
                        <h6>Home</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-housing.png')}}" alt="Icon">
                        </div>
                        <h6>المكاتب</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-building.png')}}" alt="Icon">
                        </div>
                        <h6>المباني</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-neighborhood.png')}}" alt="Icon">
                        </div>
                        <h6>Townhouse</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-condominium.png')}}" alt="Icon">
                        </div>
                        <h6>المحلات</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/icon-luxury.png')}}" alt="Icon">
                        </div>
                        <h6>كراج</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/about.jpg')}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">خصائص (تطبيق البوابة)</h1>
                <p class="mb-4">يعمل (تطبيق البوابة) على تقديم خدمات بيع وشراء عقارات بطريقة مبتكرة حيث يقدم أكثر من وسيلة بحث للوصول إلى العقار منها تحديد المنطقة وتظهر جميع عقارات المتاحة للبيع أو الإيجار </p>
                <p><i class="fa fa-check text-primary me-3"></i>تفاصيل العقار من الصور ومساحة العقار وجودة التشطيب والسعر</p>
                <p><i class="fa fa-check text-primary me-3"></i>تصميم مبتكر لواجهات التطبيق تناسب ثقافة وسلوك المستخدم السعودي .</p>
                <p><i class="fa fa-check text-primary me-3"></i>لوحة تحكم باللغة العربية سهلة الإستخدام لإدارة محتوي التطبيق بسهولة.</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">تواصل معنا </a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">قائمة الإعلانات</h1>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-start mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1"> إعلانات عقاريه</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2"> إعلانات ال VIP </a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3"> إعلانات نجاريه</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-1.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-2.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-3.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-4.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-5.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-6.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5" href="">قراءه المزيد</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-1.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-2.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-3.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-4.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-5.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-6.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">قراءه المزيد</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-1.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-2.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-3.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-4.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-5.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للبيع</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/img/property-6.jpg')}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">للإيجار</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">تفاصيل للبيع</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">قراءه المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->

<!-- Call to Action Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="{{ asset('assets/img/contact_us_2.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn text-center" data-wow-delay="0.5s">
                        <div class="mb-4">
                            <h3 class="mb-3">إذا كان لديك أي استفسار، فلا تتردد في الاتصال بنا                                    </h1>
                        </div>
                        <a href="tel://+966505360123" class="btn  btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>إجراء مكالمة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection