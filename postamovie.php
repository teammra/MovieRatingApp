<html>
<head>
	<style>
		ul {
			position: relative;
		}
		#icontext {
			margin: 10px;
		}
		li {
			list-style-type: none;
		}
		a {
			text-decoration: none;
		}
		.btn {
			position: absolute;
			border: 2px solid black;
		}
	</style>
	<title>Post-A-Movie</title>
</head>
<body>

<?php
	print "<h2>Post-A-Movie Page</h2><br />";
?>
	<div class="icon">
		<div id="icontext">Upload Movie Icon</div> 
		<form action="">
			<input type="file" name="pic" accept="image/*">
		</form>
	</div>
	<div class="inputs">
	<form action="">
		<ul>
			<li><label for="txt1">Movie Title: </label><input type="text" id="txt1"></li>
			<li><label for="txt2">Actors: </label><input type="text" id="txt2"></li><button id="add">+add</button>
			<li><label for="txt2">Description: </label><input type="text" style="height: 100px;"></li>
			<li class="btn"><a href="#a">Post</a></li>
		</ul>
	</div>
</body>
</html>