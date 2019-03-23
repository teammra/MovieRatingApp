<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Post a Movie</title>
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
                <li class="active"><a href="postamovie.php">Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
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
			<input type="text" class="form-control" id="movie-actors-input" placeholder="Actors">
			<button class="btn btn-dark">Add</button>
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