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


  </main>
</div>
</div>


    </header>

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
                <div id="botones" class="btn-group btn-group-xs"
                     role="group" arial-label="grupo">
                </div>
              </div>

            </div>
          </div>
          </section>
        </section>
      </body>
      <script>

      var nombre = '<?php echo $_POST["team"]; ?>'
      // nombre = nombre.toLowerCase();
      <?php if (!(isset ($_POST["liga"]))) {
                $liga = 0;
              }
            else {
              $liga = $_POST["liga"];}
            if (!(isset ($_POST["pganados"]))) {
                $pganados = 0;
                    }
            else {
                $pganados = $_POST["pganados"];}
            if (!(isset ($_POST["pempatados"]))) {
                $pempatados = 0;
                    }
            else {
                $pempatados = $_POST["pempatados"];}
            if (!(isset ($_POST["pperdidos"]))) {
                $pperdidos = 0;
                    }
            else {
                $pperdidos = $_POST["pperdidos"];}
            if (!(isset ($_POST["pfinalizados"]))) {
                $pfinalizados = 0;
                    }
            else {
                $pfinalizados = $_POST["pfinalizados"];}
            if (!(isset ($_POST["pnofinalizados"]))) {
                $pnofinalizados = 0;
                    }
            else {
                $pnofinalizados = $_POST["pnofinalizados"];}
    ?>
      var liga = ('<?php echo $liga; ?>');
      var pganados = ('<?php echo $pganados; ?>');
      var pempatados = ('<?php echo $pempatados; ?>');
      var pperdidos = ('<?php echo $pperdidos; ?>');
      var pfinalizados = ('<?php echo $pfinalizados; ?>');
      var pnofinalizados = ('<?php echo $pnofinalizados; ?>');

      llenar(nombre,liga,pfinalizados,pnofinalizados,pganados,pempatados,pperdidos)






      </script>
        </html>
