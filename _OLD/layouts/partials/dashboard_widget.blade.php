<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
@section('htmlheader')
	@include('adm_theme::layouts.partials.htmlheader')
@show
{{--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
--}}
<body class="skin-blue sidebar-mini">
{{--
<div id="app" v-cloak>
--}}
	@yield('body')
{{--
</div>
--}}
@section('scripts')
	@include('adm_theme::layouts.partials.scripts')
@show
</body>
</html>
