@extends('admin.layouts.index')

@section('content')


<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Create new menu item</h3>
    
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
  <form method="post" action="{{ route('menu.store') }}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title(required)</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="slug">Slug(required)</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug') ?? '' }}">
      </div>
      <div class="form-group">
        <label for="sort">sort</label>
        <input type="text" class="form-control" id="sort" name="sort" placeholder="Enter sort" value="{{ old('sort') ?? 500 }}">
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="parent_id">
          <option value="">without category</option>
          @include('admin.menu._categories')
        </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

@endsection