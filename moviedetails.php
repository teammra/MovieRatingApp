<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Movie Details</title>
</head>
<body>
<?php
?>
	<div class="jumbotron">
		<h2 id="header">Movie Title</h2>
	</div>
	<div class="container">
		<div class="movie-image">
			<img src="" width="200px" height="200px">
		</div>
		<div class="info">
			<div class="actors">
				<h3>Actors</h3>
				<li><a id="actor" href="#">Seth Rogen</a></li>
				<li><a id="actor" href="#">Jonah Hill</a></li>
			</div>
			<div class="description">
				<h3>Description</h3>
				<p>This is the description of the movie.</p>
			</div>

			<div class="user-reviews">
				<h3>Reviews</h3>
				<div id="user-review">
					User 1: 10/10
				</div>
				<div id="user-review">
					User 2: 10/10
				</div>
				<div id="user-review">
					User 3: 10/10
				</div>
				<div id="user-review">
					User 4: 10/10
				</div>
				<div id="user-review">
					User 5: 10/10
				</div>
				<button class="btn btn-dark" id="comment-btn">
				<a href="#" id="anchor">Add Review</a>
				</button>
			</div>
		</div>
	</div>
</body>
</html>