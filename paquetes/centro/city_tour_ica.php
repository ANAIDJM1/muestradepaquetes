<?php include '../../s.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ica City Tour</title>
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
  <img src="../../paquetes/centro/city_tour_ica/1.jpg" style="width:100%">
  <div class="text">Ica City</div>
</div>

<div class="mySlides fade">
  <img src="../../paquetes/centro/city_tour_ica/2.jpg" style="width:100%">
  <div class="text">Industrial Winery</div>
</div>

<div class="mySlides fade">
  <img src="../../paquetes/centro/city_tour_ica/3.jpg" style="width:100%">
  <div class="text">Regional Museum</div>
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
<h1>ICA CITY TOUR</h1>
</section>

<section>
<div class="textocorto">
<ul style="text-align:left;">
<li>LOCATION: ICA</li>
<li>TYPE OF TOUR: Culture, Families, Naturalist</li>
 <li> PLACES TO VISIT: Huacachina Lagoon – Regional Museum – Helena Chocolates Factory – Industrial Winery</li>
  <li>TOUR LENGTH: 6 hours.</li>
  <li> AVAILABILITY: All Year.</li>
  <li> MINIMUM ALTITUDE: 406 meters / 1,332 feet</li>
  <li> MAXIMUM ALTITUDE: 406 meters / 1,332 feet</li>
  <li> AGE MIN: 4</li>
</ul>
</div>
</section>

<!--================================================================ITINERARY====================================-->
<section>
<p class="hi">Itinerary:</p>


<button class="accordion">FULL DAY </button>
<div class="panel">
<p>
Pick up of the passengers to start our full Day performing the City Tour Ica + Buggies Sports and Sandboard.
 During  the tour we will see and visit Wine cellar and Restaurant "El Catador": The most touristic winery in Ica, we will visit
  its facilities to taste its wines, piscos, cachinas and to know the elements that are used for the elaboration of artisanal way, 
  besides the tourists will have time to have lunch, here You will find typical Ica food.
  <p> Oasis of Huacachina, we will enjoy an impressive landscape where we will find the Huacachina Lagoon surrounded by immense dunes,
   we will also see the monument to the Huacachina mermaid and the craft center of the place.
   To end our full day if the weather conditions are favorable we will enjoy
     watching the sunset in the desert (sunset). Transfer to the hotel or bus station, approximately 18h30 After having enjoyed a day
      full of fun and excitement. It is recommended to buy bus tickets at 19h00.
    
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
<td>-Tour Guide: Spanish/English </td><td>-Meals</td></tr>
<tr>
<td>-Transport: Van, Mini bus, Bus </td><td>-Entrance</td></tr>
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
