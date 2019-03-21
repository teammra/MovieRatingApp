<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>

<?php
	
?>
    <div class="jumbotron">
        <h2 id="header">Movie Rating App</h2>
    </div>
    <div class="container">
        <div class="buttons">
            <button class="btn btn-dark btn1">
                <a href="postamovie.php">Post A Movie</a>
            </button>
            <button class="btn btn-dark btn2">
                <a href="#">View All Posts</a>
            </button>
        </div>
        <div class="info">
            <h3>My Movies</h3>
            <div class="movies">
                <div class="movie">
                    <img class="float-left" src="images/avengers.jpg">
                    <h4 class="float-right">Avengers Infinity War</h4>
                    <p class="float-right" id="director">Director: Russo Brothers</p>
                    <p class="float-right" id="description">Description: The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe</p>
                </div>
                <div class="movie">
                    <img class="float-left" src="images/ironman.jpg">
                    <h4 class="float-right">Iron Man</h4>
                    <p class="float-right" id="director">Director: Jon Favreau</p>
                    <p class="float-right" id="description">Description: The film follows Tony Stark (Robert Downey Jr.), an industrialist and master engineer who builds a powered exoskeleton after a life-threatening incident, and becomes the technologically advanced superhero Iron Man.</p>
                </div>
                <div class="movie">
                    <img class="float-left" src="images/guardians.jpg">
                    <h4 class="float-right">Guardians Of The Galaxy</h4>
                    <p class="float-right" id="director">Director: James Gunn</p>
                    <p class="float-right" id="description">Description: To help fight Ronan and his team and save the galaxy from his power, Quill creates a team of space heroes known as the "Guardians of the Galaxy" to save the galaxy.</p>
                </div>
                <div class="movie">
                    <img class="float-left" src="images/thor.jpg">
                    <h4 class="float-right">Thor Ragnarok</h4>
                    <p class="float-right" id="director">Director: Taika Waititi</p>
                    <p class="float-right" id="description">Description: Thor is imprisoned on the other side of the universe and finds himself in a race against time to get back to Asgard to stop Ragnarok, the destruction of his home-world and the end of Asgardian civilization, at the hands of an all-powerful new threat, the ruthless Hela.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>