<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close1">&times;</span>
    <h2>ERASE USER</h2>
  </div>
  <div class="modal-body">



     <form action="modals/borrado.php" method="post">

  <div class='form-group col-md-6'>
    <label for='nombre'>User to Delete </label>
    <input type='text' class='form-control' id='nombreunico' name ='nombre' value="" disabled/>
      <input type='hidden' name='id_usuario' id="idunico" value=''>
  </div>

    <div class="">
      <p> &#x26A0;&#xFE0F;Esta seguro que desea borrar a este usuario?,
		se borrara los registros que hizo en el área de reportes /
		Are you sure you want to erase this user?, all information
		that he/she made in reports will be erased &#10071;</p>
    </div>

  </div>
  <div class="modal-footer">
    <div class='botone'>
  <button type='submit' name='eraseuseract' value='delete_user' >DELETE USER</button>
  <button type='submit' name='eraseuseract' value='no_delete_user'>NO DELETE</button>
</form>
</div>
  </div>
</div>
