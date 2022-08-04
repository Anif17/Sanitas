<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $cust_id = $_POST['cust_id'];
    $prod_id = $_POST['prod_id'];
    $ordDetail_qnty = $_POST['quantity'];
    $ordDetail_price = $_POST['prod_price'];

    $qnty = 0;
    $sql = "SELECT * FROM tb_product WHERE prod_id='$prod_id';";
    $result1 = $mysqli->query($sql);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $qnty = $row['prod_quantity'];
        }
    }

    $totalQnty =  $qnty - $ordDetail_qnty;

    $sql = "update tb_product set prod_quantity = '$totalQnty' where prod_id = '$prod_id'";
    $result2 = $mysqli->query($sql);


    $sql = "INSERT into tb_orddetail(cust_id,prod_id,ordDetail_qnty,ordDetail_price,status) values 
    ('$cust_id','$prod_id','$ordDetail_qnty','$ordDetail_price','pending')";
    $result3 = $mysqli->query($sql);
    if ($result3) {
        echo '<script>alert("Success Insert")</script>';
        header('Refresh:0; shop_cart.php');
    } else {
        echo '<script>alert("Error while Insert!")</script>';
        header('Refresh:0; home.php');
    }
}
