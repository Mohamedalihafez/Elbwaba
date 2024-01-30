@extends('admin.layout.master')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@section('css')

@endsection

@section('content')
 <!-- /.card -->
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
                <h3 class="card-title">المؤهل </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('store_education') }}" class="ajax-form" swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}" redirect="{{ route('manage_education') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">القسم</label>
                    <input type="text" name="group" class="form-control" value="{{old('group')}}" id="exampleInputEmail1" placeholder="  القسم" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">المعهد التعليمي</label>
                    <input type="text" name="institute_name" class="form-control" value="{{old('institute_name')}}" id="exampleInputEmail1" placeholder="المعهد التعليمي" maxlength="60" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">فتره من - إلي </label>
                    <input type="text" name="session" class="form-control" value="{{old('session')}}" id="exampleInputEmail1" placeholder=" 2018-2024" maxlength="20" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم الشهاده </label>
                    <input type="text" name="name_of_examination" class="form-control" value="{{old('name_of_examination')}}" id="exampleInputEmail1" placeholder=" إسم الشهاده " maxlength="25" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">وصف قصير </label>
                      <textarea id="summernote" name="short_description" value="{{old('short_description')}}" maxlength="450" required>
                     </textarea>
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
@section('js')
<!-- bs-custom-file-input -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<script src="{{ asset('assets/backend/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});

$(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection