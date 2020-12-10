<?php include 's.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Valencia Travel Cusco IntraNet</title>
<link rel="icon" href="favicon.ico">
<style>
  body
{max-width: 1440px;
    background-color:#333;
    margin: auto;
    background-image:url(images/fondo.png);
}
#home
{
  color:#F0F8FF;
  background-color: #2A2C2F;
  background-image:url(home.png);
    /*padding:50px;  */
    background-size:cover;
}
#home li
{font-size:18px;}
h2
{margin:0;
  color:#007EB1;
}

/*----------------------------------------------------VIDEO------------------------------------*/
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  /*position: fixed;*/
  right: 0;
  bottom: 0;
  width: 100%;
  /*min-height: 100%;*/
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 50%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
.pausee {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

.pausee:hover {
  background: #ddd;
  color: black;
}
  </style>
</head>
<body>
<?php include 'navbar.php';?>

<section id=home>

<!-- The video -->
<!--video autoplay loop muted id="myVideo"-->
    <video autoplay loop  id="myVideo">
  <!--source src="amazon.mp4" type="video/mp4"-->
   <source src="videos-descarga/general/valencianew.mp4" type="video/mp4">
  Sorry, your browser doesn't support embedded videos...
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">

<h1>Hello! <b><?php echo htmlspecialchars($_SESSION["nombre"]);?>
   Welcome to Our Intranet.</h1>
  <p>Culture & Heritage: Our immersion tours cover all bases in Peru, complete with a knowledgeable and local guide to help along the way...</p>
  <!-- Use a button to pause/play the video with JavaScript -->
  <button class="pausee" onclick="FunctionP()">Pause</button>
  <!--button class="pausee" onclick="disableMute()" type="button">Enable sound</button-->
</div>


<script>


// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("pausee");

// Pause and play the video, and change the button text
function FunctionP() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}


var vid = document.getElementById("myVideo");
function disableMute() {
  vid.muted = false;
}
</script>

</section>

</body>
</html>
