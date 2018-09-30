<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futbolito</title>


    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


    <script src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>

  <header class="header">
        <div id="navbar">
          <a id="home" href="#home1">HOME</a>
          <a id="next" href="#next1">PROXIMOS</a>
          <a id="search" href="#search1">BUSCAR</a>
          <a id="map" href="#map1">UBICANOS</a>
        </div>


    </header>







  <body>

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
            <div id="botones" class="btn-group btn-group-xs"
                 role="group" arial-label="grupo">
            </div>
          </div>

        </div>
      </div>
      </section>
    </section>


    <section id="SECTION">
      <section id="search1">
        <div id="overlay">
          <div id="search">
            <form class="form" action="search.html" method="get">
              <input type="input" id="buscador" value="">
              <select id="competition-dropdown" id="competition">
              <input type="submit" value="Submit">
            </form>

            </select>
          </div>
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
    var myLatLng = {lat: -34.904105, lng: -57.925242};


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
    </script>



    <!-- <body>

    <div class="container">

        <div class="row">
            <div class="page-header">
                <h1>Pruebas de JSON con paginador</h1>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Visitante</th>
                    </tr>
                </thead>
                <tbody id="listado">
                </tbody>
            </table>
            <div id="botones" class="btn-group btn-group-xs"
                 role="group" arial-label="grupo">
            </div>
        </div>

    </div> -->


</html>
