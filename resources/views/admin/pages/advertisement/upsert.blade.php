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
                            <h3 class="page-title">{{ __('pages.add_advertisement') }}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-advertisement"><a href="javascript:(0);">{{ __('pages.advertisements') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body custom-edit-service">                 
                                <form method="post" enctype="multipart/form-data" action="{{ route('advertisement.modify') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('advertisement') }}">
                                    @csrf
                                    <div class="service-fields mb-3">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <label class="mb-2">{{ __('pages.title') }}</label>
                                                    <input class="form-control text-start" type="text" name="title" value="@isset($advertisement->id){{$advertisement->title}}@endisset" placeholder="{{ __('pages.name') }}" >
                                                </div>
                                                <div class="col-md-6 mb-2 d-none">
                                                    <label class="mb-2">{{ __('pages.code') }}</label>
                                                    <input class="form-control text-start" type="text" name="code" value="@isset($advertisement->id){{$advertisement->code}}@endisset" placeholder="{{ __('pages.name') }}" >
                                                    <input class="form-control text-start" type="text" name="capital_advertisement_id" value="@isset($advertisement->id){{$advertisement->capital_advertisement_id}}@endisset" placeholder="{{ __('pages.name') }}" >

                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="mb-2">{{ __('pages.name') }} (ُEN)</label>
                                                    <input class="form-control text-start" type="text" name="name_en" value="@isset($advertisement->id){{$advertisement->name_en}}@endisset" placeholder="{{ __('pages.name') }} (EN)" >
                                                </div>
                                                <input class="d-none" name="currentLat" id="currentLat" type="text" value="{{$advertisement->currentLat}}"/>
                                                <input class="d-none" name="currentLng" id="currentLng" type="text" value="{{$advertisement->currentLng}}"/>
                                      
                                           
                                                <div class="col-md-12 ">
                                                    <label class="mb-2">{{ __('pages.location') }}</label>
                                                    <div class="map-show" id="map_2"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @isset($advertisement->id)
                                        <input type="hidden" value="{{$advertisement->id}}" name="id">
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
                        results: $.map(response, function(advertisement) {
                            return {
                                text: advertisement.name ,
                                id: advertisement.id,
                            }
                        })
                    }
                },
                cache: true,
                templateResult: formatRepo,
                placeholder: placeholder,
            },
        });

        function formatRepo (advertisement) {
            return advertisement.name;
        }
    });

    const API_KEY = 'AIzaSyD5P1aaaeShZf5EehRdc8RBY8MqhXvrtLc';
    // Function to initialize and show the map
    $(document).ready(function() {
        initMap();
    });

    function initMap() {
        const latitude = parseFloat($('#currentLat').val());
        const longitude =  parseFloat($('#currentLng').val());
        const location = { lat: latitude, lng: longitude };
    
        const map_2 = new google.maps.Map(document.getElementById('map_2'), {
            center: location,
            zoom: 15,
            
        });

        const marker2 = new google.maps.Marker({
            position: location,
            map: map_2,
            title: 'Your Location',
			draggable: true,
        });
        google.maps.event.addListener(marker2, 'dragend', function () {
				updateCoordinates(marker2.getPosition());
        });
        
    }
    function updateCoordinates(position) {
        const currentLat = position.lat();
        const currentLng = position.lng();
        $('#currentLat').val('');
        $('#currentLng').val('');

        $('#currentLat').val(currentLat.toFixed(6));
        $('#currentLng').val(currentLng.toFixed(6));
    }
</script>
@endsection