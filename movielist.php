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
		
		.body {
			background: 
			linear-gradient(
			rgba(205, 92, 92, 0.45), 
			rgba(205, 92, 92, 0.45)
			),
			url(images/movie-collage.jpg);
			background-size: cover;
			margin-top: -35px;
			padding-top: 35px;
			font-family: 'Roboto', sans-serif;
		}

		.jumbotron {
			text-align: center;
			background-color: #B22222;
		}

		.container {
			text-align: center;
		}

		h2 {
			color: white;
			font-family: 'Roboto', sans-serif;
			font-size: 50px;
			font-weight: bold;
		}

		h3 {
			color: white;
			font-size: 40px;
			font-weight: bold;
			text-shadow: 5px 5px 5px black;
			background-color: #B22222;
			width: 70%;
			margin: auto;
			padding: 10px;
			border-radius: 15px 15px 0 0;
			box-shadow: 10px 20px 10px black;
		}

		a {
			color: white;
		}

		a:hover {
			text-decoration: none;
			color: white;
		}

		.btn-dark:hover {
			background-color: #bbbbbb;
		}

		.buttons {
			width: 50%;
			margin: auto;
		}

		.btn {
			background-color: #B22222;
			border-color: white;
		}

		btn1 {
			float: left;
		}

		btn2 {
			float: right;
		}

		.info {
			margin-top: 50px;
			clear: both;
		}

		.movies {
			border: 1px solid #000000;
			width: 70%;
			height: 600px;
			margin: auto;
			background-color: white;
			overflow: scroll;
			box-shadow: 10px 20px 10px black;
			border-top-left-radius: 0;
		}

		.actors {
			margin: 20px 0;
		}

		.actors li {
			list-style-type: none;
		}

		.actors a {
			color: black;
		}

		.user-reviews {
			height: 200px;
			overflow: scroll;
			width: 40%;
			margin: auto auto 20px auto;
		}

		#user-review {
			border-top: 1px solid black;
			text-align: left;
		}

		#comment-btn {
			margin: 20px 0;
		}

		.form {
			width: 30%;
			margin: auto;
		}

		.movie {
			clear: both;
			border-bottom: 1px solid #000000;
		}

		.movie h4, .movie p {
			text-align: right;
			margin: 10px;
		}

		.movie img {
			width: 200px;
			height: 300px;
			float: left;
			margin: 10px;
		}

		#director {
			clear: right;
		}

		#description {
			width: 55%;
			margin-bottom: 10px;
		}

		#footer {
			height: 200px;
			margin-top: 50px;
			margin-bottom: 0;
		}
	</style>
	<title>Movie List</title>
</head>
<body style="background: black;">

<?php
?>
	<div class="jumbotron">
		<h2 id="header">Movie Rating App</h2>
	</div>
	<div class="body">
	<div class="container">
		<h3>Movie Lists</h3>
		<div class="movies">
			<div class="movie">
				<img class="float-left" src="images/grudge.jpg">
				<h4 class="float-right">The Grudge</h4>
				<p class="float-right" id="director">Director: Takashi Shimizu</p>
				<p class="float-right" id="description">Genre: Mystery/Thriller</p>
				<p class="float-right" id="description">Rate: 81% liked this film</p>
				<p class="float-right" id="description">Plot: Matthew Williams (William Mapother), his wife, Jennifer (Clea DuVall), and mother, Emma (Grace Zabriskie), are Americans making a new life in Tokyo.</p>
			</div>
			<div class="movie">
				<img class="float-left" src="images/para.jpg">
				<h4 class="float-right">Paranormal Activity</h4>
				<p class="float-right" id="director">Director: Oren Peli</p>
				<p class="float-right" id="description">Genre: Thriller/Indie</p>
				<p class="float-right" id="description">Rate: 85% liked this film</p>
				<p class="float-right" id="description">Plot: Soon after moving into a suburban tract home, Katie (Katie Featherston) and Micah (Micah Sloat) become increasingly disturbed by what appears to be a supernatural presence.</p>
			</div>
			<div class="movie">
				<img class="float-left" src="images/tazza.jpg">
				<h4 class="float-right">Tazza: The Hidden Card</h4>
				<p class="float-right" id="director">Director: Kang Hyeong-cheol</p>
				<p class="float-right" id="description">Genre: Drama/Crime</p>
				<p class="float-right" id="description">Rate: 95% liked this film</p>
				<p class="float-right" id="description">Plot: After Ham Dae-gil enters the gambling world, he is set up as the fall guy in a crooked deal. To get revenge, he enters a final game which could be fatal to the loser.</p>
			</div>
			<div class="movie">
				<img class="float-left" src="images/out.jpeg">
				<h4 class="float-right">The Outlaws</h4>
				<p class="float-right" id="director">Director: Kang Yoon-Sung</p>
				<p class="float-right" id="description">Genre: Crime/Thriller</p>
				<p class="float-right" id="description">Rate: 93% liked this film</p>
				<p class="float-right" id="description">Plot: Based on real events that occurred in 2007 dubbed the "Heuksapa Incident", the story follows a turf war that grows between a local gang that runs Garibong-dong in Guro District, Seoul.</p>
			</div>
		</div>
	</div>
	<div class="jumbotron" id="footer">
    </div>
	</div>
</body>
</html>
