<!DOCTYPE html>
<html lang="en">
<head>
	<title> @lang('Account Login') </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('acc/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('acc/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('acc/css/main.css')}}">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">

				@include('includes.errors_and_messages')

				<form class="login100-form validate-form" action="{{route('login')}}" method="post">

					@csrf

					<span class="login100-form-title p-b-43">
						@lang('Account Login')
					</span>

					<div class="wrap-input100 rs1 validate-input" data-validate = "@lang('Username is required')">
						<input class="input100" type="text" name="username">
						<span class="label-input100">@lang('Username')</span>
					</div>


					<div class="wrap-input100 rs2 validate-input" data-validate="@lang('Password is required')">
						<input class="input100" type="password" name="password">
						<span class="label-input100">@lang('Password')</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							@lang('Sign in')
						</button>
					</div>

					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							@lang('Forgot password?')
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>





	<script src="{{asset('acc/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('acc/vendor/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('acc/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('acc/js/main.js')}}"></script>

</body>
</html>
