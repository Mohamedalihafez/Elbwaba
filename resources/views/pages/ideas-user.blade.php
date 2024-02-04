@extends('layouts.master.master')
<link href="{{ asset('assets/css/portofolio.css') }}" rel="stylesheet">


@section('content')
    @if ($slider->count() != 0)
        <div class="container-fluid  wow">
            <div class="container py-3">
                @foreach ($slider as $show)
                    <div class="row">
                        <div class="parent ">
                            <div class="one page-header page-header-small" data-parallax="true"
                                style="background-image: url('{{ asset('assets/frontend/images/slider/' . $show->slider) }}')">
                            </div>
                            <div class="two  page-header page-header-small" data-parallax="true"
                                style="background-image: url('{{ asset('assets/frontend/images/slider/' . $show->slider) }}')">
                                <div class="text-center mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                                    <div class="container-fluid container  mb-5 wow fadeIn" data-wow-delay="0.1s"
                                        style="padding: 25px;">
                                        <div class="col-lg-6">
                                            <div style="margin-top: 20px !important"
                                                class="text-start mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                                                <h1 style="" class="mb-3 text-white idea-name">{{ $show->experience }}
                                                    : {{ Str::upper($show->full_name) }} </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 text-end">
                            <div class="cc-profile-image"><a href="#"><img
                                        src="{{ asset('assets/frontend/images/profile/' . $show->image) }}"
                                        alt="Image" /></a></div>
                        </div>
                @endforeach
            </div>
        </div>
    @else
    @endif
    <div class="col-md-12">
      
        <div class="" id="about">
            <div class="">
                <div class="container-fluid container bg-search-section mb-5 wow fadeIn" data-wow-delay="0.1s"
                    style="padding: 25px;">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-white">نبذة تعريفية </h1>
                        </div>
                    </div>
                    @if ($about->count() != 0)
                        @foreach ($about as $show)
                            <div class="card" data-aos="fade-up" data-aos-offset="10">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="card-body ">
                                            <p>{!! $show->short_about !!}</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4"><strong class="text-uppercase">العمر:</strong></div>
                                                <div class="col-sm-8">{{ $show->age }}</div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-4"><strong class="text-uppercase">البريد
                                                        الالكتروني:</strong></div>
                                                <div class="col-sm-8">{{ $show->email }}</div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-4"><strong class="text-uppercase">الجوال:</strong></div>
                                                <div class="col-sm-8">{{ $show->phone }}</div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-4"><strong class="text-uppercase">العنوان:</strong></div>
                                                <div class="col-sm-8">{{ $show->address }}</div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-4"><strong class="text-uppercase">اللغات:</strong></div>
                                                <div class="col-sm-8">{{ $show->language }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <div class="container cc-education card-header">
                                                <div class="h4 text-center mb-4 title ">المؤهل</div>
                                                @if ($education->count() != 0)
                                                    @foreach ($education as $show)
                                                        <div class="card">
                                                            <div class="row">
                                                                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                                                    data-aos-duration="500">
                                                                    <div class="card-body cc-education-header">
                                                                        <p>{{ $show->session }}</p>
                                                                        <div class="h5 text-white">{{ $show->name_of_examination }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50"
                                                                    data-aos-duration="500">
                                                                    <div class="card-body">
                                                                        <div class="h5 text-white">{{ $show->group }}</div>
                                                                        <p class="category ">{{ $show->institute_name }}</p>
                                                                        <p>{!! $show->short_description !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                @endif
            
                                            </div>
                                        </div>
            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="" id="skill">
                                            <div class="container card-header">
                                                <div class="h4 text-center mb-4 title ">مهارات احترافية</div>
                                                @if ($skill->count() != 0)
                                                    @foreach ($skill as $show)
                                                        <div class="card" data-aos="fade-up"
                                                            data-aos-anchor-placement="top-bottom">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_1 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="20"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_1_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_1_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_2 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_2_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_2_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_3 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_3_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_3_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_4 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_4_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_4_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_5 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_5_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_5_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="progress-container progress-primary"><span
                                                                                class="progress-badge">{{ $show->skill_6 }}</span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary"
                                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                                    data-aos-duration="2000" role="progressbar"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: {{ $show->skill_6_percentage }}%;">
                                                                                </div><span
                                                                                    class="progress-value">{{ $show->skill_6_percentage }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
            
                                                @endif
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
        
                    @endif

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-12">
        <div class="" id="about">
            <div class="">
                <div class="container-fluid container bg-search-section mb-5 wow fadeIn" data-wow-delay="0.1s"
                    style="padding: 25px;">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-white">المؤهلات والمهارات </h1>
                        </div>
                    </div>
                    <div class="row">
                      
                        <div class="col-md-6">
                            <div class="" id="skill">
                                <div class="container card-header">
                                    <div class="h4 text-center mb-4 title text-white">مهارات احترافية</div>
                                    @if ($skill->count() != 0)
                                        @foreach ($skill as $show)
                                            <div class="card" data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_1 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="20"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="40" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_1_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_1_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_2 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_2_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_2_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_3 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_3_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_3_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_4 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_4_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_4_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_5 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_5_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_5_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">{{ $show->skill_6 }}</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary"
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                        style="width: {{ $show->skill_6_percentage }}%;">
                                                                    </div><span
                                                                        class="progress-value">{{ $show->skill_6_percentage }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-12 card-header">
                            <div class="text-center mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                                <h1 class="mb-3 text-white">تواصل معي </h1>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                <h3 class="mb-4 text-white">لا تتردد في تواصل معي </h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <form id="contact-form" method="post" enctype="multipart/form-data"
                                    action="{{ route('ideas.store_contact') }}" class="ajax-form" resetAfterSend
                                    swalOnSuccess="تم إرسال طلبك بنجاح" title="{{ __('pages.opps') }}"
                                    swalOnFail="{{ __('pages.wrongdata') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ request('user') }}">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="fa fa-user-circle"></i></span>
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="الإسم" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="fa fa-phone"></i></span>
                                                <input class="form-control" type="text" name="subject"
                                                    placeholder="رقم الجوال" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="fa fa-envelope"></i></span>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="البريد الإلكتروني" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="محتوي طلبك" required="required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100"
                                                style="background: #c1a55a !important ; border:0px solid white;"
                                                type="submit">ارسل </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                                @foreach ($about as $show)
                                    <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                        <h3 class="text-white">معلومات الاتصال</h3>
                                        <div class="dbox w-100 d-flex align-items-start mt-3">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="mt-2 "><span>العنوان:</span><a class="text-white"
                                                        href="#"> {{ $show->address }} </a> </p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="m-0"><span>الجوال:</span> <a class="text-white"
                                                        href="tel://{{ $show->phone }}">{{ $show->phone }}</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-paper-plane"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="m-0"><span>البريد الإلكتروني:</span> <a class="text-white"
                                                        href="mailto:{{ $show->email }}">{{ $show->email }}</a></p>
                                            </div>
                                        </div>

                                        @if ($social_media->count() != 0)
                                            @foreach ($social_media as $show)
                                                <div class="button-container social-buuton-profile">
                                                    @if ($show->facebook)
                                                        <a class="btn btn-default btn-round btn-lg btn-icon"
                                                            href="{{ $show->facebook }}" rel="tooltip"
                                                            title="Follow me on Facebook"><i
                                                                class="fa fa-facebook"></i></a>
                                                    @endif
                                                    @if ($show->twitter)
                                                        <a class="btn btn-default btn-round btn-lg btn-icon"
                                                            href="{{ $show->twitter }}" rel="tooltip"
                                                            title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>
                                                    @endif
                                                    @if ($show->google)
                                                        <a class="btn btn-default btn-round btn-lg btn-icon"
                                                            href="{{ $show->google }}" rel="tooltip"
                                                            title="Follow me on Google+"><i
                                                                class="fa fa-snapchat"></i></a>
                                                    @endif
                                                    @if ($show->intagram)
                                                        <a class="btn btn-default btn-round btn-lg btn-icon"
                                                            href="{{ $show->intagram }}" rel="tooltip"
                                                            title="Follow me on Instagram"><i
                                                                class="fa fa-instagram"></i></a>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                        @endif
                                    </div>
                                    @endforeach
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    <div class="col-md-12 mt-3">
        <div class="" id="about">
            <div class="">
                <div class="container-fluid container bg-search-section mb-5 wow fadeIn" data-wow-delay="0.1s"
                    style="padding: 25px;">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-white">الروابط والأعمال </h1>
                        </div>
                    </div>
                    <div class="row">
                      
                        <div class="col-md-4">
                            <div class="container card-header">
                                <div class="" id="portfolio">
                                  <div class="container">
                          
                                      <div class="tab-content gallery ">
                                        <div class="h4 text-center mb-4 title text-white">الأعمال</div>

                                          <div class=" active" id="web-development">
                                              <div class="ml-auto mr-auto">
                                                  <div class="row ">
                                                    
                                                    @if ($portfolio_experience1->count() != 0)
                                                      @foreach ($portfolio_experience1 as $show)
                                                        <div class="col-md-6">
                                                          <div id="fullscreen-container">
                                                            <img id="fullscreen-image" src="" alt="Full Screen Image">
                                                          </div>
                                                            <img class="img-fluid rounded bg-light p-1 image-to-fullscreen"   src="{{ asset('assets/frontend/images/Portfolio/port_exper1/' . $show->picture) }}" alt="">
                                                            <div class="card-header text-center text-white ">
                                                              <p class="text-white">{{ $show->project_name }}</p>
                                                              {{-- <p>{{ $show->experience_name }}</p> --}}
                                                            </div>
                                                          </div>
                                                      @endforeach
                                                    @endif
                                                  
                                          
                          
                                                  </div>
                                              </div>
                                          </div>
                          
                                      </div>
                                  </div>  
                              </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="container card-header">
                            <div class="h4 text-center mb-4 title text-white">الروابط</div>

                            <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-12">
                                                    @if ($portfolio_experience1->count() != 0)
                                                        @foreach ($portfolio_experience1 as $show)
                                                      <ul class="progress-container progress-primary">
                                                        @If(!empty($show->experience_name) > 0)
                                                          <li>
                                                          <a
                                                              href="{{$show->experience_name}}" target="blank"  class="progress-badge">{{ $show->experience_name }}</a>
                                                          </li>
                                                          @endif
                                                      </ul>
                                                        @endforeach
                                                    @else
                                                    @endif
                                                  </div>
                                                 
                                              </div>
                                         
                                          </div>
                                      </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="container card-header">
                          <div class="h4 text-center mb-4 title text-white">موقعنا</div>

                            <div class="col-lg-12  slideInUp " data-wow-delay="0.6s">
                              <iframe class="position-relative rounded w-100 "
                                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.6167822510356!2d36.529002774387294!3d28.430817993214188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15a9ad46d59b9f7b%3A0xeafb09e70f11614b!2z2YXYpNiz2LPYqSDYqNmI2KfYqNipINiq2KjZiNmDINmE2YTYrtiv2YXYp9iqINin2YTYudmC2KfYsdmK2Kkg2YjYp9mE2KrYs9mI2YrZgg!5e0!3m2!1sen!2ssa!4v1696345634517!5m2!1sen!2ssa"
                                  width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                  referrerpolicy="no-referrer-when-downgrade" style="min-height: 350px; border:0;"
                                  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                          </div>

                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   
    </div>

@endsection

@section('js')
<script>
   var fullscreenContainer = document.getElementById('fullscreen-container');
  var fullscreenImage = document.getElementById('fullscreen-image');

  // Attach click event to all images with the class 'image-to-fullscreen'
  var imagesToFullscreen = document.getElementsByClassName('image-to-fullscreen');

  Array.from(imagesToFullscreen).forEach(function(image) {
    image.addEventListener('click', function() {
      // Set the source of the full screen image to the clicked image's source
      fullscreenImage.src = this.src;

      // Show the full screen container
      fullscreenContainer.style.display = 'block';

      // Disable scrolling on the body
      document.body.style.overflow = 'hidden';
    });
  });

  // Close the full screen container when clicking on it
  fullscreenContainer.addEventListener('click', function() {
    // Hide the full screen container
    fullscreenContainer.style.display = 'none';

    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
  });
</script>
@endsection
