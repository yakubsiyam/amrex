(function($) {
    'use strict';
    // Typed JS
    var typed = new Typed('.element', {
        strings: ['AMREX THERAPY PM'],
        smartBackspace: true,
        loop: true,
        typeSpeed: 50,
    });
    var typed2 = new Typed('.element2', {
        strings: ['Getting engaging Staff', 'Overall Guaranteed clinical quality', 'Overall easier Revenue cycle management'],
        smartBackspace: true,
        loop: true,
        typeSpeed: 50
    });
    // carousel
    $('.review-slider').owlCarousel({
        loop: true,
        autoplay: true,
        autoplaySpeed: 600,
        autoplayHoverPause: true,
        margin: 10,
        dots: true,
        items: 1
    })
})(jQuery);