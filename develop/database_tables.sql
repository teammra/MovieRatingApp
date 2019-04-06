DROP DATABASE IF EXISTS movie_rating_application;
CREATE DATABASE IF NOT EXISTS movie_rating_application;
USE movie_rating_application;

create Table users (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username TINYTEXT NOT NULL,
  full_name TINYTEXT NOT NULL,
  password LONGTEXT NOT NULL,
  email TINYTEXT NOT NULL
);

create Table actors (
  actor_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  actor_name VARCHAR(20) NOT NULL
);

create Table favourite_actors (
  actor_id int NOT NULL,
  FOREIGN KEY (actor_id) REFERENCES actors(actor_id),
  user_id int NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  PRIMARY KEY (actor_id, user_id)
);

create Table directors (
  director_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  director_name VARCHAR(20)
);

create Table favourite_directors (
  director_id int NOT NULL,
  FOREIGN KEY (director_id) REFERENCES directors(director_id),
  user_id int NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  PRIMARY KEY (director_id, user_id)
);

create Table movies (
  movie_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  movie_image_file VARCHAR(40) NOT NULL,
  movie_title VARCHAR(20) NOT NULL,
  director_id int NOT NULL,
  genre VARCHAR(20) NOT NULL,
  FOREIGN KEY (director_id) REFERENCES directors(director_id),
  description TEXT
);

create Table actors_movies (
  actor_id int NOT NULL,
  FOREIGN KEY (actor_id) REFERENCES actors(actor_id),
  movie_id int NOT NULL,
  FOREIGN KEY (movie_id) REFERENCES movies(movie_id),
  PRIMARY KEY (actor_id, movie_id)
);

create Table favourite_movies (
  movie_id int NOT NULL,
  FOREIGN KEY (movie_id) REFERENCES movies(movie_id),
  user_id int NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  PRIMARY KEY (movie_id, user_id)
);

create Table ratings (
  rating_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  comment_text VARCHAR(20),
  rating_value int NOT NULL,
  user_id int NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  movie_id int NOT NULL,
  FOREIGN KEY (movie_id) REFERENCES movies(movie_id)
);