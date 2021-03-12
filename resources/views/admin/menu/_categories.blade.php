@foreach($menuItems as $menuItem)

  <option value="{{ $menuItem->id }}">
  {{ $delimiter ?? ''}}{{ $menuItem->title }}
  </option>
  @isset($menuItem->children)
    @include('admin.menu._categories', [
      'menuItems' => $menuItem->children,
      'delimiter' => '*'.$delimiter
    ])
  @endisset

@endforeach