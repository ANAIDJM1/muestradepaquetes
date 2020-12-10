
<?php
require_once('logeo.php');//conexion

$sql = "SELECT * FROM tour WHERE tipo='A'";
$tours = $link->query($sql);



/*EL FILTRO INCLUYE: SEGMENTOS SEPARADOS POR ESPACIO
Y REGION SEPARADA X ESPACIO TB
EJM: 1 2 6 N, eso significa adventure, family, naturalist, north

Consideraciones:
1: Adventure
2: Family
3: Cousine
4: Cultural
5: Mistic
6: Natural

N: Norte
C: Centro
S: Sur

ojo: considerar más adelante enlazar cn los segmentos y regiones
tablas en la DB ...

*/
$valor="";
$city="";

if ($tours->num_rows > 0)
{
 while($row = $tours->fetch_assoc())
 {

  $id_tour = $row["id_tour"];

  $id_city1 = $link->query("SELECT id_city FROM city_tour WHERE id_tour = $id_tour");

  if ($id_city1->num_rows > 0)
  {
  $id_city = mysqli_fetch_assoc($id_city1);

  $valor=$id_city["id_city"];

  $city1 = $link->query("SELECT nombre FROM city WHERE id_city = $valor");
  $city = mysqli_fetch_assoc($city1);
  }



echo "<div class='card ". $row["filtro"]."' onclick=''>".
"<img src='". $row["url"]."/stock.jpg'/>".
"<div class='info ".$row["id_tour"]."'>".
"<span class='city ".$valor."'></span>".
"<p>".$row["brief_desc"]."</p>".
"<a href='".$row["url"].".php'><button>Read More</button></a>".
"</div>
<div class='texto'>";
echo $row["titulo"];
echo" </div>
<div class='texto2'>".
$city["nombre"].
"</div>
</div>";

  }
}
else {
  echo "0 results";
}


$link->close();
?>
