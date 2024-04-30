<!DOCTYPE html>
<html lang="en">
<head>
	<title>PageTurner Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('logres/images/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('logres/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
					@csrf

					<span class="login100-form-title p-b-43">
						WELCOME to PageTurner!
					</span>
					
					<!-- Name  -->

                    <div class="adjform">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full adjisi" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Type your Name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->

					<div class="adjform">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full adjisi" placeholder="Type your Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
					
					<!-- Password -->
                    <div class="adjform">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full adjisi"
                                        type="password"
                                        name="password"
                                        placeholder="Type your Password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>



					 <!-- Confirm Password -->

                     <div class="adjform">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full adjisi"
                                        type="password"
                                        placeholder="Retype your Password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="adjform flex items-center justify-end mt-4">
                

						<div class="container-login100-form-btn">
                        <x-primary-button class="login100-form-btn">
                            {{ __('Register') }}
                        </x-primary-button>

						</div>
						<div class="text-center"
                            <span class="ms-2 text-sm text-gray-600">{{ __('Already have an account?') }}</span>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rgstnw" href="{{ route('login') }}">
                                {{ __('Log In!') }}
                            </a>
						</div>

                    </div>
					
				
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('logres/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('logres/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('logres/js/main.js')}}"></script>

</body>
</html>
