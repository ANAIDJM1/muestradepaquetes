<?php

require_once('../logeo.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

$id_user = $_REQUEST['id_user'];
$fecha_inicial = $_REQUEST['initialdate'];
$nombre_campanha = $_REQUEST['campainname'];
$canal_captacion= $_REQUEST['channel'];
$contacto= $_REQUEST['contact'];
$correo_contacto= $_REQUEST['mail'];
$telefono= $_REQUEST['phone'];
$pais= $_REQUEST['country'];
$producto= $_REQUEST['product'];
$contrato= $_REQUEST['contrato'];
$fecha_contrato= $_REQUEST['contractdate'];
$comentario= $_REQUEST['FormControlTextarea1'];


      // Attempt insert query execution
      $sql = "INSERT INTO reporte (id_user,
      fecha_inicial,
      nombre_campanha,
      canal_captacion,
      contacto,
      correo_contacto,
      telefono,
      pais,
      producto,
      contrato,
      fecha_contrato,
      comentario)
      VALUES
      ('$id_user','$fecha_inicial','$nombre_campanha','$canal_captacion','$contacto','$correo_contacto','$telefono','$pais'
      ,'$producto','$contrato','$fecha_contrato','$comentario')";

      if(mysqli_query($link, $sql)){
        echo "<script>alert('Records added successfully!');</script>";
        echo "<script>location.href='../reports.php';</script>";

      } else{
          echo "<script>alert('ERROR: Could not able to execute $sql. " . mysqli_error($link)."');</script>";
          echo "<script>location.href='../reports.php';</script>";
      }

      // Close connection
      mysqli_close($link);

    }

    ?>
