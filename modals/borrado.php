<?php
//DELETE USER
$opcion = $_POST['eraseuseract'];

if( $opcion == 'delete_user')
{
  $id_userr = $_POST['id_usuario'];

  require_once('../logeo.php');
  $sqldelete = "DELETE FROM reporte WHERE id_user = $id_userr";
  $sqldelete2 = "DELETE FROM usuarios_intranet WHERE id_user = $id_userr";

  if ($link->query($sqldelete) === TRUE) {
      $link->query($sqldelete2);

        if ($link->query($sqldelete2) === TRUE)
        {
          echo "<script> alert('Records Deleted!');</script>";
          echo "<script>location.href='../manage_users.php';</script>";
          exit;
        }

    }
   else {
   //header("Location: {$_SERVER['HTTP_REFERER']}");
   echo "<script>console.log('Debug Objects: " . $link->error . "' );</script>";
   exit;
      }

}
//NOT DELETED USER
else if ( $opcion == 'no_delete_user')
{
  //echo "<script> alert('User and his Records are SAFE!');</script>";
  echo "<script>location.href='../manage_users.php';</script>";
  exit;
}

$link->close();

?>
