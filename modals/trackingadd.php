<?php include '../s.php';?>
<?php
require_once('../logeo.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

$id_campanha = $_REQUEST['id_campanha'];
$datetracking = $_REQUEST['segdate'];
$comentarioo = $_REQUEST['segcoment'];
$id_user = $_SESSION["id_user"];

  // Attempt insert query execution
      $sqlwe = "INSERT INTO seguimiento_reporte(id_reporte,
      fecha_seguimiento,
      comentario_seguimiento,
      id_user_session)
      VALUES
      ('$id_campanha','$datetracking','$comentarioo','$id_user')";

      if(mysqli_query($link, $sqlwe))
      {
        echo "<script>alert('Tracking added successfully!');</script>";
        echo "<script>location.href='../reports.php';</script>";

      } else{
          echo "<script>alert('ERROR: Could not able to execute $sqlwe. " . mysqli_error($link)."');</script>";
          //echo "<script>location.href='../reports.php';</script>";
      }

      // Close connection
      mysqli_close($link);
    }
?>
