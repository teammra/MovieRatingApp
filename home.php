<html>
<head>
    <style>
        body {
            margin: 10px;
        }

        a {
            text-decoration: none;
        }

        .links {
            width: 308px;
            margin: 0 auto;
        }

        .post {
            display: inline-block;
            text-align: center;
            background: grey;
            height: 30px;
            padding: 30px;
        }

        .view {
            display: inline-block;
            text-align: center;
            background: grey;
            height: 30px;
            padding: 30px;
        }

        .mypost {
            margin: 10px;
        }

        .mypost a {
            display: block;
            text-align: center;
        }

        .postlist {
            margin: 0 auto;
            border: 2px solid black;
            height: 100px;
            width: 300px;
        }
    </style>
    <title>Home</title>
</head>
<body>

<?php
	print "<h2>Home Page</h2><br />";
?>
    <div class="links">
        <div class="post">
            <a href="#a">Post A Movie</a>
        </div>
        <div class="view">
            <a href="#a">View All Posts</a>
        </div>
    </div>
    <div class="mypost">
        <a href="#a">My Posts</a>
        <div class="postlist">
        </div>
    </div>
</body>
</html>