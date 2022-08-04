<?php
include('db_connection.php');
//update
$sql = "update tb_orddetail set status = 'success' where cust_id = '{$_GET['id']}'  AND status = 'pending'";

$result = $mysqli->query($sql);
if ($result) { {
        echo '<script>alert("Cofirm Purchase")</script>';
        header('Refresh:0; shop_cart.php');
    }
} else {
    echo '<script>alert("Error !!")</script>';
}
