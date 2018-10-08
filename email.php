<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futbolito</title>


    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


    <script src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/script2.js"></script>
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
          on_index = false;
        </script>

        <section id="SECTION">
          <section id="next1">
            <div id="overlay">
              <div id="next-matches">
          <section>
              <form action="enviar.php" method="post" name="form" class="form">
              <input type="text" id="buscador" placeholder="Email Emisor" name="emaile" value="" required="">
              <br>
              <input type="text" id="buscador" placeholder="Email Destino" name="emaild" value="" required="">
              <br>
              <input type="text" id="buscador" placeholder="Nombre y Apellido" name="name" value="">
              <br>

              <img src="1.jpg" id="screenshot" style="width: 35%; height: 20%; border:4px;">


              <br>
              <input type="submit" name="submit" value="Enviar email">
            </form>
          </section>
              </div>

            </div>

          </section>
        </section>

      </body>
        </html>
