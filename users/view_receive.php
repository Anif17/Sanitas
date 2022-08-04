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

    <?php
    //Connection for database
    include 'db_connection.php';

    $id = $_SESSION['user_id'];
    //Select Database
    $sql = "SELECT*FROM tb_orddetail WHERE cust_id = '$id' AND status = 'success'  ORDER BY ordDetail_id ASC ";
    $result = $mysqli->query($sql)
    ?>

    <h2 align="center" style="padding-top: 2%;"><span class="badge badge-info"> <img src="images/icon/received.png" alt="received" width="80px"> RECEIVED HISTORY</span> </h2>

    <br>
    <div style="width: 90%; margin-left: auto; margin-right: auto;">
        <table class="table table-hover table-dark" cellpadding="3" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ORDER ID</th>
                    <th scope="col">CUSTOMER ID</th>
                    <th scope="col">PRODUCT ID</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">TOTAL PRICE</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                //Fetch Data form database
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $total = $total + $row['ordDetail_price'] * $row['ordDetail_qnty'];
                ?>
                        <tr>
                            <td><?php echo $row['ordDetail_id']; ?></td>
                            <td><?php echo $row['cust_id']; ?></td>
                            <td><?php echo $row['prod_id']; ?></td>
                            <td><?php echo $row['ordDetail_qnty']; ?></td>
                            <td>RM <?php echo $row['ordDetail_price']; ?></td>
                            <td>RM <?php echo number_format($row['ordDetail_price'] * $row['ordDetail_qnty'], 2) ?></td>
                            <td>
                                <span class="badge badge-pill badge-primary" style="font-size: 15px;"><?php echo $row['status']; ?></span>
                            </td>
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

    <div style="width: 90%; margin-left: auto; margin-right: auto; text-align: center;">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">TOTAL PRICE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col" class="w-75 p-3">RM <?php echo number_format($total, 2) ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</html>