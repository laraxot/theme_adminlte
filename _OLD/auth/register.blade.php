@extends('adm_theme::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div>

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

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adm_theme::message.registermember') }}</p>

                <register-form></register-form>

                @include('adm_theme::auth.partials.social_login')

                <a href="{{ url('/login') }}" class="text-center">{{ trans('adm_theme::message.membership') }}</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adm_theme::layouts.partials.scripts_auth')

    @include('adm_theme::auth.terms')

</body>

@endsection
