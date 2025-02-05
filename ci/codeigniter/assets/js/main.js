$(function ($) {
    "use strict";

    $(window).on('load', function () {


        //   magnific popup activation
        $('.play-video').magnificPopup({
            type: 'video'
        });

        $('.img-popup').magnificPopup({
            type: 'image'
        });

        // $('#faqModal').modal('show');

        // Product deal countdown
        // $('[data-countdown]').each(function () {
        //     var $this = $(this),
        //         finalDate = $(this).data('countdown');
        //     $this.countdown(finalDate, function (event) {
        //         $this.html(event.strftime('<span>%D:</span><span>%H:</span><span>%M:</span><span>%S</span>'));
        //     }); 
        // });

      

        $('[data-countdown2]').each(function () {
            var $this = $(this),
                finalDate = $(this).data('countdown2');
            $this(finalDate, function (event) {
                $this.html(event.strftime('<p>%D : <span>Days</span></p> <p>%H : <span>Hours</span></p> <p>%M : <span>Minutes</span></p> <p>%S <span>Seconds</span></p>'));
            });
        });


        // Latest Winner Slider
        var $l_winner_slider = $('.l-winner-slider2');
        $l_winner_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                415: {
                    items: 4
                },
                576: {
                    items: 4
                },
                768: {
                    items: 5
                },
                992: {
                    items: 7
                },
                1200: {
                    items: 9
                },
                1920: {
                    items: 9
                }
            }
        });

        // Latest Winner Slider
        var $l_winner_slider2 = $('.l-winner-slider');
        $l_winner_slider2.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                768: {
                    items: 4
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        // Exclusive Lottery Slider
        var $ex_lottery_slider = $('.ex-lottery-slider');
        $ex_lottery_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        /** Product Details  carousel **/
        var $product_slider = $('.all-slider');
        $product_slider.owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 0,
            autoplay: false,
            items: 4,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 3
                },
                768: {
                    items: 4
                }
            }
        });
        // payment Slider
        var $method_slider = $('.method-slider');
        $method_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 0,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2
                },
                500: {
                    items: 3
                },
                768: {
                    items: 5
                },
                992: {
                    items: 6
                },
                1200: {
                    items: 7
                },
                1920: {
                    items: 7
                }
            }
        });

        // testimonial-slider
        var $testimonial_slider = $('.testimonial-slider');
        $testimonial_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });


    });


    /*-------------------------------
        back to top
    ------------------------------*/
    $('.bottomtotop').on('click', () => {

        var scrollStep = -window.scrollY / (500 / 15),
            scrollInterval = setInterval(function () {
                if (window.scrollY != 0) {
                    window.scrollBy(0, scrollStep);
                }
                else clearInterval(scrollInterval);
            }, 20);


    })


    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        var $window = $(window);
        if ($window.scrollTop() > 0) {
            $(".header").addClass('nav-fixed');
        } else {
            $(".header").removeClass('nav-fixed');
        }

        /*---------------------------
            back to top show / hide
        ---------------------------*/
        var st = $(this).scrollTop();
        var ScrollTop = $('.bottomtotop');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        lastScrollTop = st;

    });

    $(window).on('scroll', function () {
        var $window = $(window);
        if ($window.scrollTop() > 80) {
            $(".navbar-brand").addClass('cust-nav-logo');
        } else {
            $(".navbar-brand").removeClass('cust-nav-logo');
        }

    });

    $(window).on('load', function () {

        /*---------------------
            Preloader
        -----------------------*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
        var backtoTop = $('.back-to-top');
        /*-----------------------------
            back to top
        -----------------------------*/
        var backtoTop = $('.bottomtotop');
        backtoTop.fadeOut(100);

    });

    document.querySelectorAll(".nav-link").forEach((link) => {
        if (link.href === window.location.href) {
            $(".nav-link").removeClass("active");
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        }
    });

    // $(".nav-link").click(function() {  
    //     $(".nav-link").removeClass("active"); // This will remove active classes from all <li> tags
    //     $(this).addClass("active"); // This will add active class in clicked <li>   
    //   }); 

});


$('#name').on('keypress', function (event) {

    var regex = new RegExp("^[a-zA-Z]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


