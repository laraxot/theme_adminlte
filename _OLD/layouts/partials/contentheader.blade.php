<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('page_heading', 'Page Header here')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adm_theme::message.level') }}</a></li>
        <li class="active">{{ trans('adm_theme::message.here') }}</li>
    </ol>
</section>