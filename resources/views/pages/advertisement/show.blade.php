@extends('layouts.master.master')

@section('css')

@endsection


@section('content')
<head>
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

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

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
        <div class="col-md-6">
          <div class="title-single-box">
            <h1 class="title-single">صور الإعلان</h1>
            <span class="color-text-a">Chicago, IL 606543</span>
          </div>
          <section class="property-single nav-arrow-b">
            <div class="container">
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
              </div>
            </div>
          </section>
        </div>
        <div class="col-6  d-none d-lg-block ">
          <div class="row section-t3">
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
                  Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                  dui. Quisque velit nisi,
                  pretium ut lacinia in, elementum id enim.
                </p>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>رقم الجوال:</strong>
                    <span class="color-text-a">{{$advertisement->phone}}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">777 287 378 737</span>
                  </li>
                </ul>
                <div class="socials-a">
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
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row justify-content-between p-20">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-center foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico card-money">
                  <span class="ion-money">20000 ر.س</span>
                </div>
              </div>
            </div>
            <div class="property-summary">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Quick Summary</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Property ID:</strong>
                    <span>1134</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Location:</strong>
                    <span>Chicago, IL 606543</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Property Type:</strong>
                    <span>House</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Status:</strong>
                    <span>Sale</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Area:</strong>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Beds:</strong>
                    <span>4</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Baths:</strong>
                    <span>2</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Garage:</strong>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 section-md-t3">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">محتوي الإعلان</h3>
                </div>
              </div>
            </div>
            <div class="property-description">
              <p class="description color-text-a">
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                neque, auctor sit amet
                aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                nibh pulvinar quam id dui posuere blandit.
              </p>
              <p class="description color-text-a no-margin">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                malesuada. Quisque velit nisi,
                pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
              </p>
            </div>
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Amenities</h3>
                </div>
              </div>
            </div>
            <div class="amenities-list color-text-a">
              <ul class="list-a no-margin">
                <li>Balcony</li>
                <li>Outdoor Kitchen</li>
                <li>Cable Tv</li>
                <li>Deck</li>
                <li>Tennis Courts</li>
                <li>Internet</li>
                <li>Parking</li>
                <li>Sun Room</li>
                <li>Concrete Flooring</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 ">
        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
              aria-controls="pills-video" aria-selected="true">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
              aria-selected="false">Floor Plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
              aria-selected="false">Ubication</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
              webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
          <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
            <img src="img/plan2.jpg" alt="" class="img-fluid">
          </div>
          <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
              width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-12   d-md-block d-lg-none ">
        <div class="row section-t3">
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
                Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                dui. Quisque velit nisi,
                pretium ut lacinia in, elementum id enim.
              </p>
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between">
                  <strong>رقم الجوال:</strong>
                  <span class="color-text-a">{{$advertisement->phone}}</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Mobile:</strong>
                  <span class="color-text-a">777 287 378 737</span>
                </li>
              </ul>
              <div class="socials-a">
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
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
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

  <!-- Template Main Javascript File -->

</body>

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

</script>
@endsection 

