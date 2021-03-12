@extends('admin.layouts.index')

@section('content')
  
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Main slider</h3>
  </div>
  <div class="">
  @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
  @endif
  @if($errors->any())
      <ul class="">
        @foreach ($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul>
  @endif
  @if($errors->any())
    <ul class="">
      @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="col-12">
      <a class="btn btn-primary" href="{{ route('main-slider.create') }}">Create New</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Title</th>
          <th style="width: 100px">Sort</th>
          <th style="width: 50px">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($sliderItems as $sliderItem)
            <tr>
              <td>{{ $sliderItem->title }}</td>
              <td>{{ $sliderItem->sort }}</td>
              <td><a class="btn btn-primary" href="{{ route('main-slider.edit', ['main_slider' => $sliderItem->id]) }}">Edit</a>
              
              <form method="POST" action="{{ route('main-slider.destroy', ['main_slider' => $sliderItem->id]) }}">
                @csrf
                @method('DELETE')

                <button class="btn btn-primary" type="submit">Del</button>
              </form>
              
              </td>
            </tr>


        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
      <li class="page-item"><a class="page-link" href="#">«</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">»</a></li>
    </ul>
  </div>
</div>
<!-- /.card -->
@endsection