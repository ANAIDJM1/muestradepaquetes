
<?php
//conexion
//require_once('logeo.php');
require 'logeo.php';
  //verifica si tiene los permisos para acceder a la pagina correspondiente

    //1.-primero saca del usuario su "user_role"
      $userrole= htmlspecialchars($_SESSION["user_role"]);


      //2.-coge url al q esta queriendo acceder
      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    //3-coge usertype_permissions

    $sql1 = "SELECT cod_permiso from usertype_permissions where role='$userrole'";
    $permisoss = $link->query($sql1);

      $valor=false;
    if ($permisoss->num_rows > 0)
    {
      while($row = $permisoss->fetch_assoc()) {

           //echo $row['cod_permiso']." , ";

          $varr=$row['cod_permiso'];

          $sql2 = "SELECT ruta from permissions where cod_permiso ='$varr'";
          $ruta=$link->query($sql2);


          if ($ruta->num_rows > 0)
          {
            while($row = $ruta->fetch_assoc()) {

              if($row['ruta'] == $actual_link)
              {
                $valor=true;
              }

            }
          }
          //4.- Compara el codigo de esta pagina con el del usertype_permissions si es
          // que le corresponde segun su rol del id_user

        }
    }
    if($valor==false){
      //echo "EL VALOR ES FALSE";
      //header("location: http://www.localhost/Intranet/not_access.php");
      echo "<script>location.href='https://www.valenciatravelcusco.com/admin/not_access.php';</script>";
    }

    //$link->close();
?>
