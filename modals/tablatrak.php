<?php
     $id_reporte = $_POST['idrepo'];

     require_once('../logeo.php');

      //$id_reporte = '2';

      $sqltracking = "SELECT fecha_seguimiento, comentario_seguimiento FROM seguimiento_reporte WHERE id_reporte ='$id_reporte'";
      $reporte_track = $link->query($sqltracking);

      if ($reporte_track->num_rows > 0)
      {
        echo "<div class='table-cont2'>
        <table class='reporte'>
        <thead>
          <tr>
              <th>Tracking Date</th>
              <th>Comment</th>
          </tr>
        </thead>
        <tbody>";
        while($row = $reporte_track->fetch_assoc())
        {
      echo "<tr>".
            "<td>". $row["fecha_seguimiento"]."</td>"
            ."<td>".$row["comentario_seguimiento"]."</td>".
            "</tr>";
        }
      }
      else {
        echo "<div class='table-cont2'>
        <table class='reporte'>
        <thead>
          <tr>
              <th>Tracking Date</th>
              <th>Comment</th>
          </tr>
        </thead>
        <tbody>
        <tr>
        <td>O RESULTS</td>
        <td>HAS NOT TRACKING</td>
        </tr>";
      }
      echo "</tbody></table></div>";

?>
