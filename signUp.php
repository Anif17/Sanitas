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

                    <form action="signUp_Fun.php" method="POST">
                        <br>
                        <h2><b>Sign Up </b></h2>
                        <br>
                        <div class="form-group first">
                            <label for="username">Email: </label>
                            <input type="email" class="form-control" placeholder="Email" id="username" name="id">
                        </div>
                        <div class="form-group last mb-3">

                            <label for="name">Name: </label>
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name"><br>

                            <label for="address">Address: </label>
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address"><br>

                            <label for="phone">Phone: </label>
                            <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone"><br>

                            <label for="pass">Password: </label>
                            <input type="password" class="form-control" placeholder="Password" name="pass"><br>

                            <label for="com_pass">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="com_pass"><br>

                            <button type="submit" value="save" class="btn btn-block btn-primary" name="submit">ENTER</button<br>
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