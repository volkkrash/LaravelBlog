@extends('admin.layouts.index')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Site Settings</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            </div>
          </div>
          @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
          @endif

          @if ($errors->has('header_logo'))
            <div class="alert alert-danger">
                <div class="error">
                    Header logo should be an image!
                </div>
            </div>
          @endif
          @if ($errors->has('footer_logo'))
            <div class="alert alert-danger">
                <div class="error">
                    Footer logo should be an image!
                </div>
            </div>
          @endif
          
        </div>
        <form action="{{ route('admin.settings.site-settings.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <h5 for="company_address">Header logo</h5>
              <div class="input-group col-12">  
                <div class="col-2 icon py-4 bg-secondary">
                  <img class="preview" style="max-width:100%;" src="{{ asset($settings->header_logo) }}" alt="">
                </div>       
                <div class="col-10 file-container">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="header_logo" name="header_logo">
                    <label class="custom-file-label" for="soc_icon">Choose logo</label>
                    
                  </div>
                  <img class="uploaded-preview" style="max-height: 100px;" src="" alt="">
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <h5>Footer logo</h5>
              <div class="input-group col-12"> 
                <div class="col-2 icon py-4 bg-secondary">
                  <img class="preview" style="max-width:100%;" src="{{ asset($settings->footer_logo) }}" alt="">
                </div>        
                <div class="col-10 file-container">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="footer_logo" name="footer_logo">
                    <label class="custom-file-label" for="soc_icon">Choose logo</label>
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
    </div>
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