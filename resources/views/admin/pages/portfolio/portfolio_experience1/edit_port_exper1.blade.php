@extends('admin.layout.master')

@section('content')
    <!-- Main content -->
    <div class="main-wrapper">
      <!-- Page Wrapper -->
      <div class="page-wrapper">
          <div class="content container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{ route('update_port_exp1',$port_exper1->id)}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">اسم المشروع</label>
                    <input type="text"  name="project_name" class="form-control" id="exampleInputEmail1" value="{{ $port_exper1->project_name }}" maxlength="60" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">رابط المشروع</label>
                    <input type="text" name="experience_name" class="form-control" id="exampleInputEmail1" value="{{ $port_exper1->experience_name }}" maxlength="35" >
                  </div>
                   <div class="">
                    <h6>الصوره القديمه</h6>
                    <img src="{{asset('assets/frontend/images/Portfolio/port_exper1/'. $port_exper1->picture)}}" class="img-fluid img-thumbnail" alt="img" width="200" height="200">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">الصوره الجديده</label>
                    <input type="file" value="{{ $port_exper1->picture }}" name="picture" class="form-control dropify" id="exampleInputEmail1" >
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-outline-primary">تعديل ملف اعمالك</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
   </div>
    </div>
    </div>
    </section>
@endsection
@push('js')
<!-- bs-custom-file-input -->

<script src="{{ asset('assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush