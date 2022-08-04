<?php
include('db_connection.php');

if (isset($_GET['deleted'])) {

    $ordDetail_qnty = 0;
    $prod_id;

    $sql = "SELECT * FROM tb_orddetail WHERE ordDetail_id = '{$_GET['id']}';";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ordDetail_qnty = $row['ordDetail_qnty'];
            $prod_id = $row['prod_id'];
        }
    }

    $qnty = 0;
    $sql = "SELECT * FROM tb_product WHERE prod_id='$prod_id';";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $qnty = $row['prod_quantity'];
        }
    }

    $totalQnty =  $qnty + $ordDetail_qnty;

    $sql = "update tb_product set prod_quantity = '$totalQnty' where prod_id = '$prod_id'";
    $result = $mysqli->query($sql);


    $sql = "delete from tb_orddetail where ordDetail_id = '{$_GET['id']}' ";
    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Deleted")</script>';
            header('Refresh:0; shop_cart.php');
        }
    }
}
