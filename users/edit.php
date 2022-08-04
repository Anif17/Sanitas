<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    $ord_id = $_POST['ord_id'];

    //update
    $sql = "update tb_orddetail set ordDetail_qnty= '$quantity' where ordDetail_id = '$ord_id'";

    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Edit")</script>';
            header('Refresh:0; shop_cart.php');
        }
    } else {
        echo '<script>alert("Error Edit")</script>';
    }
}
