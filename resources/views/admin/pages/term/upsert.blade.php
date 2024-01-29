@extends('admin.layout.master')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<style>
    .iti--allow-dropdown
    {
        width: 100% !important;
    }
</style>
@section('content')
<div class="main-wrapper">
         

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="content container-fluid">		
                <!-- Page Header -->

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">تعديل </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-term"><a href="javascript:(0);"></a> شروط الاستخدام</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class=" custom-edit-service">                 
                                <form id="ads_form" method="post" enctype="multipart/form-data" action="{{ route('terms.modify') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('terms') }}">
                                    @csrf
                                    <div class="service-fields mb-3 container">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6   mt-2  ">
                                                    <label class="mt-2 ">العنوان</label>
                                                    <input class="form-control text-start" type="text" name="title" value="@isset($term->id){{$term->title}}@endisset"  >
                                                </div>
                                            
                                                <div class="col-md-6  mt-2  ">
                                                    <label class="mt-2 ">النوع</label>
                                                    <select id=""  class="form-control d-flex" style="height: 40px !important" name="type_id">
                                                        <option  @if($term->type_id == 1) selected @else @endif  value="1">عام </option>
                                                        <option  @if($term->type_id == 2) selected @else @endif  value="2">المشتري </option>
                                                        <option  @if($term->type_id == 3) selected @else @endif  value="3">البائع</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12  mt-2  ">
                                                    <label class="mt-2 ">المحتوي</label>
                                                    <textarea id="inputDescriptionEs" class="form-control" name="description"  rows="4" required>@isset($term->id){{$term->description}}@endisset</textarea>
                                                </div>
                                        
                                                </div>
                                        </div>
                                    </div>
                                    @isset($term->id)
                                        <input type="hidden" value="{{$term->id}}" name="id">
                                        <input type="hidden" value="{{$term->user_id}}" name="user_id">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>

</script>
@endsection