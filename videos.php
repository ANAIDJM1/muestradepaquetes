<?php include 's.php';?>
<?php include 's_valida.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Videos</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="media.css">
</head>
<body>
<?php include 'navbar.php';?>
<section class="tilulo">
<h1>VIDEOS</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">
</section>

<!--==========================================================================VIDEOS=============================================-->
<section id=products>

<p>Clic the collection below to to enter the corresponding Video Folder, download the file you need just for authorized use granted by VALENCIA TRAVEL AGENCY S.A.C</p>
<br/>

<ul>
  <li>
  <a href="#" id="norte">
    <span>NORTH - COLLECTION</span>
     <img src='images/nortev.jpg'/></a> </li>

  <li>
    <a href="#" id="centro">
    <span>CENTER - COLLECTION</span>
    <img src='images/centrov.jpg'/></a></li>

  <li>
    <a href="#"  id="sur">
    <span>SOUTH - COLLECTION</span>
    <img src='images/surv.jpg'/></a></li>
  <li>

   <span>INTERNATIONAL</span>
   <a href="errorpage.php">
    <img src='images/internationalv.jpg' /></a></li>
  <li >
    <span>MORE...</span>
    <a href="#" id="more">
    <img src='images/morev.jpg'/></a></li>
</ul>

  </section>

  <section id="contenido">
    <!--============Aqui va la lista de videos=========================================-->
  </section>


  <!--===================================================================Carga Contenido de los video lista==========================================-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script>
      $("#norte").on("click", function(){
        $("#contenido").load("videos-descarga/norte.html");
      });

      $("#centro").on("click", function(){
        $("#contenido").load("videos-descarga/centro.html");
      });

      $("#sur").on("click", function(){
        $("#contenido").load("videos-descarga/sur.html");
      });

      $("#more").on("click", function(){
        $("#contenido").load("videos-descarga/more.html");
      });

    </script>



</body>
</html>
