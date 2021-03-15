@extends('admin.layouts.index')

@section('content')
  
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Pages list</h3>
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
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="col-12">
      <a class="btn btn-primary" href="{{ route('pages.create') }}">Create New</a>
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
        @foreach($pages as $pageItem)
          <tr>
            <td>{{ $pageItem->title }}</td>
            <td>{{ $pageItem->sort }}</td>
            <td><a class="btn btn-primary" href="{{ route('pages.edit', ['page' => $pageItem->id]) }}">Edit</a>
            
            <form method="POST" action="{{ route('pages.destroy', ['page' => $pageItem->id]) }}">
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
    {{ $pages->links() }}
  </div>
</div>
<!-- /.card -->
@endsection