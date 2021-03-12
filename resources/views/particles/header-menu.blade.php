@foreach($mainMenu as $menuItem)
  @if($menuItem->children->count())
    <li>
      <a href="{{ url($menuItem->slug) }}">{{$menuItem->title}}</a>
      <ul class="submenu">
          @include('particles.header-menu', [
            'mainMenu' => $menuItem->children
          ])
      </ul>
    </li>
  @else
    <li>
      <a href="{{ url($menuItem->slug) }}">{{$menuItem->title}}</a>
    </li>
  @endif
@endforeach