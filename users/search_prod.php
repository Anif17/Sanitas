<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Sanitas Store</title>
    <link rel="icon" href="images/logoWebsite.ico">
    <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: rgb(220,220,220);">

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

    <section id="product" style="padding: 0px 80px">
        <h2 align="center" style="padding-top: 1%;"><span class="badge badge-info"><img src="images/icon/product.png" alt="product" width="80px"> PRODUCT </span> </h2>

        <div class="container">
            <div align="center" style="padding-top: 2%;">

                <div class="col-md-8">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <form name="form1" method="post" action="search_prod.php">
                            <input type="text" class="form-control" name="txtSearch" placeholder="Search product name..">
                            <button class="btn btn-primary" style="margin-top: 20px; width:50%"> <img src="images/icon/search.png" alt="search" width="25px"> Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="pro-container">

            <?php
            //Connection for database
            include 'db_connection.php';
            $search = $_REQUEST["txtSearch"];

            //Select Database
            $sql = "SELECT * FROM tb_product WHERE prod_name LIKE '%$search%' ORDER BY prod_id ASC";
            $result = $mysqli->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="pro" style="border-radius: 20px;">
                        <form method="post" action="add_orderForm.php">
                            <img src="images/<?php echo $row["image"]; ?>" style="border-radius: 20px; width: 70%;">
                            <div class="desc">
                                <h5>ID : <?php echo $row["prod_id"]; ?></h5>
                                <h5><?php echo $row["prod_name"]; ?></h5>
                                <h5>Product Quantity : <?php echo $row["prod_quantity"]; ?></h5>
                                <h4 style="color: #C5312D;">RM <?php echo $row["prod_price"]; ?></h4>
                            </div>
                            <input type="text" name="quantity" value="1" class="form-control" />


                            <input type="hidden" name="img" value="<?php echo $row["image"]; ?>" />

                            <input type="hidden" name="id" value="<?php echo $row["prod_id"]; ?>" />

                            <input type="hidden" name="price" value="<?php echo $row["prod_price"]; ?>" />

                            <input type="submit" name="add_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                        </form>
                    </div>

                <?php
                }
            } else {
                ?>
                <div style="width: 100%;">
                    <h2 align="center" class="badge badge-pill badge-warning" style="font-size: 30px; margin-top: 50px; ">There's No data found!!!</h2>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</body>

</html>