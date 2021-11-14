<?php
session_start();
include 'connection.php';
if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select2 = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email_address = '$email' AND password = '$password' AND status='pending'");
    $check_user = mysqli_num_rows($select2);

    if ($check_user == 1)
    {
        echo '<script type  = "text/javascript">'; 
        echo 'alert("Your account is still pending for approval!!");';
        echo 'window.location.href = "login.php"';
        echo '</script>';
    }
    else
    {
        if (isset($_POST['login']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $select2 = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email_address = '$email' AND password = '$password' AND status='approved'");
            $logged_in = mysqli_num_rows($select2);
            $row = mysqli_fetch_array($select2);

        $status =$row['status'];

            if ($logged_in == 1)
            {
                $_SESSION['logged_in'] =1;
                $_SESSION["name"] = $row['username'];
                $_SESSION["email"] = $row['email_address'];
                $_SESSION["password"] = $row['password'];
                echo '<script type  = "text/javascript">';
                echo 'alert("Login Success!");';
                echo 'window.location.href = "../admin/index.php"';
                echo '</script>';
            }
            else
            {
                echo '<script type  = "text/javascript">';
                echo 'alert("Incorrect email or password!");';
                echo 'window.location.href = "login.php"';
                echo '</script>';
            }
        }

    }
}

?>