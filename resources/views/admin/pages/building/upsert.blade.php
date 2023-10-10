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
                            <h3 class="page-title">{{ __('pages.add_building') }}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:(0);">{{ __('pages.buildings') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- /Page Header -->        
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body custom-edit-service">                 
                                <!-- Add Blog -->
                                <form method="post" enctype="multipart/form-data" action="{{ route('building.modify') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('building') }}">
                                    @csrf
                                    <div class="service-fields mb-3">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="mb-2">{{ __('pages.name') }}</label>
                                                    <input class="form-control" type="text" name="name" placeholder="{{ __('pages.name') }}" value="@isset($building->id){{$building->name}}@endisset">
                                                    <p class="error error_name"></p>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <label class="mb-2">{{ __('pages.compound') }}</label>
                                                    <select class="form-control select2 d-flex " placeholder="{{ __('pages.compound_owner') }}" route="{{route('compounds')}}"  name="compound_id">
                                                        @if($building->compound)
                                                            <option class="form-control" selected value="{{$building->compound->id}}">{{ $building->compound->name}}</option>
                                                        @endif
                                                    </select>
                                                </div> --}}
                                            </div>

                                        </div>
                                    </div>
                                    @isset($building->id)
                                        <input type="hidden" value="{{$building->id}}" name="id">
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

</script>
@endsection