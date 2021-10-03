(function ($, app) {

    var homeCls = function () {
        var el = {};

        this.run = function () {
            this.init();
            this.bindEvents();
        };

        this.init = function () {

        };

        this.bindEvents = function () {
            frontJs();
            menu_mobile();
            countdown();
        };

        var frontJs = function () {
            $('.slide-banner').slick({
                autoplay: false,
                arrow: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '',
                nextArrow: '',
                speed: 500,
            });
            $('.slide-tool').slick({
                autoplay: false,
                arrow: false,
                dots: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a href="javascript:void(0)" class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                nextArrow: '<a href="javascript:void(0)" class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                speed: 500,
                responsive: [
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            dots: true,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ],
            });
            $(".slide-pack").slick({
                autoplay: false,
                arrow: true,
                dots: true,
                slidesToShow: 4,
                centerMode: false,
                prevArrow: '<a href="javascript:void(0)" class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                nextArrow: '<a href="javascript:void(0)" class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                responsive: [
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ],
            });
            $(".slide-casestudy").slick({
                autoplay: false,
                arrow: false,
                dots: true,
                slidesToShow: 3,
                centerMode: false,
                responsive: [
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ],
            });
            $(".slide-feedback").slick({
                autoplay: false,
                arrow: false,
                dots: true,
                slidesToShow: 2,
                responsive: [
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ],
            });
            $(".slide-partner").slick({
                autoplay: false,
                arrow: false,
                dots: true,
                slidesToShow: 6,
                centerMode: false,
                prevArrow: '<a href="javascript:void(0)" class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                nextArrow: '<a href="javascript:void(0)" class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +
                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</a>',
                responsive: [
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ],
            });

            $('.list-tab-acc a').click(function(){
                var tab_id = $(this).attr('data-tab');
                $('.list-tab-acc a').removeClass('active');
                $('.tab-content').removeClass('active');
                $(this).addClass('active');
                $("#"+tab_id).addClass('active');
            })

            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > 1) {
                    $('.header-top, main').addClass('sstick');
                }
                else {
                    $('.header-top, main').removeClass('sstick');
                }
            });

            if($(window).innerWidth() >= 1024){
                new WOW().init();
            }

            $(".slide-part").slick({
                autoplay: false,
                arrow: true,
                dots: true,
                slidesToShow: 6,
                centerMode: false,
                responsive: [
                    {
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            arrow: false,
                        }
                    },
                    {
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            arrow: false,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    }
                ],
                prevArrow: '<button class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#ECEDEE"/>\n' +
                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="#71787E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</button>',
                nextArrow: '<button class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#ECEDEE"/>\n' +
                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="#71787E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
                    '</svg>\n</button>',
            });


            $('.btn-pack a').click(function(e){
                e.preventDefault();
                var target = $($(this).attr('href'));
                if(target.length){
                    var scrollTo = target.offset().top - 103;
                    $('body, html').animate({scrollTop: scrollTo+'px'}, 500);
                }
                $('.clc-scroll').removeClass("active");
                $('.sub-menu-mb, html').removeClass("active");
                $(this).addClass("active");
            });

        };

        var countdown = function () {
            var a = 0;
            $(window).scroll(function() {

                var oTop = $('#counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                                countNum: countTo
                            },

                            {

                                duration: 3000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                }

                            });
                    });
                    a = 1;
                }

            });
        };


        var menu_mobile = function () {
            $('.btn-bar').click(function () {
                $('.menu-mobile, body').addClass('active');
            })
            $('.close-menu').click(function () {
                $('.menu-mobile, body').removeClass('active');
            })
        };
    };


    $(document).ready(function () {
        var homeObj = new homeCls();
        homeObj.run();
        // On resize

    });
}(jQuery, $.app));
