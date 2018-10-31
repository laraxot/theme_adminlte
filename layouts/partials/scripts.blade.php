<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
{{--
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
--}}
<script>
    var base_url='{{ asset('/') }}';
    var lang='{{ \App::getLocale() }}';
</script>
<!-- jQuery 3 -->
{{ Theme::add('theme/bc/jquery/dist/jquery.min.js',1) }}
{{ Theme::add('theme/bc/bootstrap/dist/js/bootstrap.min.js',2) }}
{{ Theme::add('theme/bc/jquery-slimscroll/jquery.slimscroll.min.js',3) }}
{{ Theme::add('theme/bc/fastclick/lib/fastclick.js',4) }}
{{ Theme::add('theme/bc/AdminLTE/dist/js/adminlte.min.js',5) }}
{{ Theme::add('theme/bc/AdminLTE/dist/js/demo.js',6) }}
{{ Theme::add("theme/js/xot.js") }}
{!! Theme::showScripts(false) !!}
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
@stack('scripts')
