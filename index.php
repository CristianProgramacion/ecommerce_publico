<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		body{
			display:flex;
			min-height: 100vh;
			flex-direction:column;
			background-image: url("img/fondo.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>

<body class="bg-light" >
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<a href="#" class="navbar-brand mx-auto text-white">Ecommerce</a>
	</nav>

	<div class="container mx-auto" style="margin-top: 15%; width: 40rem;">
		<div class="well">

			<h1 class="text-white">Inicio de sesion</h1>
			<div class="form-group">
					<button id="btn-Google" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i> Google</button>
			</div>
			<div class="form-group">
				<button id="btn-Facebook" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Facebook</button>
			</div>
			<div class="form-group">
				<button id="btn-Twitter" class="btn btn-info btn-lg btn-block"><i class="fa fa-twitter"></i> Twitter</button>
			</div>
		</div>
	</div>

<script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
<script src="js/app.js"></script>

</body>
</html>