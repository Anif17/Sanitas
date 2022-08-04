<?php
session_start();

include('db_connection.php');

if (isset($_POST['submit'])) {
    $id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    //update
    $sql = "update tb_customer set cust_name= '$name', cust_address= '$address', cust_phone= '$phone' , cust_email= '$email' where cust_id = '$id'";

    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Edit")</script>';
            header('Refresh:0; home.php');
        }
    } else {
        echo '<script>alert("Error Edit")</script>';
    }
}
