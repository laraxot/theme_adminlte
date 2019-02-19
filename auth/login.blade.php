@extends('adm_theme::layouts.auth')
@section('htmlheader_title')
Log in
@endsection
@section('content')
{{Theme::add('theme/bc/icheck/skins/square/blue.css')}}
{{Theme::add('theme/bc/icheck/icheck.js')}}
<body class="hold-transition login-page">
	<div id="app" v-cloak>
		<div class="login-box">
			<div class="login-logo">
				<a href="{{ url('/') }}"><b>Admin</b></a>
			</div>
			<!-- /.login-logo -->
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
				<form role="form" method="POST" action="{{ route('login') }}"  >
                	{{ csrf_field() }}
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
						<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
						<input type="password" class="form-control" placeholder="Password" name="password" required>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
					<div class="row">
						<div class="col-xs-8">
							<div class="checkbox icheck">
								<label>
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				@include('adm_theme::auth.partials.social_login')
				<a href="{{ route('password.request') }}">{{ trans('adm_theme::message.forgotpassword') }}</a><br>
				<a href="{{ url('/register') }}" class="text-center">{{ trans('adm_theme::message.registermember') }}</a>
			</div>
		</div>
	</div>
	@include('adm_theme::layouts.partials.scripts_auth')
</body>
@endsection
@push('scripts')
<script>
	$(function () {
	  $('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' /* optional */
	  });
	});
</script>
@endpush