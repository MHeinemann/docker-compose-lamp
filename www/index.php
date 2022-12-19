<?php

use Steampixel\Route;

include 'static/vendor/Steampixel/Route.php';

define('BASEPATH', '/');

$uri = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex" />
  <title>Schön wars 29.07.22</title>
  <link href="static/css/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <script src="static/js/jquery-3.6.0.min.js"></script>
</head>

<body>
  <header id="nav-wrapper">
    <?php
    include('templates/navigation/nav_basic.php');
    ?>
  </header>

    <?php

    Route::add('/', function () {
      include('templates/home/main.php');
    });

    Route::add('/uploadImages', function () {
      include('templates/gallery/upload_form.php');
    }, 'get');

    Route::add('/upload', function () {
      include('templates/gallery/upload.php');
    }, 'post');

    Route::add('/pictureGallery', function () {
      include('templates/gallery/photos.php');
    });

    Route::add('/rueckmeldung', function () {
      $page = "from";
      include('templates/forms/googleform.php');
    });

    Route::run(BASEPATH);

    ?>
  <footer>
    <h3>Wünsche oder Fragen?</h3>
    <div>
      <a href="mailto:info@geli-und-micha-heiraten.de"><i class="far fa-envelope"></i></a>
      <p>Dann schreib uns
      </p>
      <a href="mailto:info@geli-und-micha-heiraten.de">info@geli-und-micha-heiraten.de</a>
    </div>
  </footer>
  <script src="static/js/navigation.js"></script>
  <script src="static/js/easteregg.js"></script>
  </div>
</body>

</html>