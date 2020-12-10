
<div class="modal-content">
  <div class="modal-header">
    <span class="close2">&times;</span>
    <h2>EDIT USER</h2>
  </div>
  <div class="modal-body">


 <form action="modals/edicion.php" method='post'>
  <div class='form-group col-md-6'>
    <label for='nombre'>Complete Name: </label>
    <input type='text' id="nombreedicion" class='form-control' name ='nombre' value=" " required/>
    <input type='hidden' name='id_usuario' id="idunicoedicion" value=''>
  </div>

  <div class='form-group col-md-6'>
    <label for='user_role'>User Role:</label>
        <select name='user_role' id="roleedit" class='form-control' value="">
            <option value='admin' selected>admin</option>

            <?php

            $sqled = "SELECT role FROM user_type WHERE role != 'admin'";
            $rolesss = $link->query($sqled);

            if ($rolesss->num_rows > 0)
            {
            while($row = $rolesss->fetch_assoc()) {
                echo  "<option value=\"".$row["role"]."\">".$row["role"]."</option>";
              }
            }
            ?>

      </select>
    </div>

  <div class='form-group col-md-6'>
    <label for='username'>Username: </label>
    <input  type='text' class='form-control' id="editusername" name ="username" value="" required/>
  </div>

  <div class='form-group col-md-6'>
    <label for='password'>New Password: </label>
    <div class="passworde">
      <input type='password' class='form-control' name ='password' id="pwd1" value="" required/>
      <input id ="showpas1" name="showpas1" type="checkbox" onclick="showpass1()">
      <label class="ojito" for="showpas1"></label>
    </div>
  </div>

  </div>
  <div class="modal-footer">
    <div class='botone'>
  <button type='submit' onclick="identifica()">SAVE CHANGES</button>
</form>
</div>
  </div>
</div>


<script type="text/javascript">

function showpass1() {
  var y = document.getElementById("pwd1");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

//quita los espacios en blanco
var field = document.querySelector('[id="editusername"]');
field.addEventListener('keypress', function ( event ) {
 var key = event.keyCode;
  if (key === 32) {
    event.preventDefault();
  }
});

</script>
