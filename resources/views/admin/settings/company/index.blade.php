@extends('admin.layouts.index')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Company settings</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            </div>
          </div>
          @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
          @endif

          @if ($errors->has('company_address'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('company_address') }}
                </div>
            </div>
          @endif
          @if ($errors->has('company_email'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('company_email') }}
                </div>
            </div>
          @endif
          @if ($errors->has('company_phone'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('company_phone') }}
                </div>
            </div>
          @endif



          @if ($errors->has('soc_1_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_1_icon') }}
                </div>
            </div>
          @endif
          @if ($errors->has('soc_2_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_2_icon') }}
                </div>
            </div>
          @endif
          @if ($errors->has('soc_3_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_3_icon') }}
                </div>
            </div>
          @endif
          @if ($errors->has('soc_4_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_4_icon') }}
                </div>
            </div>
          @endif
          @if ($errors->has('soc_5_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_5_icon') }}
                </div>
            </div>
          @endif
          @if ($errors->has('soc_5_icon'))
            <div class="alert alert-danger">
                <div class="error">
                    {{ $errors->first('soc_5_icon') }}
                </div>
            </div>
          @endif
        </div>
        <form action="{{ route('admin.settings.company.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="company_address">Address</label>
              <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Enter address" value="{{ $data->company_address }}">
            </div>
            <div class="form-group">
              <label for="company_phone">Phone</label>
              <input type="text" class="form-control" id="company_phone" name="company_phone" placeholder="Enter phone" value="{{ $data->company_phone }}">
            </div>
            <div class="form-group">
              <label for="company_email">Email</label>
              <input type="text" class="form-control" id="company_email" name="company_email" placeholder="Enter email" value="{{ $data->company_email }}">
            </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Socials</h3>
                  </div>
                  <!-- ./card-header -->
                  <div class="card-body p-0">
                    <table class="table table-hover">
                      <tbody>
                        <!-- <tr>
                          <td class="border-0">Facebook</td>
                        </tr> -->
                        @foreach($socialsData as $socItem)
                        <tr data-widget="expandable-table" aria-expanded="false">
                          <td>
                            <i class="fas fa-caret-right fa-fw"></i>
                            {{$socItem->name}}
                          </td>
                        </tr>
                        <tr class="expandable-body d-none">
                          <td>
                            <div class="p-5" style="display: none;">
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" name="soc_{{ $socItem->id }}_active" type="checkbox" @if($socItem->active) checked @endif>
                                  <label class="form-check-label">Active</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="soc_name">Name</label>
                                <input type="text" class="form-control" id="soc_name" name="soc_{{ $socItem->id }}_name" placeholder="Enter address" value="{{ $socItem->name }}" readonly>
                              </div>
                              
                              <div class="form-group">
                                <label for="soc_link">Link</label>
                                <input type="text" class="form-control" id="soc_link" name="soc_{{ $socItem->id }}_link" placeholder="Enter address" value="{{ $socItem->link }}">
                              </div>

                              <div class="input-group">
                              
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="soc_icon" name="soc_{{ $socItem->id }}_icon">
                                  <label class="custom-file-label" for="soc_icon">Choose icon</label>
                                </div>
                                <div class="icon col-12">
                                  <img class="preview" height="50px" src="{{ asset("uploads/{$socItem->icon}") }}" alt="">
                                </div>
                              </div>

                            </div>
                          </td>
                        </tr>
                        @endforeach

                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
            
            let img = input.closest(".input-group").querySelector('img.preview');
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