@php
    $menus=Theme::getXmlMenu();
@endphp

@if(isset($menus[0]))
	<ul class="sidebar-menu" data-widget="tree">
	{{--  <li class="header">MAIN NAVIGATION</li> --}}
    @foreach($menus[0] as $el)
	    <li class="treeview @if($el->active) active @endif">
			<a href="#">
			<i class="{{ $el->icons }}"></i> <span>{{$el->nome}}</span>
			@if(isset($menus[$el->id]))
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			@endif				
			</a>
			<ul class="treeview-menu">
			@foreach($menus[$el->id] as $sub_el)
				<li class="@if($sub_el->active) active @endif"><a href="{{$sub_el->url}}"><i class="{{ $sub_el->icons }}"></i>{{ $sub_el->nome }}</a></li>
			@endforeach
			</ul>
		</li>
    @endforeach
    </ul>
@endif