<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/bootstrap.css">
  </head>
  <body class="bg-info">
    <?php require 'navbar.php'; ?>
    <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>All cities</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <th>City Name</th>
            <th>Country</th>
          </tr>
          <?php foreach($cities as $city): ?>
            <tr>
              <td><?= $city->id ?></td>
              <td><?= $city->name ?></td>
              <td><?= $city->country ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
                <!-- Home Page -->
        <a href="index.php" class="btn btn-info mt-2">Home Page</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js></script>
  
    </div>
  </body>
</html>