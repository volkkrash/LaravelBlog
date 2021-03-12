@extends('admin.layouts.index')

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Create new slider item</h3>
    
  </div>
  <div class="">
    @if($errors->any())
      <ul class="">
        @foreach ($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" action="{{ route('main-slider.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" name="active" id="active" checked="">
          <label for="active" class="custom-control-label">Custom Checkbox</label>
        </div>
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="slug">Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter subtitle" value="{{ old('subtitle') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="slug">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="{{ old('description') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="sort">sort</label>
        <input type="text" class="form-control" id="sort" name="sort" placeholder="Enter sort" value="{{ old('sort') ?? 500 }}">
      </div>
      <div class="form-group">
        <h5 for="company_address">Picture</h5>
        <div class="input-group col-12"> 
          <div class="col-2 icon py-4 bg-secondary">
            <img class="preview" style="max-width:100%;" src="" alt="">
          </div>        
          <div class="col-10 file-container">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="picture" name="picture">
              <label class="custom-file-label" for="picture">Choose picture</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          
          let img = input.closest(".form-group").querySelector('img.preview');
          img.setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    }

    $("input[type=file]").change(function(){
    readURL(this);
    });
  });
</script>
  
@endsection