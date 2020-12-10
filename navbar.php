<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url('https://fonts.googleapis.com/css?family=EB+Garamond&display=swap');

body {
  font-family: 'EB Garamond', serif;
  overflow-x:hidden;
  box-sizing:border-box;
}

.topnav {
  overflow: hidden;
  background-color: #2a2c2f;
  border-bottom: #476565 1px solid;
  z-index:2;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #007EB1;
  color: white;
}

.singout
{
  float: right !important;
  background-color: #007EB1;
}

.singout-out
{
 background-color: #7d4c4c;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  .singout
{
 width:100%;
}
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

/*===================================Scroll=================================*/

/* width */
::-webkit-scrollbar {
  width: 10px;

}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #476565;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #476565;
}

/*===========================Boton hacia arriba======================*/

#botontotop {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #7d4c4c; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#botontotop:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}

</style>

<!--==============================================================================NAVBAR=========================================================================-->

<div class="topnav" id="myTopnav">
  <a href="https://www.valenciatravelcusco.com/admin/admin.php" class="active">Home</a>
  <a href="https://www.valenciatravelcusco.com/admin/products.php">Products</a>
  <a href="https://www.valenciatravelcusco.com/admin/atipicproducts.php">off the beaten track</a>

  <div class="dropdown">
    <button class="dropbtn">Marketing</button>
    <div class="dropdown-content">
      <a href="https://www.valenciatravelcusco.com/admin/photos.php">Photos</a>
      <a href="https://www.valenciatravelcusco.com/admin/videos.php">Videos</a>
      <a href="https://www.valenciatravelcusco.com/admin/ppts.php">Presentations</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Reports</button>
    <div class="dropdown-content">
      <a href="https://www.valenciatravelcusco.com/admin/reports.php">Reports General</a>
      <a href="https://www.valenciatravelcusco.com/admin/reportsusa.php">Reports USA</a>
      <a href="https://www.valenciatravelcusco.com/admin/reportsuk.php">Reports UK</a>
      <a href="https://www.valenciatravelcusco.com/admin/reportsaud.php">Reports AUD</a>
    </div>
  </div>


  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

  <div class="dropdown singout">
  <button class="dropbtn">Valencia Travel Agency S.A.C</button>
    <div class="dropdown-content">
      <a href="https://www.valenciatravelcusco.com/admin/manage_users.php">Manage users</a>
      <a href="https://www.valenciatravelcusco.com/admin/logout.php" class="singout-out">Sing Out</a>
    </div>
  </div>
</div>

 <!--===================================================================boton hacia arriba=========================================-->

 <button onclick="topFunction()" id="botontotop" title="Go to top">▲</button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("botontotop").style.display = "block";
  } else {
    document.getElementById("botontotop").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

 //-------------------------------------------------------RESPONSIVE

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


 <!--===================================================================Disable click right========================================-->
<script language="JavaScript">

  window.onload = function() {
    document.addEventListener("contextmenu", function(e){

      alert(" Reserved rights of ©Valencia Travel Cusco");

      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
