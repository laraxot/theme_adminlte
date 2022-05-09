<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adm_theme::adminlte.title_prefix', ''))
        @yield('title', config('adm_theme::adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adm_theme::adminlte.title_postfix', ''))
    </title>

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')

    {{ Theme::add('adm_theme::dist/css/app.css') }}

    {!! Theme::showStyles(false) !!}
    @livewireStyles
    @stack('styles')

    {{-- Custom Stylesheets (post AdminLTE) --}}
    @yield('adminlte_css')
    @yield('custom_css')

    {{-- Favicon --}}
    @if (config('adm_theme::adminlte.use_ico_only'))
        <link rel="shortcut icon" href="{{ Theme::asset('pub_theme::favicons/favicon.ico') }}" />
    @elseif(config('adm_theme::adminlte.use_full_favicon'))
        <link rel="shortcut icon" href="{{ Theme::asset('pub_theme::favicons/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="57x57"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180"
            href="{{ Theme::asset('pub_theme::favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ Theme::asset('pub_theme::favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ Theme::asset('pub_theme::favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96"
            href="{{ Theme::asset('pub_theme::favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"
            href="{{ Theme::asset('pub_theme::favicons/android-icon-192x192.png') }}">
        <link rel="manifest" href="{{ Theme::asset('pub_theme::favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ Theme::asset('favicon/ms-icon-144x144.png') }}">
    @endif

</head>
