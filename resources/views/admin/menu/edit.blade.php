@extends('admin.layouts.index')

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit menu item</h3>
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
  <form method="post" action="{{ route('menu.update', ['menu' => $item->id]) }}">
    @csrf
    @method('PUT')

    <div class="card-body">
      <div class="form-group">
        <label for="title">Title(required)</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $item->title }}">
      </div>
      <div class="form-group">
        <label for="title">Slug(required)</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ $item->slug }}">
      </div>
      <div class="form-group">
        <label for="sort">sort</label>
        <input type="text" class="form-control" id="sort" name="sort" placeholder="Enter sort" value="{{ $item->sort }}">
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="parent_id">
          <option value="">without category</option>
          @foreach($menu as $menuItem)
            @if($menuItem->id !== $item->id)
            <option 
              @if($item->parent_id == $menuItem->id) selected @endif
              value="{{ $menuItem->id }}"
            >
            {{ $menuItem->title }}
            </option>
            @endif
          @endforeach
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