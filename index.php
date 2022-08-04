<!doctype html>
<html lang="en">

<head>

  <title>Sanitas Store</title>
  <link rel="icon" href="images/webLogo.ico">
  <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
</head>
</body>

<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
  <div class="contents order-2 order-md-1">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">

          <fieldset>
            <center>
              <h1 style="color: grey;">WELCOME TO <br><b style="color: orange;">SANITAS</b></h1>
            </center>
            <h3><br>Login to <strong style="color: grey;">SANITAS</strong></h3>
            <p class="mb-4">Make yourself blessed with the fragile gift: beauty</p>
            <form action="login.php" method="POST">
              <div class="border" style="padding: 10px;">
                <div class="form-group first">
                  <center>
                    <div class="border-bottom">
                      <input type="radio" id="staff" name="login" value="staff">
                      <label for="staff" style="padding-right: 90px;">Staff</label>
                      <input type="radio" id="stud" name="login" value="user" checked>
                      <label for="stud">Customer</label>
                    </div>
                  </center>
                  <div>
                    <br>
                    <label for="username">EMAIL</label>
                    <input type="email" class="form-control" placeholder="Your Email" id="username" name="id" required>
                  </div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="pass" required>
                </div>
                <div class="d-flex mb-5 align-items-center">
                  <span class="ml-auto">
                    <a href="update_form.php" class="forgot-pass">Forgot Password</a>
                    <a href="signUp.php" class="forgot-pass" style="padding-left: 10px;">Sign Up</a>
                  </span>
                </div>
                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="submit">
          </fieldset>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>
</body>

</html>