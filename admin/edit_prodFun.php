<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $qtty = $_POST['quantity'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    //update
    $sql = "update tb_product set prod_name = '$name', prod_quantity= '$qtty', prod_price = '$price', image = '$img' where prod_id = '$id'";

    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Edit")</script>';
            header('Refresh:0; prod_edit.php');
        }
    } else {
        echo '<script>alert("Error Edit")</script>';
        header('Refresh:0; prod_edit.php');
    }
}
