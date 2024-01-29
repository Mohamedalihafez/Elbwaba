@extends('admin.layout.master')
@section('title')
 | crate portfolio experience2
@endsection

@section('Content_header')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Portfolio Experience2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Portfolio Experience2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Portfolio Experience2</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{ route('store_port_exp2') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">اسم المشروع</label>
                    <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" placeholder="Enter اسم المشروع" maxlength="60" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">خبرتك  بالمشروع</label>
                    <input type="text" name="experience_name" class="form-control" id="exampleInputEmail1" placeholder="Enter خبرتك  بالمشروع" maxlength="35" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" name="picture" class="form-control" id="exampleInputEmail1" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-outline-primary">Create Portfolio Experience2</button>
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