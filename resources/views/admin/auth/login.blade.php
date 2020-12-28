<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{__('Login')}}</title>
	<!--bootstrap-->
	<link rel="stylesheet" href="{{asset('templates/login/bootstrap.min.css')}}" />
	<!--font family-->
	<link href="{{asset('templates/login/ins2wgm.css')}}" rel="stylesheet">
	<!--custom style-->
	<link rel="stylesheet" href="{{asset('templates/login/style.css')}}">
</head>
<body>
	<div class="container">
		<div class="box">
			<input type="checkbox" id="toggle" class="box__toggle" hidden>
			<img src="{{asset('templates/logo/unsplash-bike.jpeg')}}" alt="Picture by Autumn Studio" class="box__image">
			<form class="form form--register" action="">
				<img src="{{asset('templates/logo/3062634.svg')}}" class="box__image_logo"/>
				<div class="form-group">
					<label class="form__label" for="email">{{__('Email')}}</label>
					<input type="email" name="email_forgot" id="email" placeholder="Email" class="form-control" />
				</div>
				<button type="button" class="btn form__button">{{__('Send')}}</button>
				<p class="form__text">{{__('Already')}}? <label for="toggle" onClick="onFocusForgot();" class="form__link">{{__('Here')}}!</label>
			</form>
			<form class="form form--login" action="" method="post">
				@csrf
				<img src="{{asset('templates/logo/1150626.svg')}}" class="box__image_logo"/>
				<div class="form-group">
					<label class="form__label" for="user">{{__('Email')}}</label>
					<input type="text" name="email" id="emailLogin" placeholder="Email" class="form-control" />
				</div>
				<div class="form-group">
					<label class="form__label" for="password">{{__('Password')}}</label>
					<input type="password" name="password" id="password" placeholder="Password" class="form-control" />
				</div>
				<button type="submit" class="btn form__button">{{__('Login')}}</button>
				<p class="form__text">{{__('Forgot password')}}? <label for="toggle" onClick="onFocusLogin();" class="form__link">{{__('Here')}}!</label>
			</form>
		</div>
	</div>
	<script>
		document.getElementById("emailLogin").focus()
		function onFocusForgot() {
			document.getElementById("emailLogin").focus()
		}
		function onFocusLogin() {
			document.getElementById("email").focus()
		}
	</script>
</body>
</html>