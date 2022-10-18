<!-- Main Header -->
<header class="main-header">
	<!-- Logo -->
	<a href="{{ url('#') }}" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>A</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>Admin</b></span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">{{ trans('adm_theme::message.togglenav') }}</span>
		</a>
		
		<ul class="nav navbar-nav">
			<li><a href="{{ url('/admin') }}">Backend</a></li>
			<li><a href="{{ url('/') }}">Frontend</a></li>
		</ul>
		
		<!-- Navbar Right Menu --> 
		<div class="navbar-custom-menu">

			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				{{-- quando gli abbiamo associato un significato li abilitiamo
				@include('adm_theme::layouts.partials.dropdowns.messages')
				@include('adm_theme::layouts.partials.dropdowns.notifications')
				@include('adm_theme::layouts.partials.dropdowns.tasks')
				--}}
				@if (Auth::guest())
					<li><a href="{{ url('/register') }}">{{ trans('adm_theme::message.register') }}</a></li>
					<li><a href="{{ url('/login') }}">{{ trans('adm_theme::message.login') }}</a></li>
				@else
					<!-- User Account Menu -->
					<li class="dropdown user user-menu" id="user_menu" style="max-width: 280px;white-space: nowrap;">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="max-width: 280px;white-space: nowrap;overflow: hidden;overflow-text: ellipsis">
							<!-- The user image in the navbar-->
							
							<img src="{{ Auth::user()->gravatar }}" class="user-image" alt="User Image"/>
							
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="{{ Auth::user()->gravatar }}" class="img-circle" alt="User Image" />
								<p>
									<span data-toggle="tooltip" title="{{ Auth::user()->first_name }}">{{ Auth::user()->first_name }}</span>
									<small>{{ trans('adm_theme::message.login') }} {{ Auth::user()->last_login_at }} </small>
								</p>
							</li>
							{{--
							<!-- Menu Body -->
							<li class="user-body">
								<div class="col-xs-4 text-center">
									<a href="#">{{ trans('adm_theme::message.followers') }}</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">{{ trans('adm_theme::message.sales') }}</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">{{ trans('adm_theme::message.friends') }}</a>
								</div>
							</li>
							--}}
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="{{ url('/admin/profile/'.Auth::id()) }}" class="btn btn-default btn-flat">{{ trans('adm_theme::message.profile') }}</a>
								</div>
								<div class="pull-right">
									<a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
									   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										{{ trans('adm_theme::message.signout') }}
									</a>

									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
										<input type="submit" value="logout" style="display: none;">
									</form>

								</div>
							</li>
						</ul>
					</li>
				@endif

				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>
