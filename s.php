<?php
session_start();
// veirifca si esta logeado, sino lo redirije al login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: https://www.valenciatravelcusco.com/admin/login.php");
    exit;
  }

?>
