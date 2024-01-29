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
                <h3 class="card-title">إنشاء اعمالك</h3>
              </div>
              <form method="post" enctype="multipart/form-data" action="{{ route('store_port_exp1') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('manage_port_exp1') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">اسم المشروع</label>
                    <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" placeholder=" اسم المشروع" maxlength="60" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">خبرتك  بالمشروع</label>
                    <input type="text" name="experience_name" class="form-control" id="exampleInputEmail1" placeholder=" خبرتك  بالمشروع" maxlength="35" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">صوره المشروع</label>
                    <input type="file" name="picture" class="form-control dropify" id="exampleInputEmail1" required>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-outline-primary">حفظ</button>
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