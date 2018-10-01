<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futbolito</title>


    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>

  <body>
        <div  class="container-fluid" id="navbar">
          <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
              <div class="list-group border-0 card text-center text-md-left">
          <a href="#home1" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">HOME</span></a>
          <a id="next" href="#next1"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">PROXIMOS</span></a>
          <a id="search" href="#search1"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">BUSCAR</span></a>
          <a id="map" href="#map1"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">UBICANOS</span></a>
        </div>
      </div>

          <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
            <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
        </main>
    </div>
  </div>

>>>>>>> 36bbea975812cd07dcf483c748b951195228fed5

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
          </div>
        </div>
      </section>
    </section>


    <section id="SECTION">
      <section id="search1">
        <div id="overlay">
          <div id="search">
            <form class="form" action="search.php" method="post">
              <input type="text" id="buscador" name="team" value="">
              <select name="liga" id="competition-dropdown" id="competition">
              </select>
              <br>
              <input type="checkbox" name="pganados" value="1" id="checkbox1"><span>Partidos ganados</span>
              <br>
              <input type="checkbox" name="pempatados" value="1" id="checkbox2"><span>Partidos empatados</span>
              <br>
              <input type="checkbox" name="pperdidos" value="1" id="checkbox1"><span>Partidos perdidos</span>
              <br>
              <input type="checkbox" name="pfinalizados" value="1" id="checkbox2"><span>Partidos finalizados</span>
              <br>
              <input type="checkbox" name="pnofinalizados" value="1" id="checkbox3"><span>Partidos no finalizados</span>
              <br>
              <br>
              <br>
              <input type="submit" value="Submit">
            </form>

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


</html>
>>>>>>> before discard
