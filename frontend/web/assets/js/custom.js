/***************************************************************************************************************
 ||||||||||||||||||||||||||||        CUSTOM SCRIPT FOR ASSURANCE            |||||||||||||||||||||||||||||||||||||
 ****************************************************************************************************************
 ||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
 ****************************************************************************************************************
 ****************************************************************************************************************
 01. Preloader
 02. Sticky header
 03. mainmenu
 04. Revolution slider
 05. scoll to Top
 06. Testimonial Slider
 07. Sponser Slider
 08. Accordion
 09. Fact counter
 10. Prealoder
 11. Select Dropdown
 12. ContactFormValidation


 ****************************************************************************************************************
 ||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
 ****************************************************************************************************************/
(function ($) {
    "use strict";

    /*----------------------------
     Preloader
     ------------------------------ */
    function prealoader() {
        if ($('.loader-container').length) {
            $('.loader-container').fadeOut(1000);
        }
    }

    /*=================== Sticky Header ===================*/
    function stickyHeader() {
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
            $(".mainmenu-area.stick, .header-lower.stick, .header-area.stick").addClass("sticky animated fadeInDown");
            var nav_height = $(".mainmenu-area.stick, .header-lower.stick, .header-area.stick").innerHeight();
            $(".menu-height").css({
                "height": nav_height
            });

        } else if (scroll < 200) {
            $(".mainmenu-area.stick, .header-lower.stick, .header-area.stick").removeClass("sticky animated fadeInDown");
            $(".menu-height").css({
                "height": 0
            });
        }
    }

//====Main menu===
    function mainmenu() {
        //Submenu Dropdown Toggle
        if ($('.main-menu li.dropdown ul').length) {
            $('.main-menu li.dropdown').append('<div class="dropdown-btn"></div>');

            //Dropdown Button
            $('.main-menu li.dropdown .dropdown-btn').on("click", function () {
                $(this).prev('ul').slideToggle(500);
            });
        }

    }

//===RevolutionSliderActiver===
    /*  function revolutionSliderActiver() {
     if ($('.rev_slider_wrapper #slider1').length) {
     $("#slider1").revolution({
     sliderType: "standard",
     sliderLayout: "auto",
     delay: 5000,


     // dottedOverlay: 'yes',

     /!*  hideTimerBar: "on",*!/
     onHoverStop: "off",
     navigation: {
     arrows: {enable: false}
     },
     responsiveLevels: [1920, 1280, 975, 600, 300],
     gridwidth: [1200, 1170, 720, 500, 500, 300],
     gridheight: [768, 650, 600, 550, 450, 400]
     });
     }
     }*/


//===scoll to Top===
    function scrollToTop() {
        if ($('.scroll-to-target').length) {
            $(".scroll-to-target").on("click", function () {
                var target = $(this).attr('data-target');
                // animate
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);

            });
        }
    }

//===Testmonial Slider Style 1===
    function testmonialcarousel() {
        $('.testmonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplay: 6000,
            smartSpeed: 700,
            navigation: true,
            navigationText: ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>', '<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1100: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

//===Sponser Slider Style 2===
    function sponsercarousel() {
        $('.sponsor-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
              0:{
                  items: 1,
                  nav: false
              },
               320: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    }

    /*-----------------------------------
     TESTMONIAL SLIDER ACTIVE
     -----------------------------------*/
    function clientBxSlider() {
        var clientBxSlider = $('.clinet-carousal .item');
        if (clientBxSlider.length > 0) {
            clientBxSlider.bxSlider({
                // adaptiveHeight: true,
                auto: false,
                controls: true,
                nextText: '<i class="flaticon-right-arrow"></i>',
                prevText: '<i class="flaticon-left-arrow"></i>',
                mode: 'fade',
                pause: 3000,
                speed: 500,
                pager: false
            });
        }
    }

    /*-----------------------------------
     TESTMONIAL SLIDER ACTIVE
     -----------------------------------*/
    function testmonialBxSlider() {
        var testmonialBxSlider = $('.testimonials-slider .slider');
        if (testmonialBxSlider.length > 0) {
            testmonialBxSlider.bxSlider({
                // adaptiveHeight: true,
                auto: false,
                controls: true,
                nextText: '<i class="flaticon-right-arrow"></i>',
                prevText: '<i class="flaticon-left-arrow"></i>',
                mode: 'fade',
                pause: 3000,
                speed: 500,
                pager: true,
                pagerCustom: '#testimonials-slider-pager'
            });
        }
    }

//===Search box ===
    function searchbox() {
        //Search Box Toggle
        if ($('.search-toggle').length) {
            //Dropdown Button
            $('.search-toggle').on("click", function () {
                $(this).toggleClass('active');
                $(this).next('.search-box').toggleClass('now-visible');
            });
        }

    }

    $('.toggle').on("click", function (e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });


    /*=================== Accordion ===================*/
    function accordion() {
        $(".toggle").each(function () {
            $(this).find('.content').hide();
            $(this).find('h5:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('h5', this).on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $(this).parent().parent().find("h5").removeClass('active').next().slideUp(500).removeClass('animated fadeInUp').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated fadeInUp').parent().toggleClass("activate");
                }
            });
        });
    }

//=== Fact counter ===
    function CounterNumberChanger() {
        var timer = $('.timer');
        if (timer.length) {
            timer.appear(function () {
                timer.countTo();
            })
        }
    }

//=== Select menu === 
    function selectDropdown() {
        if ($(".selectmenu").length) {
            $(".selectmenu").selectmenu();
        }
        ;
    }


//=== Thm scroll anim===
    function thmScrollAnim() {
        if ($('.wow').length) {
            var wow = new WOW({
                mobile: false
            });
            wow.init();
        }
        ;
    }

//=== offsetgap===
    function offsetgap() {
        var offset_gap = $(".container").offset().left;
        $(".right-text-area, .right-content-area").css({
            right: offset_gap
        });
        $(".left-content-are, .left-content-are, .more-project .sec-title").css({
            left: offset_gap
        });
    }

// ===Project===
    function projectMasonaryLayout() {

        if ($('.post-filter').length) {
            $('.post-filter li').children('span').on("click", function () {
                var Self = $(this);
                var selector = Self.parent().attr('data-filter');
                $('.post-filter li').children('span').parent().removeClass('active');
                Self.parent().addClass('active');


                $('.filter-layout').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        }

        if ($('.post-filter.has-dynamic-filter-counter').length) {
            // var allItem = $('.single-filter-item').length;

            var activeFilterItem = $('.post-filter.has-dynamic-filter-counter').find('li');

            activeFilterItem.each(function () {
                var filterElement = $(this).data('filter');
                console.log(filterElement);
                var count = $('.gallery-content').find(filterElement).length;

                $(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
            });
        }
        ;
    }


//=== Contact Form Validation ===
    function ContactFormValidation() {
        if (('.form-sec').length) {
            var form = $('#ajax-contact');
            var formMessages = $('.form-messages');
            $(form).submit(function (e) {
                e.preventDefault();
                var formData = $(form).serialize();
                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                }).done(function (response) {
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');
                    $(formMessages).text(response);
                    $(this).find("input").val("");
                    $(form).trigger("reset");
                }).fail(function (data) {
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
            });
        }
    }


    //**** Account Login Popup ****//
    function accountlogin() {
        $('.account-login').on('click', function () {
            $('.popup-sec').addClass('active');
            $('.login-account').addClass('active');
            $('html').addClass('stop-scroll');
        });
        $('.close-account').on('click', function () {
            $('.popup-sec').removeClass('active');
            $('.login-account').removeClass('active');
            $('html').removeClass('stop-scroll');
        });
    }

    //**** Account Login Popup ****//
    function accountregister() {
        $('.account-register').on('click', function () {
            $('.popup-sec').addClass('active');
            $('.register-account').addClass('active');
            $('html').addClass('stop-scroll');
        });
        $('.close-account').on('click', function () {
            $('.popup-sec').removeClass('active');
            $('.register-account').removeClass('active');
            $('html').removeClass('stop-scroll');
        });
    }


    /* ==========================================================================
     When document is loading, do
     ========================================================================== */

    $(window).on('load', function () {
        prealoader();
        mainmenu();
        testmonialcarousel();
        clientBxSlider();
        sponsercarousel();
        scrollToTop();
        CounterNumberChanger();
        accordion();
        ContactFormValidation();
        selectDropdown();
        thmScrollAnim();
        searchbox();
        offsetgap();
        projectMasonaryLayout();
        testmonialBxSlider();
        accountlogin();
        accountregister();
    });

    /* ==========================================================================
     When document is Scrolling, do
     ========================================================================== */

    $(window).on('scroll', function () {
        stickyHeader();
    });


    $(document).ready(function () {
        var posts = $('.posts').isotope({
            // options
            itemSelector: '.post-item',
            layoutMode: 'fitRows',

        });

        $('.filters .filter').on('click', function () {
            posts.isotope({filter: $(this).data('filter')});
        });
    });
})(window.jQuery);