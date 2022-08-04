<?php
session_start();

if (is_null($_SESSION['staff_id'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='index.php' 
      </SCRIPT>");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Sanitas Store</title>
    <link rel="icon" href="images/logoWebsite.ico">
    <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/admin_page.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/image.css">
    <link rel="stylesheet" href="assets/css/search.css">
</head>

<body style="background-image: url(images/skincare_bg.jpg)">

    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="home_page.php"><em>SANITAS</em> SKINCARE</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="home_page.php" class="external">HOME</a></li>

                <li><a href="delivery_list.php" class="external">LIST DELIVERY PRODUCT</a></li>

                <li class="has-submenu"><a href="#">VIEW</a>
                    <ul class="sub-menu">
                        <li><a href="prod_view.php" class="external">PRODUCT DATA</a></li>
                        <li><a href="prod_img.php" class="external">PRODUCT IMAGE</a></li>
                        <li><a href="order_view.php" class="external">ORDER DETAIL</a></li>
                    </ul>
                </li>

                <li>
                    <a href="prod_edit.php" class="external"> EDIT PRODUCT</a>
                </li>

                <li>
                    <a href="addProduct_form.php" class="external">ADD PRODUCT</a>
                </li>

                <li><a href="logout.php" class="external">LOG OUT</a></li>
            </ul>
        </nav>
    </header>

    <?php
    //Connection to database 
    include 'db_connection.php';
    $search = $_REQUEST["txtSearch"];

    //Select Database
    $sql = "SELECT*FROM tb_product WHERE prod_id LIKE '%$search%' ORDER BY prod_id ASC;";
    $result = $mysqli->query($sql)
    ?>

    <h1 align="center" style="padding-top: 7%; padding-bottom: 2%;"><span class="badge badge-info">PRODUCT LIST</span> </h1>

    <div class="container">

        <div align="center" style="padding-top: 2%;">

            <div class="col-md-8">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <form name="form1" method="post" action="product_search.php">
                        <input type="text" class="form-control" name="txtSearch" placeholder="Search using ISBN..">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <br>

    <div style="width: 90%; margin-left: auto; margin-right: auto;">
        <table class="table table-hover table-dark" cellpadding="3" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">PRODUCT ID</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">IMAGE</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //Fetch Data form database
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['prod_id']; ?></td>
                            <td><?php echo $row['prod_name']; ?></td>
                            <td><?php echo $row['prod_quantity']; ?></td>
                            <td><?php echo $row['prod_price']; ?></td>
                            <td><?php echo $row['image']; ?></td>
                        </tr>

                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <th colspan="6">There's No data found!!!</th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>