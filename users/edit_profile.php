<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sanitas Store</title>
    <link rel="icon" href="images/logoWebsite.ico">
    <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            transition: .2s linear;
        }


        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgb(153, 153, 255);
            padding: 2rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1 rem rgba(0, 0, 0, .1);
        }

        .banner {
            width: 100%;
            height: 100vh;
            margin-right: 100%;
            background-size: cover;
            background-position: center;
        }

        .navbar {
            width: 95%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: auto;
            justify-self: space-between;

        }

        .logo {
            display: block;
            margin-right: 40px;
            margin-top: -20px;
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;

        }

        .navbar ul li a {
            text-decoration: none;
            color: aliceblue;
            text-transform: uppercase;

        }

        .navbar ul li::after {
            content: '';
            height: 2px;
            width: 0%;
            background: #FCFAFA;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;

        }

        .navbar ul li:hover::after {
            width: 100%;
        }

        body {
            background-color: #efefef;
            font-family: sans-serif;
            display: flex;
            align-items: center;
            min-height: 100vh;
            background: url(images/bg-01.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .borrow .heading {
            font-size: 3rem;
            color: #333;
            font-weight: bolder;
        }

        .borrow .borrow-box {
            width: 500px;
            border-radius: 5rem;
            background-color: #fff;
            box-shadow: 0 0 20px 0 #999;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            margin-top: 80px;
        }

        .borrow form {
            margin: 25px;
        }

        .borrow .borrow-box .input-field {
            width: 460px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid #777;
            border-radius: 14px;
            outline: none;
        }

        .borrow .borrow-box .btn {
            border-radius: 20px;
            color: #fff;
            margin-top: 18px;
            padding: 10px;
            background-color: #47c35a;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        .borrow .borrow-box div {
            margin-top: 2rem;
            font-size: 120%;
        }
    </style>
</head>


<body>

    <div class="banner">
        <div class="navbar">
            <header>
                <img src="images/icon/logo.png" class="logo"></a>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="product.php">LIST PRODUCT</a></li>
                    <li><a href="shop_cart.php">SHOPPING CART</a></li>
                    <li><a href="view_receive.php">TO RECEIVE</a></li>
                    <li><a href="meet_team.php">MEET TEAM</a></li>
                    <li><a href="edit_profile.php">EDIT PROFILE</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </header>
        </div>
    </div>

    <?php
    include('db_connection.php');

    $id = $_SESSION['user_id'];
    $sql = "SELECT * from tb_customer where cust_id='$id'";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $name = $row['cust_name'];
        $address = $row['cust_address'];
        $phone = $row['cust_phone'];
        $email = $row['cust_email'];
    }

    ?>

    <section class="borrow" id="borrow">
        <div class="borrow-box">

            <center>
                <form action="edit_profileFun.php" method="POST">
                    <h4 align="center" class="heading">EDIT PROFILE</h4><br>
                    <b>NAME :</b>
                    <input type="text" class="input-field" name="name" value="<?php echo $name; ?>"><br><br>
                    <b>ADDRESS :</b>
                    <input type="text" class="input-field" name="address" value="<?php echo $address; ?>"><br><br>
                    <b>PHONE :</b>
                    <input type="text" class="input-field" name="phone" value="<?php echo $phone ?>"><br><br>
                    <b>EMAIL :</b>
                    <input type=" text" class="input-field" id="email" name="email" value="<?php echo $email ?>"><br><br>

                    <input type="submit" class="btn" value="SUBMIT" name="submit" style="width: 50%; text-align: center;">
                </form>
            </center>
        </div>
    </section>

</body>

</html>