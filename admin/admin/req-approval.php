<?php
session_start();
include 'connection.php';
if(isset($_POST['approve'])){
    $id = $_POST['id'];

    $select = "UPDATE `tbl_users` SET status = 'approved' WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "index.php"';
    echo '</script>';
}

if(isset($_POST['deny'])){
    $id = $_POST['id'];

    $select = "UPDATE `tbl_users` SET status = 'denied' WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "index.php"';
    echo '</script>';
}
?>