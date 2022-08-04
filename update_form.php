<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <title>Sanitas Store</title>
  <link rel="icon" href="images/webLogo.ico">
  <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    .error {
      color: #D8000C;
      background-color: #E3B7AD;
      border-radius: 5px;
    }
  </style>
</head>
</body>

<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
  <div class="contents order-2 order-md-1">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">

          <form action="update_pass.php" method="post">
            <h2><b>CHANGE PASSWORD</b></h2>
            <p class="mb-4">Choose products that support your wellness and help you feel gorgeous.</p>
            <div class="form-group first">
              <label for="username">Email</label>
              <input type="text" class="form-control" placeholder="Your Username" id="username" name="id">
            </div>
            <div class="form-group last mb-3">
              <label for="password">Old Password</label>
              <input type="password" class="form-control" placeholder="Old Password" name="oldpassword"><br>

              <label for="password">New Password</label>
              <input type="password" class="form-control" placeholder="New Password" name="newpassword"><br>

              <label for="password">Confirm New Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword"><br>

              <button type="submit" value="save" class="btn btn-block btn-primary" name="submit">CHANGE</button<br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>






  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </body>

</html>