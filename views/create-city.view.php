<!doctype html>
<html lang="en">
  <head>
    <title>Create City</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/bootstrap.css">
  </head>
  <body class="bg-success">
          <!-- NavBar -->
    <?php require 'navbar.php'; ?>
    <div class="container">
            <!-- Card -->
      <div class="card mt-5">
              <!-- Card Header -->
        <div class="card-header">
          <h2>Add a New City</h2>
        </div>
              <!-- Card-Body -->
        <div class="card-body">
          <?php if(!empty($message)): ?>
            <div class="alert alert-success">
              <?= $message; ?>
            </div>
          <?php endif; ?>
                <!-- Form -->
          <form action="" method="post">
                  <!-- From Group -->
            <div class="form-group">
                <label for="name">City name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
                  <!-- From Group -->
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control" required>
            </div>
                  <!-- From Group -->
            <div class="form-group">
              <button type="submit" class="btn btn-info">Add a New City</button>
            </div>
                       <!-- Home Page -->
            <a href="index.php" class="btn btn-info">Home Page</a>
          </form>
          
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js></script>
  </body>
</html>