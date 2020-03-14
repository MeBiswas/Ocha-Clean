var owl = $('.hero-slider');
owl.owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed:5000,
        autoplayHoverPause: false,
        smartSpeed: 5000,
        dots: false,
        nav: false,
        animateOut: 'slideOutDown',
        animateIn: 'zoomIn',
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})   