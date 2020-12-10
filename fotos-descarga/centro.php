
<div class=fotos>
    <h1> Center Gallery</h1>
    <p>Click over photos to download</p>
    <br/>
    

    <div class='containerfotos'>

    <?php
    require '../logeo.php';//conexion

$sql = "SELECT*FROM fotos WHERE region='C'";
$result = $link->query($sql);
      
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {  
  echo "
  <div class='imagensita' onclick=''>"."<img src='".$row["ruta"]."'/>
    <div class='info'>
      <p>".$row["descripcion"]."</p>
      <a href='".$row["ruta_descarga"]."'  download><button>Download</button></a>
    </div>
  </div>";
  }
  
} else {
  echo "NO results";
}
?>
</div>
    <!-- END CONTAINER-->
     </div>
    
    