<?php include 's.php';?>
<?php include 's_valida.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Presentations</title>
<link rel="icon" href="favicon.ico">
<style>
  body
{
    max-width: 1440px;
    background-color:#333;
    margin: auto;
    background-image:url(images/fondo.png);
}

#products
{color:#F0F8FF;
  background-color: #2A2C2F;
  padding:50px;
display:flex;
flex-wrap: wrap;
justify-content: space-around;
}
.diapo
{
  width:40%;
  height:auto;
  margin-bottom:20px;
  padding:5px;
}
.diapo a
{padding:0;
 height:30px;
}
.diapo a:hover
{background-color:#2A2C2F;}

.tilulo
{
  padding-top:15px;
text-align:center;
color:white;
background-color:#2A2C2F;
}
.tilulo h1
{margin:0px 0px 13px 0px;
 font-weight:400;}
/*==============================botonsitos next,prev*/
.foterd
{
  display: flex;
  justify-content: center;
  color:#F0F8FF;
  background-color: #2A2C2F;
  padding:15px;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previouss {
  background-color: #f1f1f1;
  color: black;
}

.nexts {
  background-color: #007eb1;
  color: white;
}

.round {
  border-radius: 50%;
}

.tilulo p
{margin:10px 0px 0px 0px ;}
/*===========================================MEDIA====================================================*/
@media (max-width: 768px)
{
  .diapo
{
  width:100%;
  margin-bottom:10px;
  padding:0px;
}
}
@media (max-width: 425px)
{
  #products
  {
    padding:20px;
  }

}

  </style>
</head>
<body>
<?php include 'navbar.php';?>

<section class="tilulo">
<h1>PRESENTATIONS</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">
<p>Click the blue button below the presentation if you need to download, some presentations may take time... please be patient</p>
</section>

<section id=products>

  <div class="diapo">
  <!--iframe de ppt embed-----------------100% x 367-->
  <iframe src="https://onedrive.live.com/embed?cid=D955945C368AEDC5&amp;resid=D955945C368AEDC5%21112&amp;authkey=AD26J58rFEGtgCw&amp;em=2&amp;wdAr=1.7777777777777777" width="100%" height="367px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
  <!--link de descarga del ppt-->
   <a href="ppts/diapo.pptx" download>
   <img src="icons/download.png" alt="download" width="auto" height="30">
  </a>
   </div>

  <!------------------------------------------------------->
   <div class="diapo">
  <!--iframe de ppt embed-----------------100% x 367-->
  <iframe src="https://onedrive.live.com/embed?cid=D955945C368AEDC5&amp;resid=D955945C368AEDC5%21116&amp;authkey=AP5hHGBW4P82HwI&amp;em=2&amp;wdAr=1.7777777777777777" width="100%" height="367px" frameborder="0">Esto es un documento de <a target="_blank" href="https://office.com">Microsoft Office</a> incrustado con tecnología de <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
  <!--link de descarga del ppt-->
   <a href="ppts/Peru-Real-Facts.pptx" download>
   <img src="icons/download.png" alt="download" width="auto" height="30">
  </a>
   </div>

<!----------------------100% x 367--------------------------------->
<div class="diapo">

</div>
<!------------------------------------------------------->
  <div class="diapo">

</div>
<!------------------------------------------------------->
  <div class="diapo">

</div>
<!------------------------------------------------------->
  <div class="diapo">

</div>
<!------------------------------------------------------->
</section>

<section class="foterd">

<a href="#" class="previouss round">&#8249;</a>
<a href="#" class="nexts round">&#8250;</a>
</section>




</body>
</html>
