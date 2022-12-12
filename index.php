<?php

//? Models
require_once __DIR__ . './Models/Genre.php';
require_once __DIR__ . './Models/Movie.php';

//? DB
require_once __DIR__ . './Database/db.php';

// var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css'
    integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=='
    crossorigin='anonymous' />
  <title>Document</title>
</head>

<body>

  <header></header>
  <main class="py-5">

    <div class="container">
      <div class="row">
        <?php foreach ($movies as $movie): ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $movie->title ?>
              </h5>
              <h6 class="">
                <?php echo $movie->duration ?>m
              </h6>

              <ul>
                <?php foreach ($movie->genres as $genre): ?>
                <li><?php echo $genre->name ?></li>
                <?php endforeach; ?>

              </ul>

            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </main>

</body>

</html>