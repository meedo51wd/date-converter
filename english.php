<?php include("class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ahmed Alsaleh, Meedo51">
    <link rel="icon" href="">

    <title>Date Converter - English to Hijri</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
<body class="text-center bg-dark">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h1 class="display-4">Date Converter By Meedo51</h1>
      <p class="lead">This script allows you to convert date from Hijri to English and English to Hijri.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h3>From English to Hijri</h3>
      </div>
      <div class="col-sm">
        <form action="english.php" method="post">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="day" placeholder="Day">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="month" placeholder="Month">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="year" placeholder="Year">
            </div>
            <button type="submit" class="btn btn-warning" name="convert">Convert</button>
          </div>
        </form>
      </div>
      <div class="col-sm">
        <a href="arabic.php" class="btn btn-light">Hijri to English</a>
      </div>
    </div>
  </div>

<?php

if(isset($_POST['convert'])){
  $ed = $_POST['day'];
  $em = $_POST['month'];
  $ey = $_POST['year'];
  $F_RETURN    =    FF0_Date_From_EN_To_AR($ey,$em,$ed);
  $en_y    =    $F_RETURN[0];
  $en_m    =    $F_RETURN[1];
  $en_d    =    $F_RETURN[2];

  echo '<br> <i class="num">' . $en_y . '</i><i class="num">' . $en_m . '</i><i class="num">' . $en_d . '</i>';
}
?>




    <footer class="blog-footer">
      <p>All right reserved <a href="https://meedo51.com/">&copy;Meedo51</a>  <a href="sitemap/index<?=ext();?>">Site Map</a>.</p>
      <p>
        <a href="#"><i class="fab fa-autoprefixer"></i> Back to top</a>
      </p>



    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ajax/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>