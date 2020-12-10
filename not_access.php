<?php include 's.php';?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Not Access</title>
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
  padding:10px 50px 50px 50px; 
}
p,a
{
  text-decoration:none; 
  Color: white;
  font-size:50px;
}
.cuerpo
{
  justify-content:center;
    text-align:center;
  display:flex;
  margin:20px;

}
.cuerpo img
{
  margin-right:10px;
}
/*=============MEDIA=============================*/

@media (max-width: 425px)
{ 
  #products
  {
    padding:20px; 
  }

}
</style>
</head>


<!--============================================-->
<body>
<?php include 'navbar.php';?>

<section class="cuerpo">
<img src="images/not_access.png" alt="alpaca and owner" height="300" width="auto">
<div>
<p>Ooops! You don't have access to this section...</p>
<a href='https://www.valenciatravelcusco.com/admin/admin.php'>&#x1F519; Go back</a>
</div>
</section>
<!--===============https://www.valenciatravelcusco.com/admin/admin.php=============================-->

</body>
</html>
