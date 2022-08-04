<?php
include('db_connection.php');

if (isset($_POST['btnsave'])) {
    $name = $_POST['name'];
    $qtty = $_POST['quantity'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    //add new product
    $sql = "INSERT into tb_product(prod_name,prod_quantity,prod_price,image) values 
    ('$name','$qtty','$price','$img')";
    $result = $mysqli->query($sql);
    if ($result) {
        echo '<script>alert("Success Insert")</script>';
        header('Refresh:0; prod_view.php');
    } else {
        echo '<script>alert("Error while Insert!")</script>';
        header('Refresh:0; add_product.php');
    }
}
