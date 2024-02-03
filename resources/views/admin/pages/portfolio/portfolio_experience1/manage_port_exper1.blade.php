@extends('admin.layout.master')



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
                    <h3 class="page-title">اعمالك  </h3>
                </div>
                
                    <div class="col-sm-5 col">
                        <a href="{{ route('crate_port_exp1') }}" class="btn btn-primary float-end ">  <i class="ti-plus"></i> قم بانشاء اعمالك  </a>
                    </div>
                  
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table  table-bordered table-striped display  table table-hover table-center mb-0">
                 <thead>
                  <tr>
                    <th>#</th>
                    <th>اسم المشروع  </th>
                    <th>رابط المشروع</th>
                    <th>صورة المشروع</th>
                    <th>احداث</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  @foreach($port_exper1 as $serial=>$show)
                    <tr>
                    <td>{{ $serial +1 }}</td>
                    <td>{{$show->project_name}}</td>
                    <td>{{$show->experience_name}}</td>
                    <td>
                      <img class="img-fluid img-thumbnail" src="{{asset('assets/frontend/images/Portfolio/port_exper1/'.$show->picture)}}" width="70" height="50" alt="img">
                      
                    </td>
                    <th> 
                      <a class="h4 text-danger mr-2" type="submit" onclick="deletecontent({{ $show->id  }})">
                          <i class=" ti-trash"></i> حذف
                      </a>
                    <form id="delete-form-{{ $show->id  }}" 
                     action="{{ route('destroy_port_exp1',$show->id)}}" method="get" style="display: none;">
                      @csrf
                                      
                    </form>

                    <a href="{{ route('edit_port_exp1',$show->id)}}" class="h4 text-success"> <i class=" ti-pencil"></i> تعديل </a>
                   </th>
                  </tr>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
  </div>
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