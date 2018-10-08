<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futbolito</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/html2canvas.js"></script>
  </head>

  <body>
    <div class="topnav" id="myTopnav">
      <a href="#home1" id="home" class="active">Home</a>
      <a href="#next1" id="next">Proximos</a>
      <a href="#buscar1" id="buscar">Buscar</a>
      <a href="#map1" id="map">Contacto</a>
      <a href="javascript:void(0);" class="icon" onclick="expandir()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <script type="text/javascript">
      on_index = true;
    </script>

     <section id="SECTION">
      <section id="home1">
      	<div id="overlay">
          <div id="DIV_3">
        		<div id="DIV_4">
        			<div id="DIV_5">
        				<h6 id="H6_6">
        					Todo el futbol al alcance
        				</h6>
        				<h1 id="H1_7">
        					DE UN CLICK
        				</h1>
        			</div>
        		</div>
        	</div>
      	</div>

        </section>
      </section>

    <section id="SECTION">
      <section id="next1">
        <div id="overlay">
          <div id="next-matches">
            <div id="botones" class="btn-group btn-group-lg pagination pagination-lg"
                 role="group" arial-label="grupo">
            </div>
                                 <div id="share-buttons">
                      <a href="email.php" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                  </a>
                </div>
          </div>
        </div>
      </section>
    </section>


    <section id="SECTION">
      <section id="buscar1">
        <div id="overlay">
            <form class="form" action="search.php" method="post">
              <input type="text" id="buscador" placeholder="Nombre del equipo" name="team" value="">
              <br>
              <select name="liga" id="competition-dropdown" id="competition">
              </select>
              <br>
              <div class="tilde"><input type="checkbox" name="pfinalizados" value="1" class="checkbox1" id="mostrar" onchange="javascript:showContent()"><span>Partidos finalizados</span></div>
              <br>
              <div class="tilde"><input type="checkbox" name="pnofinalizados" value="1" class="checkbox1"><span>Partidos no finalizados</span>  </div>
              <div id="ocultos" style="display: none;">
                <div class="tilde"><input type="checkbox" name="pganados" value="1" class="checkbox1" ><span>Partidos ganados</span></div>
                <br>
                <div class="tilde">  <input type="checkbox" name="pempatados" value="1" class="checkbox1"><span>Partidos empatados</span></div>
                <br>
                <div class="tilde">  <input type="checkbox" name="pperdidos" value="1" class="checkbox1"><span>Partidos perdidos</span></div>
                <br>
              </div>
              <br>
              <br>
              <br>
              <input type="submit" value="Buscar">
            </form>

        </div>
      </section>
    </section>


    <section id="SECTION">
      <div id="map1">
        <div id="overlay">

        </div>
      </div>
    </section>







  </body>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQjuAku5FFwcCftW2Zvj6RMI8aXklpISU&callback=initMap"
    async defer></script>

    <script type="text/javascript">
    function initMap() {                                  //INICIALIZA MAPA
    var myLatLng = {lat: -34.922828800, lng: -57.956255500};


    var map = new google.maps.Map(document.getElementById('map1'), {
      center: myLatLng,
      zoom: 16
    });


    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Hello World!'
    });
  }

  function expandir() {
      var x = document.getElementById("myTopnav");

      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
    </script>


</html>
