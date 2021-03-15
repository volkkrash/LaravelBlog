@extends('admin.layouts.index')

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit "{{ $page->title }}" page</h3>
    
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
  <form method="post" action="{{ route('pages.update', ['page' => $page->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') ?? $page->title }}">
      </div>
      <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug') ?? $page->slug }}">
      </div>
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
                          <input type="text" class="form-control" id="s_1_title" name="sectionOne[title]" placeholder="Enter title" value="{{ old('sectionOne.title') ?? $page->pageBlockOne->title }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s_1_icon" name="sectionOne[picture]">
                            <label class="custom-file-label" for="s_1_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="{{ asset($page->pageBlockOne->picture) }}" alt="" height="50px">
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
                          <input type="text" class="form-control" id="s_2_title" name="sectionTwo[title]" placeholder="Enter title" value="{{ old('sectionTwo.title') ?? $page->pageBlockTwo->title }}">
                        </div>
                        <div class="form-group">
                          <label for="s_3_title">Description</label>
                          <input type="text" class="form-control" id="s_3_title" name="sectionTwo[description]" placeholder="Enter description" value="{{ old('sectionTwo.description') ?? $page->pageBlockTwo->description }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="sectionTwo[picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="{{ asset($page->pageBlockTwo->picture) }}" alt="" height="50px">
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


                        @foreach($page->pageBlockThreeCards as $keyItem => $cardItem)
                        
                        <h4 class="text-center">Card {{ ($keyItem + 1) }}:</h4>
                        <input type="hidden" name="cards[{{ $keyItem }}][id]" value="{{ $cardItem->id }}">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cards[{{ $keyItem }}][active]" id="active-{{ $keyItem }}" @if($cardItem->active) checked="" @endif>
                            <label for="active-{{ $keyItem }}" class="custom-control-label">active</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Title</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[{{ $keyItem }}][title]" placeholder="Enter address" value="{{ old('cards.$keyItem.title') ?? $cardItem->title }}">
                        </div>
                        <div class="form-group">
                          <label for="soc_name">Subtitle</label>
                          <input type="text" class="form-control" id="soc_name" name="cards[{{ $keyItem }}][subtitle]" placeholder="Enter address" value="{{ old('cards.$keyItem.subtitle') ?? $cardItem->title }}">
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="soc_icon" name="cards[{{ $keyItem }}][picture]">
                            <label class="custom-file-label" for="soc_icon">Choose icon</label>
                          </div>
                          <div class="icon col-12">
                            <img class="preview" src="{{ asset($cardItem->picture) }}" alt="" height="50px">
                          </div>
                        </div>
                        @endforeach

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