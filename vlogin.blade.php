<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="{{ asset ('css/vlogin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="konten">
		<h1 class="judul">LOGIN</h1>
			<form>
				<div class="login">
					<input type="username" name="username" placeholder="username" class="username">
					<br>
					<input type="password" name="password" placeholder="password" class="password">
				</div>
				<a href="home"><button type="submit" class="btn btn-primary" id="tombol">LOGIN</button > </a>
				<br>
				<a href="https://facebook.com" name="facebook" class="facebook">Login With Facebook</a>
				<br>
				<a href="pohopw.html" class="forgot">Forgot Password?</a>
				<img class="logo" src="{{ asset ('img/logo.png') }}">
			</form>
	</div>

</body>
</html>