<!doctype html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/bootstrap.css">
  </head>
  <body class="bg-primary">
             <!-- NavBar -->
    <?php require 'navbar.php'; ?>
    <div class="container">
      <?php foreach ($cities as $city): ?>
              <!-- card -->
        <div class="card my-5">
              <!-- card-header -->
          <div class="card-header">
            <?= $city->name; ?>
          </div>
              <!-- card-body -->
          <div class="card-body">
            <h3>All people inside <?= $city->name; ?></h3>
            <ul class="list-group">
              <?php foreach ($city->people as $person): ?>
                <li class="list-group-item"><?= $person->name; ?></li>
              <?php endforeach ?>
            </ul>
            
          </div>
        </div>
        
      <?php endforeach ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js></script>
  </body>
</html>