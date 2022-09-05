@extends('adm_theme::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    <body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adm_theme::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg"> {{ trans('adm_theme::message.siginsession') }} </p>
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <login-input-field
                            name="{{ config('auth.providers.users.field','email') }}"
                            domain="{{ config('auth.defaults.domain','') }}"
                    ></login-input-field>
                    {{--<div class="form-group has-feedback">--}}
                    {{--<input type="email" class="form-control" placeholder="{{ trans('adm_theme::message.email') }}" name="email"/>--}}
                    {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
                    {{--</div>--}}
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adm_theme::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input style="display:none;" type="checkbox" name="remember"> {{ trans('adm_theme::message.remember') }}
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adm_theme::message.buttonsign') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                @include('adm_theme::auth.partials.social_login')

                <a href="{{ url('/password/reset') }}">{{ trans('adm_theme::message.forgotpassword') }}</a><br>
                <a href="{{ url('/register') }}" class="text-center">{{ trans('adm_theme::message.registermember') }}</a>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->
    </div>
    @include('adm_theme::layouts.partials.scripts_auth')

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    </body>

@endsection