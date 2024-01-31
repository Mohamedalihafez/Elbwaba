@extends('layouts.master.master')
<link href="{{ asset('assets/css/portofolio.css')}}" rel="stylesheet">


@section('content')
@if ($slider->count() != 0)
<div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row">
          <div class="col-md-6">
              @foreach($slider as $show )
              <div class="profile-page">
                <div class="wrapper">
                  <div class="page-header page-header-small" filter-color="green">
                    
                    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('assets/frontend/images/slider/'.$show->slider)}}')"></div>
                    <div class="container">
                      <div class="content-center profile-data">
                        <div class="cc-profile-image"><a href="#"><img src="{{asset('assets/frontend/images/profile/'.$show->image)}}" alt="Image"/></a></div>
                        <div class="h2 title text-white">{{ Str::upper($show->full_name) }}</div>
                        <p class="category text-white mt-2">{{ $show->experience }}</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">تواصل معي </a>
                        <div class="">
                            @if ($social_media->count() != 0)
                              @foreach ($social_media as $show )
                                <div class="button-container social-buuton-profile"><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->facebook }}" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->twitter }}" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->google }}" rel="tooltip" title="Follow me on Google+"><i class="fa fa-snapchat"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $show->intagram }}" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
                              @endforeach
                            @else
                                <div class="button-container social-buuton-profile"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-snapchat"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
                            @endif
                        </div>
                        {{-- <a class="btn btn-primary" href="{{asset('assets/frontend/images/cv/'.$show->cv)}}" data-aos="zoom-in" data-aos-anchor="data-aos-anchor" download>Download CV</a> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <div class="profile-page">
                <div class="wrapper">
                  <div class="page-header page-header-small" filter-color="green">
                    
                    <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('assets/img/cc-bg-1.jpg') }}')"></div>
                    <div class="container">
                      <div class="content-center">
                        <div class="cc-profile-image"><a href="#"><img src="{{ asset('assets/img/anthony.jpg') }}" alt="Image"/></a></div>
                        <div class="h2 title text-white">Anthony Barnett</div>
                        <p class="category text-white mt-2">Web Developer, Graphic Designer,  Photographer</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
                      </div>
                    </div>
                    <div class="section">
                      <div class="container">
                        <div class="button-container">
                          <a class="btn-social-border btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook">
                            <i class="fa fa-facebook"></i>
                          </a>
                          <a class="btn-social-border btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter">
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a class="btn-social-border btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+">
                            <i class="fa fa-snapchat"></i>
                          </a>
                          <a class="btn-social-border btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif

          </div>
          <div class="col-md-6">
            <div class="" id="about">
              <div class="container">
                @if ($about->count() != 0)
                  @foreach ($about as $show)
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">نبذه مختصره</div>
                        <p>{!! $show->short_about !!}</p>
                
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">معلومات أساسيه</div>
                        <div class="row">
                          <div class="col-sm-4"><strong class="text-uppercase">العمر:</strong></div>
                          <div class="col-sm-8">{{ $show->age }}</div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">البريد الالكتروني:</strong></div>
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
                  </div>
                </div>
                  @endforeach
                @else
                  <div class="card" data-aos="fade-up" data-aos-offset="10">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">About</div>
                        <p>Hello! I am Anthony Barnett. Web Developer, Graphic Designer and Photographer.</p>
                        <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience. 
                          Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience</p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card-body">
                        <div class="h4 mt-0 title">Basic Information</div>
                        <div class="row">
                          <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                          <div class="col-sm-8">24</div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                          <div class="col-sm-8">anthony@company.com</div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                          <div class="col-sm-8">+1718-111-0011</div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                          <div class="col-sm-8">140, City Center, New York, U.S.A nnnnnnnnnn</div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                          <div class="col-sm-8">English, German, French </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="" id="skill">
              <div class="container">
                <div class="h4 text-center mb-4 title">مهارات احترافية</div>
                @if ($skill->count() != 0)
                @foreach ($skill as $show )
                        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_1 }}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">{{$show->skill_1_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_2 }}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">{{$show->skill_2_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_3 }}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">{{$show->skill_3_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_4 }}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">{{$show->skill_4_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_5}}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">{{$show->skill_5_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">{{$show->skill_6 }}</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">{{$show->skill_6_percentage }}%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              
                @else
                    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">JavaScript</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">SASS</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">Bootstrap</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress-container progress-primary"><span class="progress-badge">Photoshop</span>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
              
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="">
              <div class="container cc-education">
                <div class="h4 text-center mb-4 title">المؤهل</div>
                @if ($education->count() != 0)
                  @foreach ($education as $show)
                    <div class="card">
                  <div class="row">
                    <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                      <div class="card-body cc-education-header">
                        <p>{{ $show->session }}</p>
                        <div class="h5">{{ $show->name_of_examination }}</div>
                      </div>
                    </div>
                    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                      <div class="card-body">
                        <div class="h5">{{ $show->group }}</div>
                        <p class="category">{{ $show->institute_name }}</p>
                        <p>{!! $show->short_description !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
                  @endforeach
                @else
                  <div class="card">
                  <div class="row">
                    <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                      <div class="card-body cc-education-header">
                        <p>2018 - 2022</p>
                        <div class="h5">بكالوريوس</div>
                      </div>
                    </div>
                    <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                      <div class="card-body">
                        <div class="h5">بكالوريوس علوم الحاسب</div>
                        <p class="category">جامعه الاسكندريه</p>
                        <p>حاصل علي بكالوريوس علوم الحاسب في الهندسه التقنيه</p>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                
              </div>
            </div>
            
          </div>
        <div class="" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-md-12 ml-auto mr-auto">
                <div class="h4 text-center mb-4 title">أعمالي</div>
                <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" data-toggle="tab" href="#web-development"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#graphic-design"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#Photography"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-content gallery mt-5">
              <div class="tab-pane active" id="web-development">
                <div class="ml-auto mr-auto">
                  <div class="row">
                    @if ($portfolio_experience1->count() != 0)
                      @foreach ($portfolio_experience1 as $show )
                    <div  class="col-md-4">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                          <figure class="cc-effect"><img src="{{asset('assets/frontend/images/Portfolio/port_exper1/'.$show->picture)}}"  width="550" height="410" alt="Image"/>
                            <figcaption>
                              <div class="h4">{{ $show->project_name }}</div>
                              <p>{{ $show->experience_name }}</p>
                            </figcaption>
                          </figure></a></div>
                      </div>
                      @endforeach
                    @else
                    <div class="col-md-6">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/project-1.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Recent Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a></div>
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/project-2.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Startup Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a></div>
                    </div>
                      <div class="col-md-6">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/project-3.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Food Order Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a></div>
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/project-4.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Web Advertising Project</div>
                              <p>Web Development</p>
                            </figcaption>
                          </figure></a></div>
                    </div>
                    @endif
                    
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="graphic-design">
                <div class="ml-auto mr-auto">
                  <div class="row">
                    @if ($portfolio_experience2->count() != 0)
                        @foreach ($portfolio_experience2 as $show )
                        <div class="col-md-6">
                            <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                                <figure class="cc-effect"><img src="{{asset('assets/frontend/images/Portfolio/port_exper2/'.$show->picture)}}"  width="550" height="410" alt="Image"/>
                                  <figcaption>
                                  <div class="h4">{{ $show->project_name }}</div>
                                  <p>{{ $show->experience_name }}</p>
                                  </figcaption>
                                </figure></a></div>
                            
                          </div>
                        @endforeach
                    @else
                    
                          <div class="col-md-6">
                            <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                                <figure class="cc-effect"><img src="{{ asset('assets/frontend/images/graphic-design-1.jpg') }}" alt="Image"/>
                                  <figcaption>
                                    <div class="h4">Triangle Pattern</div>
                                    <p>Graphic Design</p>
                                  </figcaption>
                                </figure></a></div>
                            <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                                <figure class="cc-effect"><img src="  {{ asset('assets/frontend/images/graphic-design-2.jpg') }}" alt="Image"/>
                                  <figcaption>
                                    <div class="h4">Abstract Umbrella</div>
                                    <p>Graphic Design</p>
                                  </figcaption>
                                </figure></a></div>
                          </div>
                          <div class="col-md-6">
                            <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                                <figure class="cc-effect"><img src="  {{ asset('assets/frontend/images/graphic-design-3.jpg') }}" alt="Image"/>
                                  <figcaption>
                                    <div class="h4">Cube Surface Texture</div>
                                    <p>Graphic Design</p>
                                  </figcaption>
                                </figure></a></div>
                            <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                                <figure class="cc-effect"><img src="  {{ asset('assets/frontend/images/graphic-design-4.jpg') }}" alt="Image"/>
                                  <figcaption>
                                    <div class="h4">Abstract Line</div>
                                    <p>Graphic Design</p>
                                  </figcaption>
                                </figure></a></div>
                          </div>
                    @endif
                    

                        </div>
                      </div>
                  </div>
                
            
              <div class="tab-pane" id="Photography">
                <div class="ml-auto mr-auto">
                  <div class="row">
            @if ($portfolio_experience3->count() != 0)
                @foreach ($portfolio_experience3 as $show )
                  <div class="col-md-6">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                          <figure class="cc-effect"><img src="{{asset('assets/frontend/images/Portfolio/port_exper3/'.$show->picture)}}"  width="550" height="410" alt="Image"/>
                            <figcaption>
                              <div class="h4">{{ $show->project_name }}</div>
                              <p>{{ $show->experience_name }}</p>
                            </figcaption>
                          </figure></a></div>
                    
                          
                    </div>
                @endforeach
              @else
                  <div class="col-md-6">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/photography-1.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a></div>
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/photography-3.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Wedding Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a></div>
                    </div>
                      <div class="col-md-6">
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/photography-1.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a></div>
                      <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                          <figure class="cc-effect"><img src=" {{ asset('assets/frontend/images/photography-3.jpg') }}" alt="Image"/>
                            <figcaption>
                              <div class="h4">Wedding Photoshoot</div>
                              <p>Photography</p>
                            </figcaption>
                          </figure></a></div>
                    </div>
                  
              @endif
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="" id="experience">
          <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Work Experience</div>
            @if ($work_experience->count() != 0)
              @foreach ($work_experience as $show)
                <div class="card">
              <div class="row">
                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-experience-header">
                    <p>{{ $show->dateFrom_startToend }}</p>
                    <div class="h5">{{ $show->work_place }}</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">{{ $show->work_experienceName }}</div>
                    <p>{{ $show->short_description }}</p>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
            @else
                  <div class="card">
              <div class="row">
                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-experience-header">
                    <p>March 2016 - Present</p>
                    <div class="h5">CreativeM</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Front End Developer</div>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-experience-header">
                    <p>April 2014 - March 2016</p>
                    <div class="h5">WebNote</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Web Developer</div>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row">
                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-experience-header">
                    <p>April 2013 - February 2014</p>
                    <div class="h5">WEBM</div>
                  </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                    <div class="h5">Intern</div>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                  </div>
                </div>
              </div>
            </div>
            @endif

          </div>
        </div> --}}
        
      
        <div class="row mt-4" id="contact">
          <div class="cc-contact-information col-6" style="background-image: url('{{ asset('assets/setting/1/banner_1 (2).jpg')}}')">
            <div class="">
              <div class="cc-contact ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-0 m-1" data-aos="zoom-in">
                      <div class="h4 text-center title">تواصل معي</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card-body">
                            <form id="contact-form" method="post" enctype="multipart/form-data" action="{{ route('ideas.store_contact') }}" class="ajax-form" resetAfterSend  swalOnSuccess="تم إرسال طلبك بنجاح" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}">
                              @csrf
                           
                              <div class="p pb-3"><strong>لا تتردد في تواصل معي </strong></div>
                              <input type="hidden" name="user_id" value="{{request('user')}}"> 
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                    <input class="form-control" type="text" name="name" placeholder="الإسم" required="required"/>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input class="form-control" type="text" name="subject" placeholder="رقم الجوال" required="required"/>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                  <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" type="email" name="email" placeholder="البريد الإلكتروني" required="required"/>
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
                                <div class="col">
                                  <button class="btn btn-primary" type="submit">ارسل </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-6">
                        @if ($about->count() != 0)
                            @foreach ($about as $show)
                            <div class="card-body">
                              <p class="mb-0"><strong>العنوان </strong></p>
                              <p class="pb-2">{{ $show->address }}</p>
                              <p class="mb-0"><strong>الجوال</strong></p>
                              <p class="pb-2">{{ $show->phone }}</p>
                              <p class="mb-0"><strong>بريد الإلكتروني</strong></p>
                              <p>{{ $show->email }}</p>
                            </div>
                            @endforeach
                        @else
                        <div class="card-body">
                            <p class="mb-0"><strong>Address </strong></p>
                            <p class="pb-2">140, City Center, New York, U.S.A</p>
                            <p class="mb-0"><strong>Phone</strong></p>
                            <p class="pb-2">+1718-111-0011</p>
                            <p class="mb-0"><strong>Email</strong></p>
                            <p>anthony@company.com</p>
                          </div>
                        @endif
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="  wow fadeInUp" data-wow-delay="0.1s">
              <div class=" ">
                  <div class="section-title text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
                      <h2 class="mb-0"> هذه خدمه تقدمها البوابة إذا كان لديك أي استفسار يمكنك الاتصال بنا </h2>
                  </div>
               
                  <div class="row g-2">
                      <div class="col-6">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="ml-3">
                                <h5 class="mb-2">اتصل لطرح أي سؤال</h5>
                                <h6 class="text-primary mb-0">966505360123+</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                      <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                          <div class="ps-4">
                              <h5 class="mb-2">راسلنا عبر البريد الإلكتروني</h5>
                              <h6 class="text-primary mb-0">vip.albawaba@gmail.com</h6>
                          </div>
                      </div>
                  </div>
                      <div class="col-lg-12  slideInUp " data-wow-delay="0.6s">
                          <iframe class="position-relative rounded w-100 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.6167822510356!2d36.529002774387294!3d28.430817993214188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15a9ad46d59b9f7b%3A0xeafb09e70f11614b!2z2YXYpNiz2LPYqSDYqNmI2KfYqNipINiq2KjZiNmDINmE2YTYrtiv2YXYp9iqINin2YTYudmC2KfYsdmK2Kkg2YjYp9mE2KrYs9mI2YrZgg!5e0!3m2!1sen!2ssa!4v1696345634517!5m2!1sen!2ssa" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                          tabindex="0"></iframe>
                      </div>
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
@endsection
