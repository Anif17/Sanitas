<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $oldP = $_POST['oldpassword'];
    $newP = $_POST['newpassword'];
    $conP = $_POST['confirmpassword'];

    $sql = "SELECT*FROM tb_customer WHERE cust_email = '$id'";
    $result = $mysqli->query($sql);

    $oldPass = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $oldPass = $row['cust_pass'];
        }
    }

    if ($oldPass == $oldP) {
        if ($newP == $conP) {
            if ($newP != $oldP) {
                //update
                $sql = "update tb_customer set cust_pass = '$newP' WHERE `cust_email` = '$id'";

                $result = $mysqli->query($sql);
                if ($result) { {
                        echo '<script>alert("Success Edit")</script>';
                        header('Refresh:0; index.php');
                    }
                } else {
                    echo '<script>alert("Error Edit")</script>';
                    header('Refresh:0; index.php');
                }
            } else {
                echo '<script>alert("Do not repeat the Old Password")</script>';
                header('Refresh:0; index.php');
            }
        } else {
            echo '<script>alert("Password and Confirm Password are not same")</script>';
            header('Refresh:0; index.php');
        }
    } else {
        echo '<script>alert("Password Incorrect")</script>';
        header('Refresh:0; update_form.php');
    }
}
