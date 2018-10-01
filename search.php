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


    </header>

      <body>


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
      var pempatados = ('<?php echo $pganados; ?>');
      var pperdidos = ('<?php echo $pganados; ?>');
      var pfinalizados = ('<?php echo $pganados; ?>');
      var pnofinalizados = ('<?php echo $pganados; ?>');

      llenar(nombre,liga,pganados,pempatados,pperdidos,pfinalizados,pnofinalizados)






      </script>
        </html>
