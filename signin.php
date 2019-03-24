<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background: #282828;
		}
		
		.color {
			background: #A9A9A9;
		}

		ul {
			margin-bottom: 50px;
		}

		ul a {
			color: white;
			font-size: 29px;
		}

		ul a:hover {
			color:black;
			text-decoration: none;
		}

		.label {
			font-size: 19px;
			color: white;
			font-weight: normal;
		}

		.form-control {
			background: transparent;
			border: 0px;
			border-bottom: 1px solid orange;
			font-size: 15px;
			margin-bottom: 30px;
			padding: 20px;
		}

		.btn-info {
			background: #505050;
			border: 1px solid #505050;
			width: 360px;
			font-size: 20px;
		}

		.btn-info:hover {
			background: orange;
			border: 1px solid orange;
		}

		p {
			font-size: 13px;
			margin-top: 25px;
			color: white;
		}

		img {
			width: 365px;
			height: 477px;
		}

		span {
			font-size:29px;
			color: white;
		}
	</style>
	<title>Sign Up</title>
</head>
<body>
<?php
?>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row color" style="margin-top: 120px; box-shadow: -1px 1px 50px 10px black;">
					<div class="col-md-6">
						<ul>
							<a href="login.php">Log In </a>
							<span>/</span> 
							<a href="signin.php" style="border-bottom: 2px solid orange; padding: 10px;"> Sign Up</a> 
						</ul>
						<label class="label control-label">Username</label>
						<input type="text" class="form-control" name="user" placeholder="Username">
						<label class="label control-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
						<a href="#"><div class="btn btn-info">Sign Up</div></a>
						<p class="text-center">Already have an account ?</p>
					</div>
					<div class="col-md-6">
						<img src="images/movie.jpeg">
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
