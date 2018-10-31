<head>
	{!! Theme::metatags() !!}
	{{--    
	<meta charset="UTF-8">
	<title>@yield('htmlheader_title', 'Your title here') </title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	--}}
	{{--
	<link href="{{ mix('/css/all.css') }}" rel="stylesheet" type="text/css" />
	--}}
	{{ Theme::add("theme/bc/bootstrap/dist/css/bootstrap.min.css") }}
	{{ Theme::add("theme/bc/font-awesome/css/font-awesome.min.css") }}
	{{ Theme::add("theme/bc/Ionicons/css/ionicons.min.css") }}
	{{ Theme::add("theme/bc/AdminLTE/dist/css/AdminLTE.min.css") }}
	{{ Theme::add("theme/bc/AdminLTE/dist/css/skins/_all-skins.min.css") }}
	{{ Theme::add("theme/css/xot.css") }}
	{!! Theme::showStyles(false)  !!}

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	{{--
	<script>
		//See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
		window.trans = @php
			// copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
			$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
			$trans = [];
			foreach ($lang_files as $f) {
				$filename = pathinfo($f)['filename'];
				$trans[$filename] = trans($filename);
			}
			$trans['adminlte_lang_message'] = trans('adm_theme::message');
			echo json_encode($trans);
		@endphp
	</script>
	--}}
	@stack('styles')
</head>
