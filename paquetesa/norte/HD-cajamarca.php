<?php include '../../s.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Half-Day Cajamarca</title>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="../paquetes.css">
<link rel="icon" href="../../favicon.ico">
</head>

<body>
<?php include '../../navbar.php';?>

<section>
<!--================================================================SlideShow Container====================================-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../../paquetesa/norte/HD-cajamarca/1.jpg" style="width:100%">
  <div class="text">Cajamarca Streets</div>
</div>

<div class="mySlides fade">
  <img src="../../paquetesa/norte/HD-cajamarca/2.jpg" style="width:100%">
  <div class="text">Main Square</div>
</div>

<div class="mySlides fade">
  <img src="../../paquetesa/norte/HD-cajamarca/3.jpg" style="width:100%">
  <div class="text">Cajamarca Church</div>
</div>


<a class="prevp" onclick="plusSlides(-1)">&#10094;</a>
<a class="nextp" onclick="plusSlides(1)">&#10095;</a>
</div>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";   
}
</script>
</section>
<!--================================================================SlideShow Container END====================================-->
<section class="tilulo">
<h1>Half-Day Cajamarca</h1>
</section>

<section>
<div class="textocorto">
<ul style="text-align:left;">
<li>LOCATION: CAJAMARCA</li>
 <li> TYPE OF TOUR: Families, Culture</li>
  <li>PLACES TO VISIT: Cajamarca.</li>
  <li>TOUR LENGTH: 4 hours.</li>
  <li>AVAILABILITY: All Year.</li>
  <li>MAXIMUM ALTITUDE: 2,750 meters / 9,022 feet</li>
  <li>MINIMUM ALTITUDE: 2,750 meters / 9,022 feet</li>
  <li>AGE MIN: 4</li>
</ul>
</div>
</section>

<!--================================================================ITINERARY====================================-->
<section>
<p class="hi">Itinerary:</p>


<button class="accordion">HALF DAY</button>
<div class="panel">
<p>
Visit the city of Cajamarca which holds an important place in the history of the conquest by the Spaniards of South America and Peru. Although previously an 
  important Inca city, it became a typical “colonial” city, well-known for its churches and colonial large houses conserved almost intact, it 
  is an alive museum that waits for you.  Also you will see the “Ransom Room” which is the famous site of the encounter between Francisco Pizarro
  and the Inca Atahualpa where Pizarro promissed to free Atahualpa if he filled the room with gold and silver. Atahualpa had the room filled, 
  but Pizarro broke his promise and subsequnently killed Atahualpa in the main square.
  
  THIS TOUR INFORMATION YOU COULD FIND IN "valenciatravelcusco.com"
</p>
</div>


</section>
<!--================================================================higlights====================================================-->
<section>
    <p class="hi">Highlights:</p>

<table class="steelBlueCols">
<thead>
<tr>
<th>Price Includes:</th>
<th>Not Included:</th>
</tr>
</thead>
<tbody>
<tr>
<td>-Transport: Half Day Tour</td><td>-Meals</td></tr>
<tr>
<td>-Tour Guide: Spanish/English</td><td></td></tr>
</tbody>
</table>
</section>
<!--================================================================Footer====================================-->
<section id="foot">
</section>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;

    if (panel.style.display === "block") {
      panel.style.display = "none";         
    } else {
       panel.style.display = "block";             
    }
    
  });
}
</script>


</body>
</html>
