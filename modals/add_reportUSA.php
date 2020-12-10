<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://www.solodev.com/assets/phone/jquery.mobilePhoneNumber.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>

<!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>ADD REPORT</h2>
    </div>


    <div class="modal-body">
<?php
echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>
<input type='hidden' name='id_user' value = '".htmlspecialchars($_SESSION["id_user"]). "'>";?>

  <div class='form-group col-md-6'>
  <label for='initialdate'>Initial Date: </label>
  <input type='date' class='form-control' name ='initialdate' required/>
  </div>

    <div class='form-group col-md-6'>
      <label for='campainname'>Campain Name:</label>
      <input type='text' class='form-control' name='campainname' placeholder='Campain Name' required/>
    </div>

  <div class='form-group col-md-6'>
  <label for='channel'>Channel:</label>
      <select name='channel' class='form-control'>
        <option value='ELA' selected>ELA</option>
        <option value='UK RP'>UK RP</option>
        <option value='WTM'>WTM</option>
    </select>
  </div>

  <div class='form-group col-md-6'>
    <label for='contact'>Contact:</label>
    <input type='text' class='form-control' name='contact' placeholder='Contact name...'>
  </div>

   <div class='form-group col-md-6'>
      <label for='contactmail'>Contact Mail:</label>
      <input type='email' class='form-control' name='mail' required/>
    </div>

    <div class='form-group col-md-6'>
      <label for='phone'>Phone:</label>
      <input type='tel' class='form-control' name='phone' id='telefono' >
    </div>

    <div class='form-group col-md-6'>
      <label for='country'>Country:</label>
      <input type='text' class='form-control' name='country' value='USA' disabled>
    </div>

    <div class='form-group col-md-6'>
      <label for='product'>Product:</label>
      <input type='text' class='form-control' name='product' placeholder='Tailor Made, New...'>
    </div>

    <div class='form-group col-md-6'>
      <label for='contrato'>Contract?</label>
      <select name='contrato' class='form-control' id='contrato'  onchange='laeleccion()' >
        <option  value='PENDIENTE' selected>PENDIENTE</option>
        <option  value='NO'>NO</option>
        <option  value='SI'>SI</option>
      </select>
    </div>

    <div class='form-group col-md-6'>
  <label for='contractdate'>Contract Date: </label>
  <input type='date' id='datepicker2' class='form-control' name ='contractdate'>

  </div>
<br/>
<div class='form-group'>
  <label for='FormControlTextarea1'>Comment: </label>
  <textarea class='form-control' id='FormControlTextarea1' name='FormControlTextarea1' rows='10'></textarea>
</div>

</div>
    <div class='modal-footer'>

    <div class='botone'>
  <button type='submit'>SAVE</button></div>
</form>
    </div>
  </div>

<!--===============================================================SCRIPT=========================================-->
<script>

document.getElementById("datepicker2").disabled = true;

//activa o desactiva la fecha de contrato segun la eleccion
function laeleccion()
{
    var eleccion = document.getElementById("contrato").value;

    if(eleccion=="SI")
    {
      document.getElementById("datepicker2").disabled = false;
    }
    else
    {
      document.getElementById("datepicker2").disabled = true;
    }

}
//----------------habilita solo numero telf


  jQuery(function($){
    var input = $('[type=tel]')
    input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
    input.bind('country.mobilePhoneNumber', function(e, country) {
      $('.country').text(country || '')
    })
  });

</script>



<!--=========================================ENVIAR DATOS A LA BD===================================================-->
<?php

require_once('logeo.php');

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
      ('$id_user','$fecha_inicial','$nombre_campanha','$canal_captacion','$contacto','$correo_contacto','$telefono','USA'
      ,'$producto','$contrato','$fecha_contrato','$comentario')";

      if(mysqli_query($link, $sql)){
          echo "<script>alert('Records added successfully!');</script>";
      } else{
          echo "<script>alert('ERROR: Could not able to execute $sql. " . mysqli_error($link)."');</script>";
      }

      // Close connection
      mysqli_close($link);

    }

    ?>
