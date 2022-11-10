<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('adm_theme::layouts.partials.htmlheader')

<body class="@yield('classes_body')" @yield('body_data')>
    {{-- Body Content --}}
    @yield('body')

    @include('adm_theme::layouts.partials.scripts')
</body>
</html>