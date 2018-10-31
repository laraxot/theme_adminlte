<head>
    <meta charset="UTF-8">
    <title> AdminLTE 2 with Laravel - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
     <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{ Theme::add("/theme/bc/bootstrap/dist/css/bootstrap.min.css") }}
  <!-- Font Awesome -->
  {{ Theme::add("/theme/bc/font-awesome/css/font-awesome.min.css") }}
  <!-- Ionicons -->
  {{ Theme::add("/theme/bc/Ionicons/css/ionicons.min.css") }}
  <!-- Theme style -->
  {{ Theme::add("/theme/dist/css/AdminLTE.min.css") }}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{ Theme::add("/theme/dist/css/skins/_all-skins.min.css") }}
  <!-- Morris chart -->
  {{-- Theme::add("/theme/bc/morris.js/morris.css") --}}
  <!-- jvectormap -->
  {{-- Theme::add("/theme/bc/jvectormap/jquery-jvectormap.css") --}}
  <!-- Date Picker -->
  {{-- Theme::add("/theme/bc/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") --}}
  <!-- Daterange picker -->
  {{-- Theme::add("/theme/bc/bootstrap-daterangepicker/daterangepicker.css") --}}
  <!-- bootstrap wysihtml5 - text editor -->
  {{-- Theme::add("/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") --}}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js") }}
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js") }}
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  {!! Theme::showStyles(false) !!}



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
</head>
