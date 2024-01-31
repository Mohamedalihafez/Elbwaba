@extends('admin.layout.master')
@section('title')
@endsection
@push('css')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
 <!-- /.card -->
 <div class="main-wrapper">
  <!-- Page Wrapper -->
  <div class="page-wrapper">
      <div class="content container-fluid">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-7 col-auto">
                    <h3 class="page-title">طلبات للتواصل معك  </h3>
                </div>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>اسم </th>
                    <th>عنوان الرساله</th>
                    <th>البريد الإلكتروني</th>
                    <th>محتوي الطلب</th>
                    <th>تاريخ الطلب</th>
                    <th>
                       </th>

                  </tr>
                  </thead>
                  <tbody>
                 
                  @foreach($contact as $serial=>$show)
                    <tr>
                    <td>{{ $serial +1 }}</td>
                    <td>{{$show->name}}</td>
                    <td>{{$show->subject}}</td>
                    <td>{{$show->email}}</td>
                    <td>{{$show->message}}</td>
                    <td>{{$show->created_at->format('Y-m-d h:i:s')}}</td>
                    <th> 
                      <a class="h4 text-danger mr-2" type="submit" onclick="deletecontent({{ $show->id  }})">
                          <i class=" ti-trash"></i> حذف
                      </a>
                    <form id="delete-form-{{ $show->id  }}" 
                     action="{{ route('destroy_contact',$show->id)}}" method="get" style="display: none;">
                      @csrf
                                      
                    </form>

                    {{-- <a href="{{ route('edit_contact', $show->id)}}" class="h4 text-success"> <i class=" ti-pencil"></i>تعديل </a> --}}
                   </th>
                  </tr>
                  @endforeach
                 
                 
                 
                  
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
  </div>
            <!-- /.card -->
@endsection

@section('js')
<!-- DataTables  & Plugins -->
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