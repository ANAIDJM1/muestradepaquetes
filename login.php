<?php
session_start();
// ve si el usuario ya esta legeado, si es si, redirije a
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}

// Incluye el config file
require_once "logeo.php";

// Define variables e inicializar con valores vacios
$username = $password = "";
$username_err = $password_err = "";

// procesa formulario cuando se envia
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username vacio?
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
         }

    // password vacio?
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Valida credenciales
    if(empty($username_err) && empty($password_err)){
        // Prepara el  select statement
        $sql = "SELECT*FROM usuarios_intranet WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Vincula las variables
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parametros
            $param_username = $username;

            // Intentar ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){

                // guarda resultados
                mysqli_stmt_store_result($stmt);

                // verifica si el usuario existe, si existe verifica password
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    // vincula variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$nombre,$user_role);

                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password)
                        {
                            // Password es correcto, inicia sesion nueva
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_user"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["nombre"] = $nombre;
                            $_SESSION["user_role"] = $user_role;


                            // Redirect user to welcome page
                            header("location: admin.php");
                        }
                        else
                        {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                }
                else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later...";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!--=================================================================================================front end================================================================-->


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

<link rel="stylesheet" href="paquetes/styles.css">
<link rel="icon" href="favicon.ico">
<style>
body
{
  background-image:url(images/fondo.png);
}
label
{
  margin-left: 15px;
  color:white;
  font-size:20px;
}
input
{
  margin:15px;
  height:30px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
button
{
  background-color: #05b8ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: auto;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#login, #form1
{
  width:300px;
  display:flex;
  flex-direction: column;
  margin: auto;
  text-align: center;
}
p
{color:white;}
</style>
</head>
<body>

<section id="login">

<img src="images/home2.png" alt="logo" height="200px;">

  <p>Please fill in your credentials to login.</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form1">

  <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
  <label>USER</label>
  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
  <span class="help-block"><?php echo $username_err; ?></span>
  </div>

  <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
   <label>PASSWORD</label>
  <input type="password" name="password" class="form-control">
   <span class="help-block"><?php echo $password_err; ?></span>
   </div>

<div class="form-group">
<button type="submit" form="form1" value="Submit">Login</button>
</div>
</form>

</section>
</body>
</html>
