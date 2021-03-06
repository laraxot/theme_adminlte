@extends('adm_theme::layouts.errors')

@section('htmlheader_title')
    {{ trans('adm_theme::message.servererror') }}
@endsection

@section('main-content')

    <div class="error-page">
        <h2 class="headline text-red">500</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! {{ trans('adm_theme::message.somethingwrong') }}</h3>
            <p>
                {{ trans('adm_theme::message.wewillwork') }}
                {{ trans('adm_theme::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adm_theme::message.returndashboard') }}</a> {{ trans('adm_theme::message.usingsearch') }}
            </p>
            <form class='search-form'>
                <div class='input-group'>
                    <input type="text" name="search" class='form-control' placeholder="{{ trans('adm_theme::message.search') }}"/>
                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i></button>
                    </div>
                </div><!-- /.input-group -->
            </form>
        </div>
    </div><!-- /.error-page -->
@endsection