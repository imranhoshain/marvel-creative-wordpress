(function ($) {
    "use strict";

    $(document).ready(function ($) {


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");

        $('[data-toggle="tooltip"]').tooltip();


        /*---------------------------------------------------
                    Isotop menu
        ---------------------------------------------------*/

        var $portfolio = $('.portfolios');

        $portfolio.isotope({
            itemSelector: '.col-md-3',
            layoutMode: 'masonry',
            filter: '*',
            percentPosition: true,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });

        $('.portfolio-menu li').on('click', function () {
            $('.portfolio-menu li').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({
                filter: selector,
            });
        });

        /*---------------------------------------------------
                    Lightbox
        ---------------------------------------------------*/

        $(".gallery-lightbox").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });


        /*---------------------------------------------------
                    Smooth menu
        ---------------------------------------------------*/

        $('li.smooth-menu a').on('click', function () {
            var headerH = "70";
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - headerH + 'px'
            }, 1208, 'easeInOutExpo');

        });

        /*---------------------------------------------------
                          Counter
        ---------------------------------------------------*/

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        /*---------------------------------------------------
                          Nav menu
        ---------------------------------------------------*/

        $(function () {
            $('#navmenu').slicknav();
        });

        /*---------------------------------------------------
                    Sticky menu
        ---------------------------------------------------*/

        $("#menu-area").sticky({
            topSpacing: 0
        });

        /*---------------------------------------------------
                   WOW
        ---------------------------------------------------*/
        new WOW().init();



    });

    $(window).load(function () {

    });

}(jQuery));