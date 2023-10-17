@extends('layouts.master.master')

@section('css')

@endsection


@section('content')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  {{-- <link href="{{ asset('assets/web/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets/web/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/web/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets/web/css/style.css')}}" rel="stylesheet">


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-8 ">
          <div class="title-single-box">
            <h1 class="title-single">صور الإعلان</h1>
          </div>
          <input class="d-none" id="currentLat" type="text" value="{{$advertisement->currentLat}}"/>
          <input class="d-none" id="currentLng" type="text" value="{{$advertisement->currentLng}}"/>

          <section class="property-single nav-arrow-b">
            <div class="">
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-12 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                      @foreach ($advertisement->gallaries as $picture)
                        <div class="owl-carousel-item">
                          <img
                            class="img-fluid img-cu"
                            src="{{ asset('ads/' .$advertisement->id .'/'. $picture->name) }}"
                            data-src="{{ asset('ads/' .$advertisement->id .'/'. $picture->name) }}"
                            class="thumbnail mb-[0.5rem]"
                          />
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">

                  <div class="row mt-3">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <div style="float:left;" class=" card-money">  
                          <span class="ion-money">  {{$advertisement->price}} ر.س</span>
                        </div>
                        <h3 class="title-d">محتوي الإعلان</h3>
                      </div>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a">
                       {{$advertisement->title}}
                    </p>
                    <p class="description color-text-a no-margin">
                      {{$advertisement->description}}
                     </p>
                  </div>
                  <div class="row  pt-20">
                    <div class="col-md-6 col-lg-6">
                      <div class="property-summary">
                        <div class="row  ">
                          <div class="col-sm-12">
                            <div class="title-box-d ">
                              <h3 class="title-d">ملخص سريع </h3>
                            </div>
                          </div>
                        </div>
                        <div class="">
                          <ul class="list list-tems pl-0">
                            <li class="">
                              <strong>رقم الإعلان:</strong>
                              <span>{{$advertisement->id}}</span>
                            </li>
                            <li class="">
                              <strong>العنوان:</strong>
                              <span>{{$advertisement->region->name_ar}} - {{$advertisement->city->name_ar}} -  {{$advertisement->district}} - {{$advertisement->street}}</span>
                            </li>
                            <li class="">
                              <strong>نوع الملكية:</strong>
                              <span> @if($advertisement->ads_type == 1) مالك @elseif($advertisement->ads_type == 2) مكتب عقار @else  وسيط @endif</span>
                            </li>
                            <li class="">
                              <strong>نوع الشارع :</strong>
                              <span>@if($advertisement->street_type == 1) سكني @else تجاري @endif </span>
                            </li>
                            <li class="">
                              <strong>المساحه:</strong>
                              <span>{{$advertisement->width}}
                                <sup>2</sup>
                              </span>
                            </li>
                            <li class="">
                              <strong>الغرف:</strong>
                              <span>{{$advertisement->rooms}}</span>
                            </li>
                            <li class="">
                              <strong>دورات المياه:</strong>
                              <span>{{$advertisement->bathrooms}}</span>
                            </li>
          
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 ">
                      <div class="row ">
                        <div class="col-sm-12 ">
                          <div class="title-box-d">
                            <h3 class="title-d">وسائل الراحة</h3>
                          </div>
                        </div>
                      </div>
                      <div class="amenities-list color-text-a">
                        <ul class="list-a no-margin">
                          @foreach ($advertisement->items  as $item)
                            <li class="w-100">{{ $item->name }}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        
        <div class="col-4  d-none d-lg-block ">

     
          <div class="row mt-3 ">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">بيانات المعلن</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="{{ asset('assets/img/logo.jpeg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="property-agent">
                <h5 class="title-agent">   <strong> الإسم:</strong> {{$advertisement->user->name}}</h5>

                <ul class="list-unstyled">
                  <li class="">
                    <strong>رقم الجوال:</strong>
                    <span class="color-text-a">{{$advertisement->phone}}</span>
                  </li>

                </ul>
                
                {{-- <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-snap" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="row mt-3 ">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">مشاركه الإعلان</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="property-agent text-center">
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item social-buttons">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                      <a href="https://www.facebook.com/sharer/sharer.php?u={{route('advertisement.show',['advertisement' => $advertisement->id])}}&display=popup"> Facebbok </a>
                    </li>
                    <li class="list-inline-item social-buttons">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item social-buttons">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="list-inline-item social-buttons">
                      <a href="#">
                        <i class="fa fa-snap" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-3 ">
            <ul class="nav nav-pills-a nav-pills mb-3 " id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link " id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                  aria-controls="pills-video" aria-selected="true">فيديو  وصفي </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                  aria-selected="false">العنوان</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade " id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <iframe width="100%" height="460" frameborder="0" src="{{$advertisement->link}}" frameborder="0" allowfullscreen></iframe>
              </div>
             
              <div class="tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                <div id="map"></div>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="col-12   d-md-block d-lg-none ">
        <div class="row ">
          <div class="col-md-12 mt-3 ">
            <ul class="nav nav-pills-a nav-pills mb-3 " id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link " id="pills-video-tab" data-toggle="pill" href="#pills-video1" role="tab"
                  aria-controls="pills-video" aria-selected="true">فيديو  وصفي </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map1" role="tab" aria-controls="pills-map"
                  aria-selected="false">العنوان</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade " id="pills-video1" role="tabpanel" aria-labelledby="pills-video-tab">
                <iframe width="100%" height="460" frameborder="0" src="https://www.youtube.com/watch?v=Ys78zaUwQzI&list=RDYs78zaUwQzI&start_radio=1" frameborder="0" allowfullscreen></iframe>

              </div>
             
              <div class="tab-pane fade show active" id="pills-map1" role="tabpanel" aria-labelledby="pills-map-tab">
                <div class="map-show" id="map_2"></div>
              </div>
            </div>
          </div>  
          <div class="col-sm-12">
            <div class="title-box-d">
              <h3 class="title-d">بيانات المعلن</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <img src="{{ asset('assets/img/logo.jpeg')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="property-agent">
              <h4 class="title-agent">{{$advertisement->user->name}}</h4>
              <p class="color-text-a">

              </p>
              <ul class="list-unstyled">
                <li class="">
                  <strong>رقم الجوال:</strong>
                  <span class="color-text-a">{{$advertisement->phone}}</span>
                </li>
                <li class="">
                  <strong>Mobile:</strong>
                  <span class="color-text-a">777 287 378 737</span>
                </li>
              </ul>
              <div class="socials-a text-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/web/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/web/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets/web/contactform/contactform.js')}}"></script>

  <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyD5P1aaaeShZf5EehRdc8RBY8MqhXvrtLc&language=fa&callback=initMap" ></script>

  <script>
    // Replace 'YOUR_API_KEY' with your Google Maps API key
const API_KEY = 'AIzaSyD5P1aaaeShZf5EehRdc8RBY8MqhXvrtLc';

// Function to initialize and show the map
$(document).ready(function() {
  initMap();
});

function initMap() {
    // Get latitude and longitude from your backend or any other source
    const latitude = parseFloat($('#currentLat').val());
    const longitude =  parseFloat($('#currentLng').val());

    const location = { lat: latitude, lng: longitude };

    // Create a map centered on the provided location
    const map = new google.maps.Map(document.getElementById('map'), {
        center: location,
        zoom: 15,
    });

    const map_2 = new google.maps.Map(document.getElementById('map_2'), {
        center: location,
        zoom: 15,
    });

    
    // Create a marker for the location
    const marker = new google.maps.Marker({
        position: location,
        map: map,
        title: 'Your Location',
    });

    const marker2 = new google.maps.Marker({
        position: location,
        map: map_2,
        title: 'Your Location',
    });
}
  </script>
  <!-- Template Main Javascript File -->


@endsection


@section('js')
<script>
    const thumbnails = document.querySelectorAll('.thumbnail');
    const largeImage = document.getElementById('large-image');

    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener('click', function () {
            const imageUrl = this.getAttribute('data-src');
            largeImage.src = imageUrl;
        });
    });


    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
@endsection 

