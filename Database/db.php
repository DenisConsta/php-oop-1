<?php

$genres1 = [
  new Genre('Fantasy'),
  new Genre('Action'),
  new Genre('Science Fiction'),
];

$genres2 = [
  new Genre('Comedy'),
  new Genre('Thriller'),
];

$movies = [
  new Movie('Avatar', 162, 'https://pad.mymovies.it/filmclub/2010/10/203/locandinapg1.jpg', $genres1),
  new Movie('Amsterdam', 134, 'https://pad.mymovies.it/filmclub/2020/02/099/locandinapg1.jpg', $genres2),
];

?>