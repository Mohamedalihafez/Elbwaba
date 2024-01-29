@extends('layouts.master.master')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

@endsection
@section('content')
<div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">شروط الاستخدام </h1>
        </div>
        <div class=" g-5 mb-5">
            <div class="col-lg-12">
                <div class="card-body m-2" data-wow-delay="0.1s">
                    <div class="col-lg-12  wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex   gap-3">
        
                            <li class="nav-item  ">
                                <a class="btn btn-outline-primary  active " data-bs-toggle="pill" href="#tab-1"> المشتري  </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="btn btn-outline-primary   " data-bs-toggle="pill" href="#tab-2"> البائع  </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="btn btn-outline-primary   " data-bs-toggle="pill" href="#tab-3"> عام  </a>
                            </li>
                        </ul>
                    </div>       
                </div>
            </div>
            <div class="tab-content card-header bg-white">
                    <div id="tab-1" class="tab-pane fade show p-0   active">
                        <div class="row g-4">
                            @foreach ($terms as $term )   
                                @if($term->type_id == 2)
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item mt-2">
                                        <h2 class="accordion-header" id="{{ $term->id}}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $term->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                {{$term->title}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $term->id}}" class="accordion-collapse collapse @if($term->id == 1) show @endif" aria-labelledby="{{ $term->id}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-white">
                                            <strong> {{$term->description}}</strong> 
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0   ">
                        <div class="row g-4">
                            @foreach ($terms as $term )   
                            @if($term->type_id == 3)
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item mt-2">
                                    <h2 class="accordion-header" id="{{ $term->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $term->id}}" aria-expanded="true" aria-controls="collapseOne">
                                            {{$term->title}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $term->id}}" class="accordion-collapse collapse @if($term->id == 1) show @endif" aria-labelledby="{{ $term->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-white">
                                        <strong> {{$term->description}}</strong> 
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0   ">
                        <div class="row g-4">
                            @foreach ($terms as $term )   
                            @if($term->type_id == 1)
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item mt-2">
                                    <h2 class="accordion-header" id="{{ $term->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $term->id}}" aria-expanded="true" aria-controls="collapseOne">
                                            {{$term->title}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $term->id}}" class="accordion-collapse collapse @if($term->id == 1) show @endif" aria-labelledby="{{ $term->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-white">
                                        <strong> {{$term->description}}</strong> 
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>  
            </div>
        
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>


</script>
@endsection