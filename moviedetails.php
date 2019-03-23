<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Movie Details</title>
</head>
<body>
<?php
?>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="home.php">Movie Rating App</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="movielist.php">Movies</a></li>
                <li><a href="postamovie.php">Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>
	<div class="jumbotron">
		<h2 id="header">Superbad</h2>
	</div>
	<div class="body">
	<div class="container">
		<div class="movie-image">
			<img src="images/superbad.jpg" width="200px" height="200px">
		</div>
		<div class="info">
			<h3>Actors</h3>
			<div class="actors">
				<li><a id="actor" href="#">Seth Rogen</a></li>
				<li><a id="actor" href="#">Jonah Hill</a></li>
			</div>
			<h3>Description</h3>
			<div class="description">
				<p>This is the description of the movie.</p>
			</div>

			<h3>Reviews</h3>
			<div class="jumbotron scrollbox">
				<div id="user-review">
					moviewater1011: 10/10 this movie was hilarious!
				</div>
				<div id="user-review">
					avengersguy223: 10/10 i watch this every day.
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
				<div id="user-review">
					User 6: 10/10
				</div>
				<div id="user-review">
					User 7: 10/10
				</div>
				<div id="user-review">
					User 8: 10/10
				</div>
				</button>
			</div>
			<button class="btn btn-dark" id="comment-btn">
			<a href="#" id="anchor">Add Review</a>
		</div>
	</div>
	<div class="jumbotron" id="footer">
    </div>
	</div>
</body>
</html>