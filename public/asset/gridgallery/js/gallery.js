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
    $('body').on('click', '.gallery-item', function () {
               
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