<?php include 's.php';?>
<?php include 's_valida.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="products.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
<?php include 'navbar.php';?>
<section class="tilulo">
<h1>PRODUCTS</h1>
<img src="icons/linea.png" alt="linea.png" height="auto" width="80%">

<p>For a more appropriate search, first select "Destinations", later "Interests" and then the "city" </p>
</section>



<section id=products>

  <section class="parte1">

          <!-- ===========================================================BOTONES DE CONTROL===============================================================-->

    <div class="container0">
      <h1>DESTINATIONS</h1>
     <div class="d1">
          <div>
          <input type="radio" name="rGroup" value="allperu" id="r1" checked="checked"/>
          <label  id="allperu" for="r1"></label>
          <p>All Peru</p>
          </div>

          <div>
          <input type="radio" name="rGroup" value="N" id="r2"/>
          <label  id="north" for="r2"></label>
          <p>North</p>
          </div>

          <div>
          <input type="radio" name="rGroup" value="C" id="r3"/>
          <label id="center" for="r3"></label>
          <p>Center</p>
          </div>

          <div>
          <input type="radio" name="rGroup" value="S" id="r4"/>
          <label  id="south"  for="r4"></label>
          <p>South</p>
          </div>
      </div>

      <!--===========================================================Ciudades==================================-->
      <div id="ciudades">

      <input type="radio" name="rcitys" value="0" id="a0" checked>
      <label  class="claseboton N" for="a0">All</label>

      <input type="radio" name="rcitys" value="1" id="f1" >
      <label  class="claseboton N" for="f1">Chachapoyas</label>

      <input type="radio" name="rcitys" value="2" id="f2"/>
      <label  class="claseboton N" for="f2">Cajamarca</label>

      <input type="radio" name="rcitys" value="3" id="f3"/>
      <label  class="claseboton N" for="f3">Chiclayo</label>

      <input type="radio" name="rcitys" value="6" id="f4"/>
      <label  class="claseboton N" for="f4">Iquitos</label>

      <input type="radio" name="rcitys" value="7" id="f5"/>
      <label  class="claseboton N" for="f5">Trujillo</label>


    <!--====centro=====================-->

      <input type="radio" name="rcitys" value="0" id="a1">
      <label  class="claseboton C" for="a1">All</label>

     <input type="radio" name="rcitys" value="11" id="f6"/>
      <label class="claseboton C"  for="f6">Paracas</label>

      <input type="radio" name="rcitys" value="13" id="f7"/>
      <label class="claseboton C"  for="f7">Lima</label>

      <input type="radio" name="rcitys" value="14" id="f8"/>
      <label class="claseboton C"  for="f8">Nazca</label>

      <input type="radio" name="rcitys" value="15" id="f9"/>
      <label  class="claseboton C" for="f9">Ica</label>

    <!--======sur=================================-->

      <input type="radio" name="rcitys" value="0" id="a2">
      <label  class="claseboton S" for="a2">All</label>

       <input type="radio" name="rcitys" value="18" id="f10"/>
      <label   class="claseboton S" for="f10">Cuzco</label>

      <input type="radio" name="rcitys" value="19" id="f11"/>
      <label  class="claseboton S" for="f11">Puerto Maldonado</label>

      <input type="radio" name="rcitys" value="20" id="f12"/>
      <label  class="claseboton S" for="f12">Machu Picchu</label>

      <input type="radio" name="rcitys" value="21" id="f13"/>
      <label  class="claseboton S" for="f13">Puno</label>

      <input type="radio" name="rcitys" value="22" id="f14"/>
      <label  class="claseboton S" for="f14">Arequipa</label>

      <input type="radio" name="rcitys" value="23" id="f15"/>
      <label  class="claseboton S" for="f15">Colca</label>

      <input type="radio" name="rcitys" value="24" id="f16"/>
      <label  class="claseboton S" for="f16">Sacred Valley</label>

      </div>



<!--================================================Contenido de las ciudades=============================-->
  </div>



    <div class="container0">
        <h1>INTERESTS</h1>
        <div class="d2">

          <div>
          <input type="radio" name="rGroup2" value="all" id="r5" checked="checked"/>
          <label id="all" for="r5"></label>
          </div>

          <div>
          <input type="radio" name="rGroup2" value="1" id="r6"/>
          <label id="adventure" for="r6" ></label>
          <p>Adventure</p>
          </div>

          <div>
          <input type="radio" name="rGroup2" value="2" id="r7"/>
          <label id="family" for="r7"></label>
          <p>Family</p>
          </div>

          <div>
          <input type="radio" name="rGroup2" value="3" id="r8" />
          <label id="cousine" for="r8"></label>
          <p>Cousine</p>
          </div>

          <div>
          <input type="radio" name="rGroup2" value="4" id="r9"/>
          <label id="cultural" for="r9" ></label>
          <p>Cultural</p>
          </div>

          <div>
          <input type="radio" name="rGroup2" value="5" id="r10" />
          <label  id="mistic" for="r10" ></label>
          <p>Mistic</p><p>Tourism</p>
          </div>

          <div><input type="radio" name="rGroup2" value="6" id="r11"/>
          <label id="natural"  for="r11" ></label>
          <p>Naturalist</p>
          </div>

      </div>
    </div>

  </section>


    <!---==========================================================================PAQUETES===============================================================-->
    <section class="parte2">
  <div class="container">
<!--------------------------------------->
<?php include 'paquetes.php';?>

<!--------------------------------------->
</div>

      </section>
</section>



<!--===============================================================================SCRIPT================================================================-->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">

$(document).ready(function()
{
//valor del primer, segundo, y tercer filtro
var radioValue="", radioValue2="", radioValue3="";
var x,arr1,yy;
var arre;

 //array de elementos con la clase card
 x=document.getElementsByClassName("card");
 //array de los elementos ciudad
yy = document.getElementsByClassName("city");

      if(radioValue=="" && radioValue2=="" && radioValue3=="")
      {
        for(var i=0;i<x.length;i++)
                {
                  AddClass(x[i],"show");
                }

      }

$("input[type='radio']").click(function()
{
            //valor de la region
            radioValue = $("input[name='rGroup']:checked").val();
            //valor del segmento
            radioValue2 = $("input[name='rGroup2']:checked").val();
            //valor de la ciudad
            radioValue3 = $("input[name='rcitys']:checked").val();

            //alert("region: "+radioValue+" Interes: "+radioValue2+" ciudad: "+radioValue3 );


          for(var i=0;i<x.length;i++)
        {
              //saca las clases del elemento el array arr1
              arr1 = x[i].className.split(" ");    //arr1=[card,2,4,c]
              arre = yy[i].className.split(" ");  //arre=[city,11]

              //quita la clase 'card'
              arr1.shift(); //ahora quedan los filtros en el arr2 =[2,4,C] de x[i]
              //quita la clase 'city'
              arre.shift(); //ahora quedan los filtros en arre = [11]


              //1.- D     I   C
              //    all  all  0
              if(radioValue =="allperu" && radioValue2 =="all" && radioValue3 =="0")
              {
               AddClass(x[i],"show");
              }

               //2.- D     I   C
              //    !all  all  0
              if(radioValue !="allperu" && radioValue2 =="all" && radioValue3=="0")
             {
              var tiene=false;
             RemoveClass(x[i],"show");

                for(var j=0;j<arr1.length;j++)
                {
                  if( radioValue == arr1[j] )
                  {tiene=true;}
                }
                if(tiene==true)
                {
                  AddClass(x[i],"show");
                }
             }


             //3.- D     I    C
              //  all   !all  0
             if(radioValue =="allperu" && radioValue2 !="all" && radioValue3 =="0" )
              {
                var tiene=false;
              RemoveClass(x[i],"show");
                for(var j=0;j<arr1.length;j++)
                {
                  if( radioValue2 == arr1[j] )
                  {tiene=true;}
                }
                if(tiene==true)
                {AddClass(x[i],"show");}
              }

             //4.- D     I   C
              //  !all  all  0
             if(radioValue !="allperu"  && radioValue2 =="all" && radioValue3 !="0")
             {
               var tienee=false;
               var tienee2=false;

              RemoveClass(x[i],"show");

                for(var j=0;j<arr1.length;j++)
                {
                  if( radioValue == arr1[j] )
                  {tienee=true;}
                }
                  if(radioValue3 == arre[0])
                  {tienee2=true;}
                if(tienee==true && tienee2==true )
                {
                  AddClass(x[i],"show");
                 }
             }

              //5.- D     I    C
              //  !all   !all  !0
              if(radioValue !="allperu" && radioValue2 !="all" &&  radioValue3 !="0" )
              {
                var tienee=false;
                var tienee2=false;
                var tienee3=false;

                RemoveClass(x[i],"show");

                for(var j=0;j<arr1.length;j++)
                {
                  if( radioValue == arr1[j] )
                  {tienee=true;}
                  if( radioValue2 == arr1[j] )
                  {tienee2=true;}
                }
                  if(radioValue3 == arre[0])
                  {tienee3=true}

                if(tienee == true && tienee2 == true && tienee3 == true)
                {AddClass(x[i],"show");}

              }

              //6.- D     I    C
              //  !all   !all  0
              if(radioValue !="allperu" && radioValue2 !="all" &&  radioValue3 =="0" )
              {
                var tiene=false;
                var tiene2=false;

                RemoveClass(x[i],"show");

                for(var j=0;j<arr1.length;j++)
                {
                  if( radioValue == arr1[j] )
                  {tiene=true;}
                  if( radioValue2 == arr1[j] )
                  {tiene2=true;}
                }

                if(tiene == true && tiene2 == true)
                {AddClass(x[i],"show");}

              }

         }
});

function RemoveClass(element, name) {
  var i, arre1, arr2;
  arre1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arre1.indexOf(arr2[i]) > -1) {
      arre1.splice(arre1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arre1.join(" ");
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

//----------------------------------------------ciudades--------------------
var arre;
var xx=document.getElementsByClassName("claseboton");

$("#allperu").on("click", function()
  {
    //pone show classe a  las ciudades norte
    for(var i=0 ; i< xx.length ; i++)
        {
           xx[i].classList.remove("showc");
        }
    });

  $("#north").on("click", function()
  {
    document.getElementById('a0').checked = true;

   //pone show classe a  las ciudades norte
   for(var i=0 ; i< xx.length ; i++)
        {
              //saca las clases del elemento el array arr1
              arre = xx[i].className.split(" ");
              arre.shift();

              RemoveClass(xx[i], "showc");

            if(arre[0]=="N")
              {
                AddClass(xx[i], "showc");
              }
              else
              {
                RemoveClass(xx[i], "showc");
              }

        }

  });

  $("#center").on("click", function()
  {
    document.getElementById('a1').checked = true;

      //pone show classe a  las ciudades norte
   for(var i=0 ; i< xx.length ; i++)
        {
              //saca las clases del elemento el array arr1
              arre = xx[i].className.split(" ");
              arre.shift();

              RemoveClass(xx[i], "showc");

            if(arre[0]=="C")
              {
                AddClass(xx[i], "showc");
              }
              else
              {
                RemoveClass(xx[i], "showc");
              }

        }

 });

  $("#south").on("click", function()
  {
    document.getElementById('a2').checked = true;

      //pone show classe a  las ciudades norte
   for(var i=0 ; i< xx.length ; i++)
        {
              //saca las clases del elemento el array arr1
              arre = xx[i].className.split(" ");
              arre.shift();

              RemoveClass(xx[i], "showc");

            if(arre[0]=="S")
              {
                AddClass(xx[i], "showc");
              }
              else
              {
                RemoveClass(xx[i], "showc");
              }

        }

  });
 });

</script>
</body>
</html>
