<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $pass = $_POST['pass'];
    $co_pass = $_POST['com_pass'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['id'];

    if ($pass == $co_pass) {

        $sql = "INSERT into tb_customer(cust_pass,cust_name,cust_address,cust_phone,cust_email) values ('$pass','$name','$address','$phone','$email')";

        $result = $mysqli->query($sql);
        if ($result) {
            echo '<script>alert("Success Register")</script>';
            header('Refresh:0; index.php');
        } else {
            echo '<script>alert("Error while Register!")</script>';
            header('Refresh:0; index.php');
        }
    } else {
        echo '<script>alert("Password and Confirm Password are not same")</script>';
        header('Refresh:0; index.php');
    }
}
