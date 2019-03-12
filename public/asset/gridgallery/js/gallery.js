$(function () {
    var $gallery = $('.gallery');
    $gallery.imagesLoaded(function () {
        applyIsotope();
    });
    var applyIsotope = function () {
        $gallery.isotope({
            itemSelector: '.gallery-item',
            masonry: {
                columnWidth: 230,
                gutter: 10,
                isFitWidth: true
            }
        });
    }
    $(".live-tile,.flip-list").liveTile();
    //cuando se hace click en la galeria se toma el id de cada seccion y se ejecuta el popup
    $('body').on('click', '.gallery-item', function () {
               
        window.location.href = "publicaciones/"+$(this).data("id");
       // $.get("publicaciones/"+$(this).data("id"));
      /*  var idslider ="#itemDetails"+$(this).data("id"); 
         var dlg = new DialogFx($(idslider).get(0));
        dlg.toggle();*/
    });

    $('body').on('click', '.event-item', function (event) {
        event.preventDefault();
       // $.get("publicaciones/"+$(this).data("id"));
        var idslider ="#itemDetails"+$(this).data("id"); 
         var dlg = new DialogFx($(idslider).get(0));
        dlg.toggle();
    });

    $('.item-slideshow > div').each(function () {
        var img = $(this).data('image');
        $(this).css({
            'background-image': 'url(' + img + ')',
            'background-size': 'cover'
        })
    });
    $(".item-slideshow").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        dots: true
    });
    $('[data-toggle="filters"]').click(function () {
        $('#filters').toggleClass('open');
    });

    
    //------- Counter  js --------//  

    if(document.getElementById("facts-area")){
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
      }
     //------- brand carusel  js --------   

      $('.active-brand-carusel').owlCarousel({
        items: 8,
        loop: true,
        autoplayHoverPause: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            455: {
                items: 2
            },            
            768: {
                items: 3,
            },
            991: {
                items: 4,
            },
            1024: {
                items: 8,
            }
        }
    }); 

   /* $("#slider-margin").noUiSlider({
        start: [20, 80],
        margin: 30,
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });*/
});