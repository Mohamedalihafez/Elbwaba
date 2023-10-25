@extends('admin.layout.master')
@section('content')
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="content container-fluid">		
                <!-- Page Header -->

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">{{ __('pages.add_city') }}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-city"><a href="javascript:(0);">{{ __('pages.cities') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body custom-edit-service">                 
                                <form method="post" enctype="multipart/form-data" action="{{ route('city.modify') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('city') }}">
                                    @csrf
                                    <div class="service-fields mb-3">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <label class="mb-2">{{ __('pages.name') }}</label>
                                                    <input class="form-control text-start" type="text" name="name_ar" value="@isset($city->id){{$city->name_ar}}@endisset" placeholder="{{ __('pages.name') }}" >
                                                </div>
                                                <div class="col-md-6 mb-2 d-none">
                                                    <label class="mb-2">{{ __('pages.code') }}</label>
                                                    <input class="form-control text-start" type="text" name="code" value="@isset($city->id){{$city->code}}@endisset" placeholder="{{ __('pages.name') }}" >
                                                    <input class="form-control text-start" type="text" name="capital_city_id" value="@isset($city->id){{$city->capital_city_id}}@endisset" placeholder="{{ __('pages.name') }}" >

                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="mb-2">{{ __('pages.name') }} (ُEN)</label>
                                                    <input class="form-control text-start" type="text" name="name_en" value="@isset($city->id){{$city->name_en}}@endisset" placeholder="{{ __('pages.name') }} (EN)" >
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <label class="mb-2">المنطقه </label>
                                                    <select class="form-control  d-flex " placeholder="المنطقه"  name="region_id"> 
                                                        @foreach($regions as $region)
                                                            <option @isset($city->id) @if($city->region->id == $region->id) selected @else @endif @endisset class="form-control"  value="{{$region->id}}">{{ $region->name_ar}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-2 d-none">
                                                    <label class="mb-2">{{ __('pages.population') }}</label>
                                                    <input class="form-control text-start" type="text" name="population" value="@isset($city->id){{$city->center}}@endisset" placeholder="{{ __('pages.cost') }}" >
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @isset($city->id)
                                        <input type="hidden" value="{{$city->id}}" name="id">
                                    @endisset
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit" name="form_submit" placeholder="submit">{{ __('pages.submit') }}</button>
                                    </div>
                                </form>
                                <!-- /Add Blog -->
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
    $('.dropify').dropify();

    $(document).ready(function(){
        function route(){
            return $(this).attr('route');
        }

        function placeholder(){
            return $(this).attr('placeholder');
        }
        
        $("#apartment_id").select2({
            ajax: {
                url: route,
                type: "post",
                dataType: 'json',
                delay: 250,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: function (term) {
                    return {
                        term: term,
                        building_id: $("#building_id").val()
                    };
                },
                processResults: function (response) {
                    return {
                        results: $.map(response, function(city) {
                            return {
                                text: city.name ,
                                id: city.id,
                            }
                        })
                    }
                },
                cache: true,
                templateResult: formatRepo,
                placeholder: placeholder,
            },
        });

        function formatRepo (city) {
            return city.name;
        }
    });
</script>
@endsection