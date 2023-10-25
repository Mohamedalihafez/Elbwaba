
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
                            <h3 class="page-title">{{ __('pages.advertisements') }}</h3>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{ route('city.upsert') }}" class="btn btn-primary float-end ">  <i class="ti-plus"></i> {{ __('pages.add_city') }}</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card card-header ">
                            <div class="card-body   " >
                                <div class="table-responsive ">
                                    <form class="form" action="{{ route('city.filter') }}" method="get">
                                        <div class="form-group d-flex align-advertisements-center">
                                            <input type="search" placeholder="{{ __('pages.search_by_name') }}" name="name" class="form-control d-block search_input w-50" value="{{request()->input('name')}}">
                                            <button class="btn btn-primary mx-2 btn-search">{{ __('pages.search') }}</button>
                                        </div>
                                    </form>
                                    <table id="example" class=" display  table table-hover table-center mb-0"  filter="{{ route('city.filter') }}">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>{{ __('pages.title') }}</th>
                                                <th>{{ __('pages.description') }}</th>
                                                <th>{{ __('pages.phone') }}</th>
                                                <th>{{ __('pages.seen') }}</th>
                                                <th>{{ __('pages.region') }}</th>
                                                <th>{{ __('pages.city') }}</th> 
                                                <th>{{ __('pages.district') }}</th> 
                                                <th>{{ __('pages.street') }}</th> 
                                                <th>{{ __('pages.ads_owner') }}</th> 


                                                <th class="text-end">{{ __('pages.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($advertisements as $advertisement)
                                                <tr class="record">
                                                    <td>{{ $advertisement->id }}#</td>
                                                    <td>{{ $advertisement->title }}</td>
                                                    <td> {{$advertisement->description}} </td>
                                                    <td> {{$advertisement->phone}} </td>
                                                    <td>
                                                        <label class="switch switch_activator_status" style="width: 50px; height: 25px;">
                                                            <input type="checkbox" class="activator_status" @if($advertisement->seen) value="1" checked @else  value="0" @endif advertisement_id="{{ $advertisement->id }}"  name="seen" style="width: 25px; height: 25px;">
                                                            <span class="slider round2" style="border-radius: 25px;"></span>
                                                        </label>
                                                    </td>                                                    
                                                    <td> {{$advertisement->region->name_ar }}</td>
                                                    <td> {{$advertisement->city->name_ar}} </td>
                                                    <td> {{$advertisement->district}} </td>
                                                    <td> {{$advertisement->street}} </td>
                                                    <td>  @if($advertisement->ads_owner == 1) مالك @elseif($advertisement->ads_owner == 2) مكتب عقار @else  وسيط @endif  </td>

                                                    <td class="text-end">
                                                        <div class="actions">
                                                            <a href="{{ route('advertisementadmin.upsert',['advertisementadmin' => $advertisement->id]) }}" class="btn btn-sm bg-success-light" >
                                                                <i class="ti-pencil"></i> {{ __('pages.edit') }}
                                                            </a>
                                                            <a  data-bs-toggle="modal" href="#" class="btn btn-sm bg-danger-light btn_delete" route="{{ route('advertisementadmin.delete',['advertisementadmin' => $advertisement->id])}}">
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
                                                @for($i = 1; $i <= $advertisements->lastPage(); $i++)
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

$(".activator_status").on("change", function(){   
        if ($(this).is(":checked"))
        {
            $(this).val(1);
        }   
        else {
            $(this).val(0);
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            url: '{{ route("advertisementadmin.status") }}',
            method: 'post',
            data: {id: $(this).attr("advertisement_id"), status: $(this).val()},
            success: function () {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    icon: 'success',
                    title: '{{ __("pages.sucessdata") }}'
                });
            }
        });
    });
</script>

@endsection