<?php

  $id_userre = $_POST['id_usuario'];
  $nombrecillo =$_POST['nombre'];
  $roleada =$_POST['user_role'];
  $usernamee = $_POST['username'];
  $pasworde =$_POST['password'];

  require_once('../logeo.php');

  $sqledit = "UPDATE usuarios_intranet
  set nombre = '$nombrecillo',
  user_role = '$roleada',
  username = '$usernamee',
  password = '$pasworde'
  WHERE id_user = $id_userre";


  if ($link->query($sqledit) === TRUE) {
      echo "<script> alert('User updated successfully!');</script>";
      echo "<script>location.href='../manage_users.php';</script>";
      exit;
  } else {
      echo "<script>console.log('Debug Objects: " . $link->error . "' );</script>";
      exit;
  }

$link->close();

?>
