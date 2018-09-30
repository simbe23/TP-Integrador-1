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



 })
