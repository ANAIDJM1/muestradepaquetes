<?php include 's.php';?>
<?php include 's_valida.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Photos</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="media.css">
</head>
<body>
<?php include 'navbar.php';?>
<section class="tilulo">
<h1>PHOTOS</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">
</section>

<!--==========================================================================FOTOS=============================================-->
<section id=products>

<p>Click the collection below to to enter the corresponding gallery, download the file you need just for authorized use granted by VALENCIA TRAVEL AGENCY S.A.C</p>
<br/>

<ul>
  <li>
  <a href="#" id="norte" onclick="norte()">
    <span>NORTH - COLLECTION</span>
     <img src='images/norte.jpg'/></a> </li>

  <li>
    <a href="#" id="centro" onclick="center()">
    <span>CENTER - COLLECTION</span>
    <img src='images/centro.jpg'/></a></li>

  <li>
    <a href="#"  id="sur" onclick="sur()">
    <span>SOUTH - COLLECTION</span>
    <img src='images/sur.jpg'/></a></li>
  <li>

   <span>INTERNATIONAL</span>
   <a href="errorpage.php">
    <img src='images/international.jpg' /></a></li>
  <li >
    <span>MORE...</span>
    <a href="errorpage.php">
    <img src='images/more.jpg'/></a></li>
</ul>

  </section>



  <section id="contenido">
    <!--============Aqui va la galeria=========================================-->
  </section>



  <!--===================================================================Carga Contenido de la galeria==========================================-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script>
     function norte(){
        $("#contenido").load("fotos-descarga/norte.php");
      }

      function center(){
        $("#contenido").load("fotos-descarga/centro.php");
      }

      function sur(){
        $("#contenido").load("fotos-descarga/sur.php");
      }

    </script>



</body>
</html>
