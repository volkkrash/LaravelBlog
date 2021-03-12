@foreach($mainMenu as $menuItem)
  @if($menuItem->children->count())
    <li class="has-children">
      <a href="#">{{$menuItem->title}} <i class="icofont-rounded-down" aria-hidden="true"></i></a>
      <ul class="dropdown">
          @include('particles.header-mobile-menu', [
            'mainMenu' => $menuItem->children
          ])
      </ul>
    </li>
  @else
    <li class="has-children">
      <a href="{{ url($menuItem->slug) }}">{{$menuItem->title}}</a>
    </li>
  @endif
@endforeach