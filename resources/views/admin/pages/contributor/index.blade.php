
@extends('admin.layout.master')
@section('content')
    <div class="main-wrapper">
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header card-header">
                    <div class="row">
                        <div class="col-sm-7 col-auto">
                            <h3 class="page-title">{{ __('pages.contributors') }}</h3>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{ route('contributor.upsert') }}" class="btn btn-primary float-end ">  <i class="ti-plus"></i> {{ __('pages.add_contributor') }}</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card card-header ">
                            <div class="card-body   " >
                                <div class="table-responsive ">
                                    <form class="form" action="{{ route('contributor.filter') }}" method="get">
                                        <div class="form-group d-flex align-contributors-center">
                                            <input type="search" placeholder="{{ __('pages.search_by_name') }}" name="name" class="form-control d-block search_input w-50" value="{{request()->input('name')}}">
                                            <button class="btn btn-primary mx-2 btn-search">{{ __('pages.search') }}</button>
                                        </div>
                                    </form>
                                    <table id="example" class=" display  table table-hover table-center mb-0"  filter="{{ route('contributor.filter') }}">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>{{ __('pages.link') }}</th>
                                                <th class="text-end">{{ __('pages.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contributors as $contributor)
                                                <tr class="record">
                                                    <td>{{ $contributor->id }}#</td>
                                                    <td>{{ $contributor->name }}</td>
                                                    <td class="text-end">
                                                        <div class="actions">
                                                            <a href="{{ route('contributor.upsert',['contributor' => $contributor->id]) }}" class="btn btn-sm bg-success-light" >
                                                                <i class="ti-pencil"></i> {{ __('pages.edit') }}
                                                            </a>
                                                            <a  data-bs-toggle="modal" href="#" class="btn btn-sm bg-danger-light btn_delete" route="{{ route('contributor.delete',['contributor' => $contributor->id])}}">
                                                                <i class="ti-trash"></i> {{ __('pages.delete') }}
                                                            </a>
                                                        
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>  
                                    </table>
                                </div>
                       
                                <nav aria-label="Page navigation example" class="mt-2">
                                    <ul class="pagination">
                                        @for($i = 1; $i <= $contributors->lastPage(); $i++)
                                            <li class="page-contributor @if(request()->input('page') == $i) active @endif"><a class="page-link" href="?name={{request()->input('name')}}&page={{$i}}">{{$i}}</a></li>
                                        @endfor
                                    </ul>
                                </nav>
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
function edit_contributor(el) {
    var link = $(el) //refer `a` tag which is clicked
    var modal = $("#edit_contributor") //your modal
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