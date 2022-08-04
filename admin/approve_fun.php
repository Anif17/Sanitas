<?php
include('db_connection.php');

$idc = $_GET['cust_id'];
$idprod = $_GET['prod_id'];

$sql = "UPDATE tb_orddetail  SET status = 'success' where cust_id='$idc' AND prod_id='$idprod'";
$result = $mysqli->query($sql);

if ($result) {
    echo '<script>alert("Success Approve!")</script>';
    header('Refresh:0; delivery_list.php');
} else {
    echo '<script>alert("Error Occured!")</script>';
    header('Refresh:0; delivery_list.php');
}
