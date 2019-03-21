<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Post a Movie</title>
</head>
<body>

<?php
	
?>
	<div class="jumbotron">
		<h2 id="header">Post a Movie</h2>
	</div>
	<form class="form">
		<label for="file-image">Upload Picture:</label><br>
		<input type="file" id="movie-image-input"><br><br>
	<div class="form-group">
		<label for="movie-title">Title</label>
		<input type="text" class="form-control" id="movie-title-input" placeholder="Enter title">
	</div>
	<div class="form-group">
		<label for="actors">Actors</label>
		<input type="text" class="form-control" id="movie-actors-input" placeholder="Actors">
		<button class="btn btn-dark">Add</button>
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" id="movie-description-input" placeholder="Description">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<button type="cancel" class="btn btn-danger"><a href="home.php">Cancel</a></button>
	</form>
</body>
</html>