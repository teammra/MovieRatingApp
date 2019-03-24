<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="app.js"></script>
    <title>Post a Movie</title>
</head>
<body>

<?php
	
?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Movie Rating App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movielist.php">Movies</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="postamovie.php">Post <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

	<div class="jumbotron">
		<h2 id="header">Post a Movie</h2>
	</div>
	<div class="body">
		<form class="form">
			<h3 id="label">Upload Picture:</h3><br>
			<input type="file" id="movie-image-input"><br><br>
		<div class="form-group">
			<h3 id="label">Title</h3>
			<input type="text" class="form-control" id="movie-title-input" placeholder="Enter title">
		</div>
		<div class="form-group">
			<h3 id="label">Actors</h3>
			<div id="actor-inputs">
				<input list="actors" class="form-control" id="movie-actors-input" placeholder="Actor" style="margin-bottom: 0px; border-top: 1px solid black">
					<datalist id="actors">
						<option value="Chris Evans">
						<option value="Samuel L. Jackson">
						<option value="Josh Brolin">
						<option value="Robert Downey Junior">
						<option value="Will Smith">
					</datalist>
			</div>
			<button type="button" class="btn btn-dark" onclick="addActorInput()">Add</button>
		</div>
		<div class="form-group">
			<h3 id="label">Description</h3>
			<input type="text" class="form-control" id="movie-description-input" placeholder="Description">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="cancel" class="btn btn-danger"><a href="home.php">Cancel</a></button>
		</form>
	<div class="jumbotron" id="footer">
	</div>
	</div>
</body>
</html>