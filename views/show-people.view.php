<!doctype html>
<html lang="en">
  <head>
    <title>Show People</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/bootstrap.css">
  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h2>All People</h2>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>City</th>
              <th>Country</th>
            </tr>
            <?php foreach($people as $person): ?>
              <tr>
                <td><?= $person->name ?></td>
                <td><?= $person->email ?></td>
                <td><?= $person->city->name ?></td>
                <td><?= $person->city->country ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
                <!-- Home Page -->
        <a href="index.php" class="btn btn-info mt-2">Home Page</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js></script>
  </body>
</html>