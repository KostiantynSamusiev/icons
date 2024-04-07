function owlCarousel() {
    $(document).ready(function () {
        $("#gallery").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navigationText: ["", ""],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1280: {
                    items: 1
                }
            }
        });

        $("#schools").owlCarousel({
            loop: true,
            margin: 13,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $("#books").owlCarousel({
            loop: true,
            margin: 13,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

    });

}

module.exports = owlCarousel;