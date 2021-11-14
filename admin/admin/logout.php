<?php
   session_start();
   {
      if(isset($_POST['logobnt'])){
    session_destroy();

    header('Location:../login/login.php');
}
}
?>
