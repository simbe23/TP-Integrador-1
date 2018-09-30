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
      var settings3 = {				//CONECCION CON JSON API
        "async": true,
        "crossDomain": true,
        "url": "http://api.football-data.org/v2/teams",
        "method": "GET",
        "headers": {
        "X-Auth-Token": "caec1c63629745d684eabb0a0121f048",
        }
      }
      var nombre = '<?php echo $_POST["team"]; ?>'
      nombre = nombre.toLowerCase();

      $.ajax(settings3).done(function (datos3) {
          for (var i = 0; i < datos3.count; i++) {
             if (datos3.teams[i].name.toLowerCase().includes(nombre) == true) {
               var id = datos3.teams[i].id;
               var url = "http://api.football-data.org/v2/teams/"+ id +"/matches/"
               var settings4 = {				//CONECCION CON JSON API
                 "async": true,
                 "crossDomain": true,
                 "url": url,
                 "method": "GET",
                 "headers": {
                 "X-Auth-Token": "caec1c63629745d684eabb0a0121f048",
                 }
               }

                $.ajax(settings4).done(function (datos4) {
                         var pag = 1;
                         var totales = datos4.count;
                         var xPag = 4;
                         var nPag = Math.ceil(totales / xPag)-1;
                         var offset = (pag - 1) * xPag;
                         var hasta = pag * xPag;

                         function mostrarLista(desde,hasta){
                             var section = document.getElementById('next-matches');
                             for(var i = desde; i < hasta; i++){
                                 var myBox = document.createElement ('box');
                                 $(myBox).attr('id','box');
                                 var myLiga = document.createElement ('liga');
                                 $(myLiga).attr('id','liga');
                                 myLiga.textContent = datos4.matches[i].competition.name;
                                 myBox.appendChild(myLiga);
                                 var myEquipo1 = document.createElement ('equipo1');
                                 $(myEquipo1).attr('id','equipo1');
                                 myEquipo1.textContent = datos4.matches[i].homeTeam.name;
                                 myBox.appendChild(myEquipo1);



                                 var myResul1 = document.createElement('resul1');
                                 $(myResul1).attr('id','resul1');
                                 myResul1.textContent=datos4.matches[i].score.fullTime.homeTeam;
                                 // myResul1.textContent = '-';
                                 myBox.appendChild(myResul1);



                                 var myResul2 = document.createElement('resul2');
                                 $(myResul2).attr('id','resul2');
                                 myResul2.textContent=datos4.matches[i].score.fullTime.awayTeam;
                                 // myResul2.textContent = '-';
                                 myBox.appendChild(myResul2);






                                 var myEquipo2 = document.createElement ('equipo2');
                                 $(myEquipo2).attr('id','equipo2');
                                 myEquipo2.textContent = datos4.matches[i].awayTeam.name;
                                 myBox.appendChild(myEquipo2);
                                 var myFecha = document.createElement('fecha');
                                 $(myFecha).attr('id','fecha');
                                 var fecha = datos4.matches[i].utcDate
                                 fecha = fecha.substr(0,10) + '   '
                                 var hora = parseInt (datos4.matches[i].utcDate.substr(-9,2))-3;
                                 var hora2 = datos4.matches[i].utcDate.substr(-7,3) +' hs';
                                 fecha = fecha + hora + hora2;
                                 myFecha.textContent = fecha;
                                 myBox.appendChild(myFecha);




                                 section.appendChild(myBox);

                             }
                          }

                          function mostrarBotones(t){
                              var botones = '';
                              for(var i = 0; i < t; i++){
                                  var cada = '';
                                  cada = "<button type='button' "+
                                      "class='btn btn-info'>"+(i+1)+
                                      "</button>";
                                  botones += cada;
                              }

                              $('#botones').append(botones);
                          }

                          function quitarActivo(){
                              var losBotones = document.querySelectorAll('#botones button');
                              for(var i = 0; i < losBotones.length; i++){
                                  $(losBotones[i]).removeClass('active');
                              }
                          }

                          mostrarLista(offset,hasta);
                          mostrarBotones(nPag);

                          $('#botones').click(function(){
                            for (var i = 0; i < 4; i++) {
                              $("#box").remove();
                            }
                          });
                            // Activar el primer botón
                            $('#botones button:first-child').addClass('active');
                            // Poner oyentes a cada botón
                            var losBotones = document.querySelectorAll('#botones button');
                            for(var i = 0; i < losBotones.length; i++){
                                losBotones[i].addEventListener('click',function(){
                                    quitarActivo();
                                    var indice = parseInt(this.textContent);
                                    var o = (indice -1) * xPag;
                                    var h = indice * xPag;
                                    mostrarLista(o,h);
                                    $(this).addClass('active');
                                });
                            }})


                      // Activar el primer botón
                                   $('#botones button:first-child').addClass('active');

                                   // Poner oyentes a cada botón
                                   var losBotones = document.querySelectorAll('#botones button');
                                   for(var i = 0; i < losBotones.length; i++){
                                       losBotones[i].addEventListener('click',function(){
                                           quitarActivo();
                                           var indice = parseInt(this.textContent);
                                           var o = (indice -1) * xPag;
                                           var h = indice * xPag;
                                           mostrarLista(o,h);
                                           $(this).addClass('active');
                                       });
                                   }
                          


               }
             }




      })

      </script>
        </html>
