<!doctype html>
<html lang="en">
  <head>
    <title>Living People</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/bootstrap.css">
  </head>
  <body class="bg-info">
        <!-- NavBar -->
    <?php require 'navbar.php'; ?>
    <div class="container">
            <!-- Card -->
      <div class="card mt-5">
              <!-- Card Header -->
        <div class="card-header">
          <h2><?= $city->name; ?></h2>
        </div>
              <!-- Card body -->
        <div class="card-body">
          <?php foreach ($city->people as $person): ?>
            <li><?= $person->name ?></li>
          <?php endforeach ?>
        </div>

               <!-- Home Page -->
          <a href="index.php" class="btn btn-info mt-2">Home Page</a>  
      </div>
      
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js></script>
  </body>
</html>