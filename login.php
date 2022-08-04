<?php
require('db_connection.php');
session_start();
if (isset($_POST['submit'])) {
    $loginType = $_POST["login"];
    if ($loginType == "user") {
        $username = mysqli_escape_string($mysqli, $_POST['id']);
        $password = mysqli_escape_string($mysqli, $_POST['pass']);
        if (!$_POST['id'] | !$_POST['pass']) {
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
    window.alert('You did not complete all of the required fields') 
    window.location.href='index.html' 
    </SCRIPT>");
            exit();
        }
        $sql = $mysqli->query("SELECT * FROM `tb_customer` WHERE `cust_email` = '$username' AND 
        `cust_pass` = '$password'");
        if (mysqli_num_rows($sql) > 0) {
            $info = mysqli_fetch_array($sql);     // returns a row from a recordset
            $_SESSION['user_id'] = $info['cust_id'];    // assign field in username to session [user]
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
    window.alert('Login Succesfully!') 
    window.location.href='users/home.php' 
    </SCRIPT>");
            exit();
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
    window.alert('Wrong username password combination.Please re-enter.') 
    window.location.href='index.php' 
    </SCRIPT>");
            exit();
        }
    } else if ($loginType == "staff") {

        $username = mysqli_escape_string($mysqli, $_POST['id']);
        $password = mysqli_escape_string($mysqli, $_POST['pass']);

        if (!$_POST['id'] | !$_POST['pass']) {
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
        window.alert('You did not complete all of the required fields') 
        window.location.href='index.php' 
        </SCRIPT>");
            exit();
        }

        $sql = $mysqli->query("SELECT * FROM `tb_admin` WHERE `username` = '$username' AND 
            `password` = '$password'");
        if (mysqli_num_rows($sql) <= 0)               // check either result found or not
        {
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
                window.alert('Wrong username password combination.Please re-enter.') 
                window.location.href='index.php' 
                </SCRIPT>");
            exit();
        } else {
            $info = mysqli_fetch_array($sql);     // returns a row from a recordset
            $_SESSION['staff_id'] = $info['username'];    // assign field in username to session [user]
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
            window.alert('Login Succesfully !') 
            window.location.href='admin/home_page.php' 
            </SCRIPT>");
        }
    }
} else {
}
