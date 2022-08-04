<?php
include('db_connection.php');

if (isset($_GET['deleted'])) {
    $sql = "delete from tb_product where prod_id = '{$_GET['id']}' ";
    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Deleted")</script>';
            header('Refresh:0; prod_view.php');
        }
    }
}
