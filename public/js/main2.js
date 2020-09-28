$(".slider3__wrapper").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 960,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
});