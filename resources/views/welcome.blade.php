
<h1>Menubar for html design</h1>
@if(!empty($menus)->count()>0)
	@foreach($menus as $menu)


	{{$menu->menu_link }}
	  @if( $menu->parent_id == 0 )
	     <li {{ $menu->menu_link ? '' : "class=dropdown" }}>
	     <a href="{{ $menu->children->isEmpty() ? $menu->menu_link : "#" }}"{{ $menu->children->isEmpty() ? '' : "class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false" }}>
	        {{ $menu->menu_name }}
	     </a>
	  @endif

	  </li> 



@endforeach

@else
  	<h1>Menubar for html design</h1>
  @endif