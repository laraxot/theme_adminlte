@php
    $menus=Theme::getXmlMenu();
@endphp
{{--
@if(isset($menus[0]))
	<ul class="sidebar-menu" data-widget="tree">
	<li class="header">dash</li>
    @foreach($menus[0] as $el)
	    <li class="treeview {{ $el->active?'active':'' }}">
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
				<li class="{{ $sub_el->active?'active':'' }}"><a href="{{$sub_el->url}}"><i class="{{ $sub_el->icons }}"></i>{{ $sub_el->nome }}</a></li>
			@endforeach
			</ul>
		</li>
    @endforeach
    </ul>
@endif
--}}
@if(isset($menus[0]))
	<ul class="sidebar-menu" data-widget="tree">
		<li><a href="{{ asset('/admin') }}" title="dashboard">&laquo;&nbsp;Dashboard</a></li>
		<li class="header">{{ Theme::getArea() }}</li>
	@foreach($menus[0] as $el)
		<li class="treeview {{ $el->active?'active':'' }}">
			<a href="#{{$el->id}}" class="vis{{$el->visibility}} ">
				<i class=" fa-fw"></i>{{$el->nome}}
				@if(isset($menus[$el->id])) <i class="fa fa-angle-left pull-right"></i> </a>
					<ul class="treeview-menu">
							@foreach($menus[$el->id] as $sub_el)
								<li class="{{ $sub_el->active?'active':'' }}"><a href="{{$sub_el->url}}">{{$sub_el->nome}}  </a></li>
							@endforeach
					</ul>
				@endif
		</li>
	@endforeach
	</ul>
@endif