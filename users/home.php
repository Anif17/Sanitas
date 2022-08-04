<!DOCTYPE html>
<html>

<head>

    <title>Sanitas Store</title>
    <link rel="icon" href="images/logoWebsite.ico">
    <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /*FOR HERO SECTION*/
        #hero-image {
            background-image: url(images/hero-image.jpg);
            height: 75vh;
            width: 100%;
            background-size: cover;
            background-position: top 25% right 0;
            padding: 0 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        #hero-image button {
            padding: 14px 80px 14px 65px;
            font-size: 20px;
            color: #845ec2;
            cursor: pointer;
            font-weight: 700;
            font-size: 20px;
        }

        /*END HERO SECTION*/
    </style>
</head>

<body>

    <section id="header">
        <a href="home.php"><img src="images/icon/logo.png" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">HOME</a></li>
                <li><a href="product.php">LIST PRODUCT</a></li>
                <li><a href="shop_cart.php">SHOPPING CART</a></li>
                <li><a href="view_receive.php">TO RECEIVE</a></li>
                <li><a href="meet_team.php">MEET TEAM</a></li>
                <li><a href="edit_profile.php">EDIT PROFILE</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
        </div>
    </section>

    <section id="hero-image">
        <h4 style="padding-bottom: 15px;">OFFICIAL FLAGSHIP STORES</h4>
        <h2 style="padding-bottom: 10px;">Luxury Quality at Wholesale Price</h2>
        <h1 style="color: #845EC2;">Health And Beauty Products</h1>
        <p style="font-size: 23px; margin: 15px 0 20px 0;">Authorised & Authentic</p>
        <button> <a href="product.php" style="text-decoration: none;"> Shop Now</a></button>
    </section>

    <section style="padding: 50px;">
        <center>
            <table>
                <tr>
                    <td class="icon-items"><img src="images/icon/support.png"></td>
                    <td class="icon-items"><img src="images/icon/online-payment.png"></td>
                    <td class="icon-items"><img src="images/icon/quality-guaranted.png"></td>
                    <td class="icon-items"><img src="images/icon/privacy.png"></td>
                    <td class="icon-items"><img src="images/icon/delivery.png"></td>
                    <td class="icon-items"><img src="images/icon/save-money.png"></td>
                    <td class="icon-items"><img src="images/icon/trust.png"></td>
                    <td class="icon-items"><img src="images/icon/promotion.png"></td>

                </tr>
                <tr>
                    <td style="text-align: center;">24 Hours Support</td>
                    <td style="text-align: center;">Online Order</td>
                    <td style="text-align: center;">Product Assurance</td>
                    <td style="text-align: center;">Privacy Guaranted</td>
                    <td style="text-align: center;">Delivery Provided</td>
                    <td style="text-align: center;">Save Money</td>
                    <td style="text-align: center;">Trusted</td>
                    <td style="text-align: center;">Promotion</td>

                </tr>
            </table>
        </center>

    </section>
</body>

</html>

</body>

</html>