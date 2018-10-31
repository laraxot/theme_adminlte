<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('page_heading', 'Dashboard')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">{{ Theme::getArea() }}</li>
    </ol>
</section>