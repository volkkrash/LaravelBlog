@foreach($mainMenu as $menuItem)
  <li class="mb-3"><a href="{{ url($menuItem->slug) }}">{{ $menuItem->title }}</a></li>
@endforeach