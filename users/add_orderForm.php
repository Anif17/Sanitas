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
    $img = $_POST['img'];
    $prod_id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $prod_price = $_POST['price'];
    ?>
    <br><br>
    <section class="borrow" id="borrow">
        <div class="borrow-box">
            <form action="add_ordDetail.php" method="POST">
                <h4 align="center" class="heading">ADD TO CART</h4><br>
                <center>
                    <img src="images/<?php echo $img; ?>" style="border-radius: 20px; width: 40%;">
                    <br>
                    <b>CUSTOMER ID:</b>
                    <input type="text" class="input-field" name="cust_id" value="<?php echo $_SESSION['user_id'] ?>" readonly style="background-color: #D3D3D3;">
                    <b>PRODUCT ID:</b>
                    <input type="text" class="input-field" name="prod_id" value="<?php echo $prod_id ?>" readonly style="background-color: #D3D3D3;"><br>
                    <b>PRICE:</b>
                    <input type=" text" class="input-field" id="prod_price" name="prod_price" value="<?php echo $prod_price ?>" readonly style="background-color: #D3D3D3;"><br>
                    <b>QUANTITY:</b>
                    <input type="text" class="input-field" id="quantity" name="quantity" value="<?php echo $quantity ?>" required style="background-color: #8AFF8A;"><br>
                    <b>TOTAL PRICE:</b>
                    <button type="button" class="btn btn-info" onclick="calcPrice()">Calculate Total</button>
                    <input id="totalPrice" type="text" class="input-field" name="totalPrice" readonly style="background-color: #D3D3D3;"><br><br>
                    <input type="submit" class="btn" value="ENTER" name="submit" style="width: 50%;">
                </center>
            </form>
        </div>
        <script>
            function calcPrice() {
                var price = parseFloat(document.getElementById("prod_price").value);
                var quantity = parseFloat(document.getElementById("quantity").value);
                tot = price * quantity;
                document.getElementById("totalPrice").value = "RM" + tot.toFixed(2);
            }
        </script>
    </section>

</body>

</html>