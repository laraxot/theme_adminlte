@php($logout_url = View::getSection('logout_url') ?? config('adm_theme::adminlte.logout_url', 'logout'))
@php($profile_url = View::getSection('profile_url') ?? config('adm_theme::adminlte.profile_url', 'logout'))

@if (config('adm_theme::adminlte.usermenu_profile_url', false))
    @php($profile_url = Auth::user()->adminlte_profile_url())
@endif

@if (config('adm_theme::adminlte.use_route_url', false))
    @php($profile_url = $profile_url ? route($profile_url) : '')
    @php($logout_url = $logout_url ? route($logout_url) : '')
@else
    @php($profile_url = $profile_url ? url($profile_url) : '')
    @php($logout_url = $logout_url ? url($logout_url) : '')
@endif


@if (isset($_panel))
    <ol class="breadcrumb float-sm-right" style="margin-bottom: 0px;">
        @foreach ($_panel->getBreads() as $bread)
            <li class="breadcrumb-item"><a href="{{ $bread->url('index') }}">{{ $bread->getName() }} </a></li>
            <li class="breadcrumb-item"><a href="{{ $bread->url('show') }}">{{ $bread->title() }}</a></li>
        @endforeach
    </ol>
@endif



<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>

<li class="nav-item dropdown user-menu">

    {{-- User menu toggler --}}
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        @if (config('adm_theme::adminlte.usermenu_image'))
            <img src="{{ Auth::user()->adminlte_image() }}" class="user-image img-circle elevation-2"
                alt="{{ Auth::user()->handle }}">
        @endif
        <span @if (config('adm_theme::adminlte.usermenu_image')) class="d-none d-md-inline" @endif>
            {{ Auth::user()->handle }}
        </span>
    </a>

    {{-- User menu dropdown --}}
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        {{-- User menu header --}}
        @if (!View::hasSection('usermenu_header') && config('adm_theme::adminlte.usermenu_header'))
            <li
                class="user-header {{ config('adm_theme::adminlte.usermenu_header_class', 'bg-primary') }}
                @if (!config('adm_theme::adminlte.usermenu_image')) h-auto @endif">
                @if (config('adm_theme::adminlte.usermenu_image'))
                    <img src="{{ Auth::user()->adminlte_image() }}" class="img-circle elevation-2"
                        alt="{{ Auth::user()->handle }}">
                @endif
                <p class="@if (!config('adm_theme::adminlte.usermenu_image')) mt-0 @endif">
                    {{ Auth::user()->name }}
                    @if (config('adm_theme::adminlte.usermenu_desc'))
                        <small>{{ Auth::user()->adminlte_desc() }}</small>
                    @endif
                </p>
            </li>
        @else
            @yield('usermenu_header')
        @endif

        {{-- Configured user menu links --}}
        @each('adm_theme::layouts.partials.navbar.dropdown-item', $adminlte->menu("navbar-user"), 'item')

        {{-- User menu body --}}
        @hasSection('usermenu_body')
            <li class="user-body">
                @yield('usermenu_body')
            </li>
        @endif

        {{-- User menu footer --}}
        <li class="user-footer">
            @if ($profile_url)
                <a href="{{ $profile_url }}" class="btn btn-default btn-flat">
                    <i class="fa fa-fw fa-user"></i>
                    {{ __('adminlte::menu.profile') }}
                </a>
            @endif
            {{-- <a class="btn btn-default btn-flat float-right @if (!$profile_url) btn-block @endif"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if (config('adm_theme::adminlte.logout_method'))
                    {{ method_field(config('adm_theme::adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form> --}}
            <x-logout>logout</x-logout>
        </li>

    </ul>

</li>