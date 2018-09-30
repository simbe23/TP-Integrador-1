$(document).ready(function(){
	setBindings();

  $(window).scroll(function() {               //SCROLL CAMBIA COLOR HEADER
    if ($(this).scrollTop() > 100) {
      $('#navbar').addClass('header-scrolled');
    } else {
      $('#navbar').removeClass('header-scrolled');
    }
  });




  //Set each section's height equals to the window height     //FUNCIONES DEL SCROLL
  $('section').height($(window).height());
  /*set the class 'active' to the first element
   this will serve as our indicator*/
  $('section').first().addClass('active');

  /* handle the mousewheel event together with
   DOMMouseScroll to work on cross browser */
  $(document).on('mousewheel DOMMouseScroll', function (e) {
      e.preventDefault();//prevent the default mousewheel scrolling
      var active = $('section.active');
      //get the delta to determine the mousewheel scrol UP and DOWN
      var delta = e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0 ? 1 : -1;

      //if the delta value is negative, the user is scrolling down
      if (delta < 0) {
          //mousewheel down handler
          next = active.next();
          //check if the next section exist and animate the anchoring
          if ($(next).is("#SECTION")) {

             /*setTimeout is here to prevent the scrolling animation
              to jump to the topmost or bottom when
              the user scrolled very fast.*/
              var timer = setTimeout(function () {
                  /* animate the scrollTop by passing
                  the elements offset top value */
                  $('body, html').animate({
                      scrollTop: next.offset().top
                  }, 'slow');

                  // move the indicator 'active' class
                  next.addClass('active')
                      .siblings().removeClass('active');

                  clearTimeout(timer);
              }, 200);
          }

      } else {
          //mousewheel up handler
          /*similar logic to the mousewheel down handler
          except that we are animate the anchoring
          to the previous sibling element*/
          prev = active.prev();

          if ($(prev).is("#SECTION")) {
              var timer = setTimeout(function () {
                  $('body, html').animate({
                      scrollTop: prev.offset().top
                  }, 'slow');

                  prev.addClass('active')
                      .siblings().removeClass('active');

                  clearTimeout(timer);
              }, 200);
          }

      }
  });






  function setBindings() {
    if (on_index == true) {
              $("#navbar a").click(function(e){
                    e.preventDefault();
                    var sectionID = e.currentTarget.id + "1";
                    $('body, html').animate({
                      scrollTop: $("#" + sectionID).offset().top
                    }, 600)
                })
    }};







		var settings = {				//CONECCION CON JSON API PARA PROXIMOS PARTIDOS
			"async": true,
			"crossDomain": true,
			"url": "http://api.football-data.org/v2/matches",
			"method": "GET",
			"headers": {
			"X-Auth-Token": "caec1c63629745d684eabb0a0121f048",
			}
		}
		var section = document.getElementById('next-matches');

		$.ajax(settings).done(function (datos) {				//DEVUELVE DATOS DE PROXIMOS PARTIDOS

				var pag = 1;
				var totales = datos.count;
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
								myLiga.textContent = datos.matches[i].competition.name;
								myBox.appendChild(myLiga);
								var myEquipo1 = document.createElement ('equipo1');
								$(myEquipo1).attr('id','equipo1');
								myEquipo1.textContent = datos.matches[i].homeTeam.name;
								myBox.appendChild(myEquipo1);



								var myResul1 = document.createElement('resul1');
								$(myResul1).attr('id','resul1');
								myResul1.textContent=datos.matches[i].score.fullTime.homeTeam;
								// myResul1.textContent = '-';
								myBox.appendChild(myResul1);



								var myResul2 = document.createElement('resul2');
								$(myResul2).attr('id','resul2');
								myResul2.textContent=datos.matches[i].score.fullTime.awayTeam;
								// myResul2.textContent = '-';
								myBox.appendChild(myResul2);






								var myEquipo2 = document.createElement ('equipo2');
								$(myEquipo2).attr('id','equipo2');
								myEquipo2.textContent = datos.matches[i].awayTeam.name;
								myBox.appendChild(myEquipo2);
								var myFecha = document.createElement('fecha');
								$(myFecha).attr('id','fecha');
								var fecha = datos.matches[i].utcDate
								fecha = fecha.substr(0,10) + '   '
								var hora = parseInt (datos.matches[i].utcDate.substr(-9,2))-3;
								var hora2 = datos.matches[i].utcDate.substr(-7,3) +' hs';
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




	 var settings2 = {				//CONECCION CON JSON API
			"async": true,
			"crossDomain": true,
			"url": "http://api.football-data.org/v2/competitions",
			"method": "GET",
			"headers": {
			"X-Auth-Token": "caec1c63629745d684eabb0a0121f048",
			}
		}
		$.ajax(settings2).done(function (datos2) {
				 let dropdown = $('#competition-dropdown');

				dropdown.empty();

				dropdown.append('<option selected="true" disabled>Seleccionar liga</option>');
				dropdown.prop('selectedIndex', 0);
					for (var i = 0; i < datos2.count; i++) {
						if (datos2.competitions[i].plan == 'TIER_ONE') {
							// console.log(datos2.competitions[i].name)

							var option = document.createElement ('option');
							option.textContent = datos2.competitions[i].name;
							option.value = datos2.competitions[i].name;

							dropdown.append( new Option(option.textContent,option.value) );
						//	dropdown.add(option);


						}

					}







				})				//DEVUELVE LAS COMPETENCIAS PARA DROPDOWN


			








});
