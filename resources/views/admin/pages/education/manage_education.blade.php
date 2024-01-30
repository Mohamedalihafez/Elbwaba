@extends('admin.layout.master')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@section('css')

@endsection

@section('content')
<div class="main-wrapper">
  <!-- Page Wrapper -->
  
  <div class="page-wrapper">
      <div class="content container-fluid">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-7 col-auto">
                    <h3 class="page-title">المؤهل  </h3>
                </div>
                @if(count($education) == 0)
                <div class="col-sm-5 col">
                  <a href="{{ route('create_education') }}" class="btn btn-primary float-end ">  <i class="ti-plus"></i> قم بانشاء مؤهلك  </a>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-header">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>القسم</th>
                    <th>المعهد التعليمي</th>
                    <th>فتره من - إلي</th>
                    <th>إسم الشهاده </th>
                    <th>وصف قصير</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  @foreach($education as $serial=>$show)
                    <tr>
                    <td>{{ $serial +1 }}</td>
                    <td>{{$show->group}}</td>
                    <td>{{$show->institute_name}}</td>
                    <td>{{$show->session}}</td>
                    <td>{{$show->name_of_examination}}</td>
                    <td>{{Str::limit($show->short_description,50)}}</td>
                    <th> 
                      <a class="h4 text-danger mr-2" type="submit" onclick="deletecontent({{ $show->id  }})">
                          <i class=" ti-trash"></i> حذف
                      </a>
                    <form id="delete-form-{{ $show->id  }}" 
                     action="{{ route('destroy_education',$show->id)}}" method="get" style="display: none;">
                      @csrf
                                      
                    </form>

                    <a href="{{ route('edit_education', $show->id)}}" class="h4 text-success"> <i class="ti-pencil"></i> تعديل </a>
                   </th>
                  </tr>
                  @endforeach
                 
                 
                 
                  
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@section('js')

 <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deletecontent(id) {
            swal({
                title: 'هل انت متأكد ؟',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم قم بالحذف!',
                cancelButtonText: 'إلغاء',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
   </script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });



</script>
    
@endsection