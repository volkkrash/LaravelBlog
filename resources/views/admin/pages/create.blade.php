@extends('admin.layouts.index')

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Create new page</h3>
    
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
  <form method="post" action="{{ route('pages.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug') ?? '' }}">
      </div>
      <?/*?>
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
      <?*/?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sections</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body p-0">
              <table class="table table-hover">
                <tbody>
                  <!-- <tr>
                    <td class="border-0">Facebook</td>
                  </tr> -->
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>
                      <i class="fas fa-caret-right fa-fw"></i>
                      Section one
                    </td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td>
                      <div class="p-5" style="display: none;">
                        <div class="form-group">
                          <label for="s_1_title">Title</label>
                          <input type="text" class="form-control" id="s_1_title" name="sectionOne[title]" placeholder="Enter title" value="{{ old('sectionOne.title') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s_1_icon" name="sectionOne[picture]">
                            <label class="custom-file-label" for="s_1_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>
                      <i class="fas fa-caret-right fa-fw"></i>
                      Section two
                    </td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td>
                      <div class="p-5" style="display: none;">
                        <div class="form-group">
                          <label for="s_2_title">Title</label>
                          <input type="text" class="form-control" id="s_2_title" name="sectionTwo[title]" placeholder="Enter title" value="{{ old('sectionTwo.title') ?? '' }}">
                        </div>
                        <div class="form-group">
                          <label for="s_3_title">Description</label>
                          <input type="text" class="form-control" id="s_3_title" name="sectionTwo[description]" placeholder="Enter description" value="{{ old('sectionTwo.description') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="sectionTwo[picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>
                      <i class="fas fa-caret-right fa-fw"></i>
                      Section three
                    </td>
                  </tr>
                  <tr class="expandable-body d-none">
                    <td>
                      <div class="p-5" style="display: none;">

                        <h4 class="text-center">Card 1:</h4>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cards[0][active]" id="active-0" checked="">
                            <label for="active-0" class="custom-control-label">active</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Title</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[0][title]" placeholder="Enter address" value="{{ old('cards.0.title') ?? '' }}">
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Subtitle</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[0][subtitle]" placeholder="Enter address" value="{{ old('cards.0.subtitle') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="cards[0][picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>

                        <h4 class="text-center">Card 2:</h4>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cards[1][active]" id="active-1" checked="">
                            <label for="active-1" class="custom-control-label">active</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Title</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[1][title]" placeholder="Enter address" value="{{ old('cards.1.title') ?? '' }}">
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Subtitle</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[1][subtitle]" placeholder="Enter address" value="{{ old('cards.1.subtitle') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="cards[1][picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>

                        <h4 class="text-center">Card 3:</h4>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cards[2][active]" id="active-2" checked="">
                            <label for="active-2" class="custom-control-label">active</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Title</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[2][title]" placeholder="Enter address" value="{{ old('cards.2.title') ?? '' }}">
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Subtitle</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[2][subtitle]" placeholder="Enter address" value="{{ old('cards.2.title') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="cards[2][picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>

                        <h4 class="text-center">Card 4:</h4>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cards[3][active]" id="active-3" checked="">
                            <label for="active-3" class="custom-control-label">active</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Title</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[3][title]" placeholder="Enter address" value="{{ old('cards.3.title') ?? '' }}">
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Subtitle</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[3][subtitle]" placeholder="Enter address" value="{{ old('cards.3.title') ?? '' }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="cards[3][picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="" alt="" height="50px">
                          </div>
                        </div>

                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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