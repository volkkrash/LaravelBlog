@extends('admin.layouts.index')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Menu</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="col-12">
      <a class="btn btn-primary" href="{{ route('menu.create') }}">Create New</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Title</th>
          <th>Slug</th>
          <th style="width: 100px">Sort</th>
          <th>Parent</th>
          <th style="width: 40px">Act</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menu as $menuItem)
            <tr>
              <td>{{ $menuItem->id }}</td>
              <td>{{ $menuItem->title }}</td>
              <td>{{ $menuItem->slug }}</td>
              <td>{{ $menuItem->sort }}</td>
              <td>{{ $menuItem->parent_id ?? "" }}</td>
              <td><a class="btn btn-primary" href="{{ route('menu.edit', ['menu' => $menuItem->id]) }}">Edit</a>
              
              <form method="POST" action="{{ route('menu.destroy', ['menu' => $menuItem->id]) }}">
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