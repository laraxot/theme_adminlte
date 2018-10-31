<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
{{--
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
--}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<!-- jQuery 3 -->
{{ Theme::add("/theme/bc/jquery/dist/jquery.min.js",1) }}
<!-- jQuery UI 1.11.4 -->
{{-- Theme::add("/theme/bc/jquery-ui/jquery-ui.min.js",2) --}}

<!-- Bootstrap 3.3.7 -->
{{ Theme::add("/theme/bc/bootstrap/dist/js/bootstrap.min.js",3) }}
<!-- Morris.js charts -->
{{-- Theme::add("/theme/bc/raphael/raphael.min.js") --}}
{{-- Theme::add("/theme/bc/morris.js/morris.min.js") --}}
<!-- Sparkline -->
{{-- Theme::add("/theme/bc/jquery-sparkline/dist/jquery.sparkline.min.js") --}}
<!-- jvectormap -->
{{-- Theme::add("/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") --}}
{{-- Theme::add("/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") --}}
<!-- jQuery Knob Chart -->
{{-- Theme::add("/theme/bc/jquery-knob/dist/jquery.knob.min.js") --}}
<!-- daterangepicker -->
{{-- Theme::add("/theme/bc/moment/min/moment.min.js") --}}
{{-- Theme::add("/theme/bc/bootstrap-daterangepicker/daterangepicker.js") --}}
<!-- datepicker -->
{{-- Theme::add("/theme/bc/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") --}}
<!-- Bootstrap WYSIHTML5 -->
{{-- Theme::add("/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") --}}
<!-- Slimscroll -->
{{ Theme::add("/theme/bc/jquery-slimscroll/jquery.slimscroll.min.js") }}
<!-- FastClick -->
{{ Theme::add("/theme/bc/fastclick/lib/fastclick.js") }}
<!-- AdminLTE App -->
{{ Theme::add("/theme/dist/js/adminlte.min.js") }}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- Theme::add("/theme/dist/js/pages/dashboard.js") --}}
<!-- AdminLTE for demo purposes -->
{{ Theme::add("/theme/dist/js/demo.js") }}

{!! Theme::showScripts(false) !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
@stack('scripts')      
