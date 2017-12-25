<!doctype html>
<html lang="en">
  <head>
    <title>Create People</title>
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
        <div class="card-header">
          <h2>Add a New People</h2>
        </div>
              <!-- Card body -->
        <div class="card-body">
          <?php if(!empty($message) ):  ?>
            <div class="alert alert-success">
              <?= $message; ?>
            </div>
          <?php endif; ?>
                <!-- Form  -->
          <form action="" method="post">
                  <!-- From Group -->
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control" name="city" id="city">
                <?php foreach($cities as $city): ?>
                  <option value="<?= $city->id ?>"><?= $city->name ?></option>
                <?php endforeach; ?>

              </select>
            </div>
                   <!-- From Group -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
                  <!-- From Group -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
                  <!-- From Group -->
            <div class="form-group">
              <button type="submit" class="btn btn-info">Register People</button>
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