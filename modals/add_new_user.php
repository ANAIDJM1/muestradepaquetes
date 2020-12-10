<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>ADD NEW USER</h2>
  </div>
  <div class="modal-body">

<?php
  echo " <form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
?>

  <div class='form-group col-md-6'>
    <label for='nombre'>Complete Name: </label>
    <input type='text' class='form-control' name ='nombre' required/>
  </div>

  <div class='form-group col-md-6'>
    <label for='user_role'>User Role:</label>
        <select name='user_role' class='form-control'>
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
    <input  type='text' class='form-control' name ="username" required/>
  </div>

  <div class='form-group col-md-6'>
    <label for='id_user'>Some Identification number (ejm: passport number): </label>
    <input onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"
     type='text' class='form-control' name ='id_user' required/>
  </div>

  <div class='form-group col-md-6'>
    <label for='password'>New Password: </label>
    <div class="passworde"  >
      <input type='password' class='form-control' name ='password' id="pwd" required/>
      <input id ="showpas" name="showpas" type="checkbox" onclick="showpass()">
      <label class="ojito" for="showpas"></label>
    </div>
  </div>

  </div>
  <div class="modal-footer">
    <div class='botone'>
  <button type='submit' onclick="identifica()">ADD NEW USER</button>
</form>
</div>
  </div>
</div>


<!--=========================================ENVIAR DATOS A LA BD===================================================-->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id_user  =$_REQUEST['id_user'];
$username = $_REQUEST['username'];
$password =$_REQUEST['password'];
$nombre = $_REQUEST['nombre'];
$user_role = $_REQUEST['user_role'];

$sql = "INSERT INTO usuarios_intranet (id_user,
  username,
  password,
  nombre,
  user_role)
VALUES
('$id_user','$username','$password','$nombre','$user_role')";

if(mysqli_query($link, $sql)){
    echo "<script>alert('Records added successfully!');</script>";
} else{
    echo "<script>alert(ERROR: Could not able to execute $sql." . mysqli_error($link).");</script>";
}

// Close connection
mysqli_close($link);
}

?>

<script type="text/javascript">

//quitar espacios en blancos en username

var field = document.querySelector('[name="username"]');
field.addEventListener('keypress', function ( event ) {
 var key = event.keyCode;
  if (key === 32) {
    event.preventDefault();
  }
});

var field2 = document.querySelector('[name="id_user"]');
field2.addEventListener('keypress', function ( event ) {
 var key = event.keyCode;
  if (key === 32) {
    event.preventDefault();
  }
});

//===================================showpasss

function showpass() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
