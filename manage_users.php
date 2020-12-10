<?php include 's.php';?>
<?php include 's_valida.php';?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html;">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Users</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="managing.css">
</head>
<body>
<?php include 'navbar.php';?>
<section class="tilulo">
<h1>Manage Users</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">
</section>

<!--================================USUARIOS==================================-->
<section class="cuerpo">
<button class="reload"  onclick="reload()" > </button>

  <?php

require_once('logeo.php');

 $sql = "SELECT * FROM usuarios_intranet";

  $usuario = $link->query($sql);

  if ($usuario->num_rows > 0)
  {
    echo "<div class='table-cont' id='table-cont'>
    <table class='usuario'>
    <thead>
      <tr>
          <th>Name</th>
          <th>Username</th>
          <th>User Role</th>
          <th>Actions</th>
      </tr>
    </thead>
    <tbody>";

    while($row = $usuario->fetch_assoc()) {

$ID = $row["id_user"];
$nombre = $row["nombre"];

  echo "<tr>"."<td>". $row["nombre"]."</td>"
        ."<td>".$row["username"]."</td>"
        ."<td class='role'>".$row["user_role"]."</td>"
        ."<td style='text-align: center;'>".
        "<a class='editt' href='#' onclick='modalEditar(".$ID.",\"".$nombre.
        "\",\"".$row["user_role"]."\",\"".$row["username"]."\",\"".$row["password"]."\");'>
        <img src='icons/edit.png'  height='40' width='40'>
        </a>
        <a class='as' href='#' onclick='DeleteUser(".$ID.",\"".$nombre."\");'>
        <img class='basurerito' src='icons/delete.png'  height='40' width='40'>
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

<section class="adiciona">
<button type="button" class="btn-info" id="adicionarepo" onclick="abremodal2()">
  Add New User
</button>
</section>
<p>
Tenga cuidado al eliminar un usuario, pues tambien se podria borrar
los registros que realizo en el area de "Reports" !!
<br/>
Be careful when deleting a user, could also be deleted
the records He/She made in the area of "Reports" !!
</p>

<h4>PERMISSIONS OF ROLES: </h4>

<div class="cuerpo">
  <div class='table-cont' id='table-cont'>

  <table class='usuario'>
  <thead>
    <tr>
        <th>Role</th>
        <th>Description</th>
        <th>Permissions</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td>admin</td><td> &#128526; Administrator</td><td>
    <ul>
      <li>Complete Access </li>
    </ul>
  </td>
  </tr>
  <tr>
    <td>marketing</td>
    <td>&#128176; Customer, staff that sells</td>
    <td>
      <ul>
        <li>Photos </li>
        <li>Videos </li>
        <li>Products</li>
        <li>Off the Beaten Track</li>
        <li>Presentations</li>
      </ul>
   </td>
  </tr>
  <tr><td>agent</td> <td>&#128243; Operations agent from USA</td> <td>
    <ul>
      <li>Access 80%</li>
      <li>NOT include user management </li>
      <li>Reports just for United States. </li>
    </ul>
  </td></tr>
  <tr><td>agentUK</td> <td>&#128243; Operations agent from United Kindom</td> <td>
    <ul>
      <li>Access 80%</li>
      <li>NOT include user management </li>
      <li>Reports just for United Kindom.</li>
    </ul>
  </td></tr>
  <tr><td>agentAUD</td> <td>&#128243; Operations agent from Australia</td> <td>
    <ul>
      <li>Access 80%</li>
      <li>NOT include user management </li>
      <li>Reports just for Australia.</li>
    </ul>
  </td></tr>
  <tr><td>SEM</td> <td> &#8987; Temporally Access </td> <td>
    <ul>
    <li>Photos</li>
  </ul>
</td></tr>
</tbody>
</table>
</div>

<!--======================= The Modales ================-->
<!-- The Modal ADD USER -->
<div id="addnewusermodal" class="modal">
  <?php include 'modals/add_new_user.php';?>
</div>

<!-- The Modal EDIT USER -->
<div id="modaleditar" class="modal">
  <?php include 'modals/edit_user.php';?>
</div>


<!-- The Modal DELETE USER -->
<div id="modalborrar" class="modal">
  <?php include 'modals/erase_user.php';?>
</div>


  <!--=================================================SCRIPT==============================================================-->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

$(document).ready(function()
{

  /*------------FUNCION para deshabilitar eliminar admin y cambiar de icono*/
  var x,y,z,as;
  x = document.getElementsByClassName('role');
  z = document.getElementsByClassName('basurerito');
  as =document.getElementsByClassName('as');

  for(let h=0;h<x.length;h++)
  {
    //toma el valor del rol
    y= x[h].innerHTML

      if(y=="admin"){
      //cambia imagen boton basurerito
      z[h].src ='icons/delete2.png';
        //desactiva boton basurerito
        as[h].classList.add("desabilita");
      }
  }
 });

  /*------------------------------------------MODAL ADD NEW USER---------------------------------------*/

  // Get the modal
  var modal = document.getElementById("addnewusermodal");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal
  function abremodal2(){
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  /*==================================BORRADO DE USUARIO====================*/

  // Get the modal
  var modalb = document.getElementById("modalborrar");
  // Get the <span> element that closes the modal
  var spanb = document.getElementsByClassName("close1")[0];

  // When the user clicks the button, open the modal
  function DeleteUser(id_user,nombresito){
  modalb.style.display = "block";
    //alert(id_user);
    //enviar el id_user al modal abierto
    document.getElementById("idunico").value = id_user;
    document.getElementById("nombreunico").value = nombresito;
  }

  // When the user clicks on <span> (x), close the modal
  spanb.onclick = function() {
    modalb.style.display = "none";
  }



 /*==================================EDICION DE USUARIO====================*/
 // Get the modal
 var modale = document.getElementById("modaleditar");
 // Get the <span> element that closes the modal
 var spane = document.getElementsByClassName("close2")[0];

 // When the user clicks the button, open the modal
 function modalEditar(id_user,nombresito,roleedit,username,password){
   modale.style.display = "block";

   document.getElementById("idunicoedicion").value = id_user;
   document.getElementById("nombreedicion").value = nombresito;
   document.getElementById("roleedit").value = roleedit;
   document.getElementById("editusername").value = username;
   document.getElementById("pwd1").value = password;
 }

 // When the user clicks on <span> (x), close the modal
 spane.onclick = function() {
   modale.style.display = "none";
 }

/*----------------------------------CLOSE MODALS----------------------------------------*/

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
    if (event.target == modalb) {
      modalb.style.display = "none";
    }
    if (event.target == modale) {
      modale.style.display = "none";
    }
  }


  /*-----------------------------------RELOAD---------------------------------*/
  function reload()
  {
  window.location.href = window.location.href;
  }

</script>

</body>
</html>
