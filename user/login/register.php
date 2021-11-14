<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cloud Platform</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imgs/logo-aa.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="register.php"  method="post" class="login100-form">
					<span class="login100-form-title p-b-43">
						Register Now 
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name = "username" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name = "email" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email Address</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name = "password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"  name ="register" value = "Register">
                        Register 
						</button>
                        </div>
                        <span class="login100-form-title p-b-43">
					<a>Or</a><br>
					<a href = "login.php" style="font-size:25px">Login here</a>
					</span>
                    </form>
<?php
include 'connection.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM tbl_users WHERE email_address = '$email'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        echo '<script type  = "text/javascript">';
        echo 'alert("Email Already Taken!");';
        echo 'window.location.href = "register.php"';
        echo '</script>';
    }else{
        $register = "INSERT INTO tbl_users (username, email_address, password, status) VALUES ('$username', '$email', '$password', 'pending')";
        mysqli_query($conn, $register);
        echo '<script type  = "text/javascript">';
        echo 'alert("Your account is now pending for approval!");';
        echo 'window.location.href = "register.php"';
        echo '</script>';
    }
}
?>

<div class="login100-more" style="background-image: url('imgs/register.jpg'); ">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>