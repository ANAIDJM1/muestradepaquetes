<?php include 's.php';?>
<?php include 's_valida.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reports</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="reports.css">

</head>
<body>
<?php include 'navbar.php';?>
<section class="tilulo">
<h1>REPORTS</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">
</section>

<section id=reportes>
    <p>Search by:</p>

 <form id="mainForm" name="mainForm">
    <input id="rad1" type="radio" name="radio" value="1" checked/>
    <label for="rad1">Campain Name</label>
    <input id="rad2" type="radio" name="radio" value="3" />
    <label for="rad2">Channel</label>
    <input id="rad3" type="radio" name="radio" value="4" />
    <label for="rad3">Contact Name</label>
    <input id="rad4" type="radio" name="radio" value="7" />
    <label for="rad4">Country</label>
    <input id="rad5" type="radio" name="radio" value="9" />
    <label for="rad5">Contract? </label>
</form>
<br/>
  <input type="text" id="myInput" class="inpute" onkeyup="searchcampain()" placeholder="Search for ...">

  <button class="btn-info" id="adicionarepo" onclick="abremodal()" >Add Report</button>
  <button class="reload"  onclick="reload()" > </button>
<?php

require_once('logeo.php');
//conexion

$sql = "SELECT * FROM reporte";
$reporte = $link->query($sql);

if ($reporte->num_rows > 0)
{
  echo "<div class='table-cont' id='table-cont'>
  <table class='reporte' id='myTable'>
  <thead>
    <tr>
        <th>Id</th>
        <th>Campain Name</th>
        <th>Initial Date</th>
        <th>Channel</th>
        <th>Contact</th>
        <th>Contact Mail</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Product</th>
        <th>Contract</th>
        <th>Contract Date</th>
        <th>Comment</th>
        <th>Tracking</th>
    </tr>
  </thead>
  <tbody>";

  while($row = $reporte->fetch_assoc()) {

echo "<tr id='myUL'>"."<td>". $row["id_reporte"]."</td>"
      ."<td>".$row["nombre_campanha"]."</td>"
      ."<td>".$row["fecha_inicial"]."</td>"
      ."<td>".$row["canal_captacion"]."</td>"
      ."<td>".$row["contacto"]."</td>"
      ."<td>".$row["correo_contacto"]."</td>"
      ."<td>".$row["telefono"]."</td>"
      ."<td>".$row["pais"]."</td>"
      ."<td>".$row["producto"]."</td>"
      ."<td>".$row["contrato"]."</td>"
      ."<td>".$row["fecha_contrato"]."</td>"
      ."<td style='text-align: center;'>".
      "<button class='accordion'></button>
<div class='panelac'>
  ".$row["comentario"]."</div>
      </td>
      <td class='seguilink'>
      <a onclick='seguimiento(".$row["id_reporte"].",\"".$row["nombre_campanha"]."\")'>
      <img src='icons/seguimientoh.png' height='25' width='25'>
      </a>
      </td>
      </tr>";
  }
}
else {
  echo "0 results";
}

echo "</tbody></table></div>";

?>



</section>


<!--======================= The Modal add user================-->

<div id="myModal" class="modal">

<?php include 'modals/add_report.php';?>

</div>

<!--======================= The Modal  vie tracking================-->

<div id="mytracking" class="modal">

<?php include 'modals/tracking.php';?>

</div>

<!-- ============================================== -->


<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
 /*--------------------Busqueda de datos de reporte--------------------------*/
 var radio=1;
document.mainForm.onclick = function(){
    radio = document.querySelector('input[name = radio]:checked').value;
  }

function searchcampain()
{
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[radio];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

/*--------------tabla queda stikyprimera fila-------------------*/
window.onload = function(){
  var tableCont = document.querySelector('#table-cont')
  /**
   * scroll handle
   * @param {event} e -- scroll event
   */
  function scrollHandle (e){
    var scrollTop = this.scrollTop;
    this.querySelector('thead').style.transform = 'translateY(' + scrollTop + 'px)';
  }

  tableCont.addEventListener('scroll',scrollHandle)
}

/*----------------------------------Accordion----------------------*/

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activea");
    var panelac = this.nextElementSibling;

    if (panelac.style.display === "block") {
      panelac.style.display = "none";
    } else {
       panelac.style.display = "block";
    }

  });
}

/*------------------------------------------MODAL add report---------------------------------------*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function abremodal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }}

/*------------------------------------------MODAL view Tracking---------------------------------------*/
// Get the modal
var modaltracking = document.getElementById("mytracking");

// Get the <span> element that closes the modal
var spant = document.getElementsByClassName("closetracking")[0];

// When the user clicks the button, open the modal

/*-------seguimiento(id_reporte)-----*/

function seguimiento(id_reporte,nombre_campanha)
{
//ENVIA AL FORMULARIO LOS DATOS
  document.getElementById("idcampanha").value = id_reporte;
  document.getElementById("campanha").innerHTML = nombre_campanha;

  modaltracking.style.display = "block";

    /*$.ajax({
        url: 'modals/tablatrak.php',
        type: 'POST',
        dataType:'json',
        data: {
            idrepo: id_reporte
        },
        success: function(msg) {
          console.log(msg);
          document.getElementById("tablita").innerHTML = msg;
        }
    });*/


    $.post("modals/tablatrak.php", {idrepo: id_reporte}, function(msg) {
      console.log(msg);
      document.getElementById("tablita").innerHTML = msg;} );

  }




// When the user clicks on <span> (x), close the modal
spant.onclick = function() {
  modaltracking.style.display = "none";}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modaltracking) {
    modaltracking.style.display = "none";
  }}


/*-----------------------------------RELOAD---------------------------------*/
  function reload()
  {
  window.location.href = window.location.href;
  }

</script>
</body>
</html>
