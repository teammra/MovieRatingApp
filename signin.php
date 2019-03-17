<html>
<head>
	<style>
		ul {
			position: relative;
			width: 500px;
		}

		.btn {
			position: absolute;
			right: 120;
			top: 0;
		}

		.btn2 {
			position: absolute;
			right: 0;
			top: 0;
		}

		.login li {
			padding: 0 0 9px;
		}

		.login ul li label {
			display: inline-block;
			width: 100px;
			font-size: 18px;
			font-weight: bold;
		}
		
		.login ul li input {
			width: 150px;
			height: 28px;
		}

		.login ul li a {
			display: block;
			width: 111px;
			height: 70px;
			background: grey;
			font-size: 17px;
			color: #fff;
			text-align: center;
			line-height: 70px;
			font-weight: bold;
			text-decoration: none;
			border: 1px solid black;
		}

		li {
			list-style-type: none;
		}
	</style>
	<title>Login</title>
</head>
<body>
<?php
	print "<h2>Signin Page</h2><br />";
?>
	<div class="login">
		<form action="" method="post">
			<fieldset>
				<legend>Movie Rating App</legend>
				<ul>
					<li><label for="txt1">Username: </label><input type="text" id="txt1"></li>
					<li><label for="txt2">Password: </label><input type="password" id="txt2"></li>
					<li class="btn"><a href="#a">Login</a></li>
					<li class="btn2"><a href="#a">SignUp</a></li>
				</ul>
			</fieldset>
		</form>
	</div>
</body>
</html>
