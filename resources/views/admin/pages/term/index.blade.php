
@extends('admin.layout.master')
@section('css')
@endsection
<style>
   @media only screen and (max-width: 991.98px)
   {
    .top-nav-search {
        display: flex !important;
    }
   }
</style>
@section('content')
    <div class="main-wrapper">
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header card-header">
                    <div class="row">
                        <div class="col-sm-7 col-auto">
                            <h3 class="page-title">شروط الاستخدام </h3>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{ route('terms.upsert') }}" class="btn btn-primary float-end ">  <i class="ti-plus"></i>إضافه شرط جديد</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12 ">
                                <ul class="nav nav-pills mb-3 p-0 " id="pills-tab" role="tablist">
                                    <li class="nav-item col-4 justify-content-center" role="presentation">
                                        <button class=" top-nav-search btn btn-secoandry mt-2 {{Request::get('status') ? explode('/', Request::get('status'))[0] == 'all' ? 'active' : '' : 'active'}}" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="{{explode('/', Request::get('status'))[0] == 'all' ? 'true' : 'false'}}">عام  [{{count($terms_general)}}]  </button>
                                    </li>
                                    <li class="nav-item col-4 justify-content-center " role="presentation">
                                        <button class=" top-nav-search btn btn-secoandry mt-2 {{explode('/', Request::get('status'))[0] == 'yes' ? 'active' : ''}}" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="{{explode('/', Request::get('status'))[0] == 'yes' ? 'true' : 'false'}}" >  المشتري   [{{count($terms_buyer)}}]  </button>
                                    </li>
                                    <li class="nav-item col-4  justify-content-center" role="presentation">
                                        <button class=" top-nav-search btn btn-secoandry mt-2 {{explode('/', Request::get('status'))[0] == 'no' ? 'active' : ''}}" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="{{explode('/', Request::get('status'))[0] == 'no' ? 'true' : 'false'}}">البائع   [{{count($terms_seller)}}]</button>
                                    </li>
                                </ul>
                        <div class="card card-header ">
                            <div class="card-body   " >
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade {{Request::get('status') ? explode('/', Request::get('status'))[0] == 'all' ? 'show active' : '' : 'show active'}}" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="table-responsive ">
                                        
                                            <table id="example" class=" display  table table-hover table-center mb-0"  filter="{{ route('city.filter') }}">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>العنوان</th>
                                                        <th>المحتوي</th>                                    
                                                       <th class="text-end">{{ __('pages.actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($terms_general as $term)
                                                            <tr class="record">
                                                                <td>{{ $term->id }}#</td>
                                                                <td>{{ $term->title }}</td>
                                                                <td> {{$term->description}} </td>                                                 
                                                                <td class="text-end">
                                                                    <div class="actions">
                                                                        <a href="{{ route('terms.upsert',['terms' => $term->id]) }}" class="btn btn-sm bg-success-light" >
                                                                            <i class="ti-pencil"></i> {{ __('pages.edit') }}
                                                                        </a>
                                                                        <a  data-bs-toggle="modal" href="#" class="btn btn-sm bg-danger-light btn_delete" route="{{ route('terms.delete',['terms' => $term->id])}}">
                                                                            <i class="ti-trash"></i> {{ __('pages.delete') }}
                                                                        </a>
                                                                    
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                    @endforeach
                                                </tbody>  
                                            </table>
                                                <nav aria-label="Page navigation example" class="mt-2">
                                                    <ul class="pagination">
                                                        @for($i = 1; $i <= $terms_general->lastPage(); $i++)
                                                            <li class="page-item @if(request()->input('page') == $i) active @endif"><a class="page-link" href="?name={{request()->input('name')}}&page={{$i}}&status=all">{{$i}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade {{explode('/', Request::get('status'))[0] == 'yes' ? 'show active' : ''}}" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="table-responsive ">
                                        
                                            <table id="example" class=" display  table table-hover table-center mb-0"  filter="{{ route('city.filter') }}">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>العنوان</th>
                                                        <th>المحتوي</th>    
                                                        <th class="text-end">{{ __('pages.actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($terms_buyer as $term)
                                                        <tr class="record">
                                                            <td>{{ $term->id }}#</td>
                                                            <td>{{ $term->title }}</td>
                                                            <td> {{$term->description}} </td>                                                 
                                                            <td class="text-end">
                                                                <div class="actions">
                                                                    <a href="{{ route('terms.upsert',['terms' => $term->id]) }}" class="btn btn-sm bg-success-light" >
                                                                        <i class="ti-pencil"></i> {{ __('pages.edit') }}
                                                                    </a>
                                                                    <a  data-bs-toggle="modal" href="#" class="btn btn-sm bg-danger-light btn_delete" route="{{ route('terms.delete',['terms' => $term->id])}}">
                                                                        <i class="ti-trash"></i> {{ __('pages.delete') }}
                                                                    </a>
                                                                
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>  
                                            </table>
                                                <nav aria-label="Page navigation example" class="mt-2">
                                                    <ul class="pagination">
                                                        @for($i = 1; $i <= $terms_buyer->lastPage(); $i++)
                                                            <li class="page-city @if(request()->input('page') == $i) active @endif"><a class="page-link" href="?name={{request()->input('name')}}&page={{$i}}">{{$i}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade {{explode('/', Request::get('status'))[0] == 'no' ? 'show active' : ''}}" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="table-responsive ">
                                        
                                            <table id="example" class=" display  table table-hover table-center mb-0"  filter="{{ route('city.filter') }}">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>العنوان</th>
                                                        <th>المحتوي</th>
                                                        <th class="text-end">{{ __('pages.actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($terms_seller as $term)
                                                        <tr class="record">
                                                            <td>{{ $term->id }}#</td>
                                                            <td>{{ $term->title }}</td>
                                                            <td> {{$term->description}} </td>                                                 
                                                            <td class="text-end">
                                                                <div class="actions">
                                                                    <a href="{{ route('terms.upsert',['terms' => $term->id]) }}" class="btn btn-sm bg-success-light" >
                                                                        <i class="ti-pencil"></i> {{ __('pages.edit') }}
                                                                    </a>
                                                                    <a  data-bs-toggle="modal" href="#" class="btn btn-sm bg-danger-light btn_delete" route="{{ route('terms.delete',['terms' => $term->id])}}">
                                                                        <i class="ti-trash"></i> {{ __('pages.delete') }}
                                                                    </a>
                                                                
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>  
                                            </table>
                                                <nav aria-label="Page navigation example" class="mt-2">
                                                    <ul class="pagination">
                                                        @for($i = 1; $i <= $terms_seller->lastPage(); $i++)
                                                            <li class="page-city @if(request()->input('page') == $i) active @endif"><a class="page-link" href="?name={{request()->input('name')}}&page={{$i}}">{{$i}}</a></li>
                                                        @endfor
                                                    </ul>
                                                </nav>
                                        </div>
                                    </div>
                                </div>
                       
                            </div>
                        </div>
                    </div>			
                </div>
            </div>
        <!-- /Page Wrapper -->
    </div>
@endsection


@section('js')
<script>
$('.copyval').on('click',function(e){
   let x=$(this).attr('value');
   e.preventDefault();
   document.addEventListener('copy', function(e) {
      e.clipboardData.setData('text/plain', x);
      e.preventDefault();
   }, true);
   document.execCommand('copy');  
})
function edit_partner(el) {
    var link = $(el) //refer `a` tag which is clicked
    var modal = $("#edit_partner") //your modal
    var full_name = link.data('full_name')
    var id = link.data('id')
    var email = link.data('email')
    var phone = link.data('phone')
    var image = link.data('image')

    modal.find('#full_name').val(full_name);
    modal.find('#id').val(id);
    modal.find('#email').val(email);
    modal.find('#phone').val(phone);
    $("#image").children().remove();
    $("#image").append(`
        <div class="form-group">
            <input type="file" class="dropify" src=""  data-default-file="${image}" name="picture"/>
            <p class="error error_picture"></p>
        </div>
    `);
    $('.dropify').dropify();
}


</script>

@endsection