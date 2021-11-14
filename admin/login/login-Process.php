<?php
session_start();
include 'connection.php';
$email =trim($_POST["lemail"]);
$password =trim($_POST["lpassword"]);

$sql="Select * from admin where username = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num ==1){
   $_SESSION['logged_in'] =1;
   $_SESSION['name'] = $num['username'];
   echo "<script>alert('successfully login');</script>";
    echo "<script>window.location.href = '../admin/index.php';</script>";

}

else{
    echo "<script>alert('Invalid Data');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
}
?>