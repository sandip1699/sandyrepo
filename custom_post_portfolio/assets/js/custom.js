(function(jQuery) {
    'use strict'

 var gallery = jQuery('.gallery_section a').simpleLightbox();

  jQuery(window).on('load', function() {
        // Initialize Portfolio filter
        var jQuerycontainer = jQuery('.portfolioContainer');
        jQuerycontainer.isotope({
            filter: '*',
            layoutMode: 'packery',
            itemSelector: '.isotope-item',
            packery: { fitWidth: true },
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });

        // Portfolio filter onclick
        jQuery('.portfolioFilter a').on('click', function() {
            jQuery('.portfolioFilter .current').removeClass('current');
            jQuery(this).addClass('current');
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
    });

    jQuery(window).on('resize', function() {
        // Initialize Portfolio filter
        var jQuerycontainer = jQuery('.portfolioContainer');
        jQuerycontainer.isotope({
            filter: '*',
            layoutMode: 'packery',
            itemSelector: '.isotope-item',
            packery: { fitWidth: true },
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });

        // Portfolio filter onclick
        jQuery('.portfolioFilter a').on('click', function() {
            jQuery('.portfolioFilter .current').removeClass('current');
            jQuery(this).addClass('current');

            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
    });    
    
    
})(jQuery);