(function ($) {
    'use strict';

    var $window = $(window),
        $body = $('body');

    // :: 1.0 Masonary Gallery Active Code

    var proCata = $('.yrc');
    var singleProCata = ".spcat";

    if ($.fn.imagesLoaded) {
        proCata.imagesLoaded(function () {
            proCata.isotope({
                itemSelector: singleProCata,
                percentPosition: true,
                masonry: {
                    columnWidth: singleProCata
                }
            });
        });
    }

    // :: 2.1 Search Active Code
    var yumeresSearch = $('.search-nav');
    var searchClose = $('body');

    yumeresSearch.on('click', function () {
        $body.toggleClass('search-wrapper-on');
    });

    searchClose.on('scroll', function () {
        $body.removeClass('search-wrapper-on');
    });

    // :: 2.2 Mobile Nav Active Code
    var yumeresMobNav = $('.yntg');
    var navClose = $('.nav-close');

    yumeresMobNav.on('click', function () {
        $('.header-area').toggleClass('bp-xs-on');
    });

    navClose.on('click', function () {
        $('.header-area').removeClass('bp-xs-on');

    });

    $('#dark_swipe').off('click').on(' click', function () {
        $('body').toggleClass('dark');
    });

    // :: 3.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 800,
            easingType: 'easeInOutQuart',
            scrollText: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="30" width="20" fill="currentColor"><path d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"/></svg>'
        });
    }

    // :: 4.0 Sticky Active Code
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header_area').addClass('sticky');
        } else {
            $('.header_area').removeClass('sticky');
        }
    });

    // :: 5.0 Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: 8.0 X-Option
    if ($body) {
        $('body').addClass('dark');
        $('.by_art').off('click').on(' click', function () {
            $('.cart-table-area').show();
        });
    }

    /*$('.buy-_article').off('click').on(' click', function () {
        $('.cart-table-area').toggleClass('d-none');
    });*/


    //  :: 9.0 Shop-x
    $window.on('load', function () {
        if ($body.hasClass('device-xl') || $body.hasClass('device-lg') || $body.hasClass('device-md')) {
            $('.shop-x').addClass('d-flex');
        }
        if ($body.hasClass('device-sm') || $body.hasClass('device-xs')) {
            $('.shop-x').removeClass('d-flex');
        }
    });
    $window.on('resize', function () {
        if ($window.width() > 767) {
            $('.shop-x').addClass('d-flex');
        }
        if ($window.width() < 767) {
            $('.shop-x').removeClass('d-flex');
        }
    });
    if ($body) {
        if (typeof jRespond === 'undefined') {
            console.log('responsiveClasses: jRespond not Defined.');
            return true;
        }
        var jRes = jRespond([
            {
                label: 'smallest',
                enter: 0,
                exit: 575
            }, {
                label: 'handheld',
                enter: 576,
                exit: 767
            }, {
                label: 'tablet',
                enter: 768,
                exit: 991
            }, {
                label: 'laptop',
                enter: 992,
                exit: 1199
            }, {
                label: 'desktop',
                enter: 1200,
                exit: 10000
            }
        ]);
        jRes.addFunc([
            {
                breakpoint: 'desktop',
                enter: function () {
                    $body.addClass('device-xl');
                },
                exit: function () {
                    $body.removeClass('device-xl');
                }
            }, {
                breakpoint: 'laptop',
                enter: function () {
                    $body.addClass('device-lg');
                },
                exit: function () {
                    $body.removeClass('device-lg');
                }
            }, {
                breakpoint: 'tablet',
                enter: function () {
                    $body.addClass('device-md');
                },
                exit: function () {
                    $body.removeClass('device-md');
                }
            }, {
                breakpoint: 'handheld',
                enter: function () {
                    $body.addClass('device-sm');
                },
                exit: function () {
                    $body.removeClass('device-sm');
                }
            }, {
                breakpoint: 'smallest',
                enter: function () {
                    $body.addClass('device-xs');
                },
                exit: function () {
                    $body.removeClass('device-xs');
                }
            }
        ]);

    }

    // :: 10.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 11.0 PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: 11.0 Slider Range Price Active Code
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var label_result = jQuery(this).data('label-result');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + ui.values[0] + " " + unit + ' - ' + ui.values[1] + " " + unit;
                console.log(t);
                t.closest('.slider-range').find('.range-price').html(result);
            }
        });
    });

    // :: 12.0 Swiper Slider
    if (typeof Swiper === 'undefined') {
        console.log('sliderRun: Swiper not Defined.');
        return true;
    }
    var swiperSlider = '',
        $sliderElement = $('.slider-element'),
        $sliderEl = $sliderElement;

    $sliderEl.each(function () {
        if ($(this).hasClass('swiper_wrapper')) {

            if ($(this).find('a .swiper-slide').length < 1) {
                return true;
            }

            var element = $(this).filter('.swiper_wrapper'),
                elementDirection = element.attr('data-direction'),
                elementSpeed = element.attr('data-speed'),
                elementAutoPlay = element.attr('data-autoplay'),
                elementLoop = element.attr('data-loop'),
                elementEffect = element.attr('data-effect'),
                elementPerView = element.attr('data-perview'),
                elementSpaceBetween = element.attr('data-spacebetween'),
                elementGrabCursor = element.attr('data-grab'),
                slideNumberTotal = element.find('.slide-number-total'),
                slideNumberCurrent = element.find('.slide-number-current'),
                sliderSettings = element.attr('data-settings');

            if (!elementSpeed) {
                elementSpeed = 300;
            }
            if (!elementDirection) {
                elementDirection = 'horizontal';
            }
            if (elementAutoPlay) {
                elementAutoPlay = Number(elementAutoPlay);
            } else {
                elementAutoPlay = 999999999;
            }
            if (elementLoop == 'true') {
                elementLoop = true;
            } else {
                elementLoop = false;
            }
            if (!elementEffect) {
                elementEffect = 'slide';
            }
            if (elementGrabCursor == 'true') {
                elementGrabCursor = true;
            } else {
                elementGrabCursor = false;
            }

            if (element.find('.swiper-pagination').length > 0) {
                var elementPagination = element.find('.swiper-pagination'),
                    elementPaginationClickable = true;
            } else {
                var elementPagination = '',
                    elementPaginationClickable = false;
            }

            var elementNavNext = element.find('.swiper-button-next'),
                elementNavPrev = element.find('.swiper-button-prev'),
                elementScollBar = element.find('.swiper-scrollbar');

            swiperSlider = new Swiper(element.find('.swiper-parent'), {
                direction: elementDirection,
                speed: Number(elementSpeed),
                autoplay: {
                    delay: elementAutoPlay
                },
                loop: elementLoop,
                effect: elementEffect,
                slidesPerView: elementPerView,
                spaceBetween: elementSpaceBetween,
                grabCursor: elementGrabCursor,
                pagination: {
                    el: elementPagination,
                    clickable: elementPaginationClickable
                },
                navigation: {
                    prevEl: elementNavPrev,
                    nextEl: elementNavNext
                },
                scrollbar: {
                    el: elementScollBar
                },
                on: {
                    init: function (swiper) {
                        $('.swiper-slide-active [data-animate]').each(function () {
                            var $toAnimateElement = $(this),
                                toAnimateDelay = $toAnimateElement.attr('data-delay'),
                                toAnimateDelayTime = 0;
                            if (toAnimateDelay) {
                                toAnimateDelayTime = Number(toAnimateDelay) + 750;
                            } else {
                                toAnimateDelayTime = 750;
                            }
                            if (!$toAnimateElement.hasClass('animated')) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-animate');
                                setTimeout(function () {
                                    $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                        element.find('[data-animate]').each(function () {
                            var $toAnimateElement = $(this),
                                elementAnimation = $toAnimateElement.attr('data-animate');
                            if ($toAnimateElement.parents('.swiper-slide').hasClass('swiper-slide-active')) {
                                return true;
                            }
                            $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                        });
                    },
                    transitionStart: function (swiper) {
                        if (slideNumberCurrent.length > 0) {
                            if (elementLoop == true) {
                                slideNumberCurrent.html(Number(element.find('.swiper-slide.swiper-slide-active').attr('data-swiper-slide-index')) + 1);
                            } else {
                                slideNumberCurrent.html(swiperSlider.activeIndex + 1);
                            }
                        }
                        element.find('[data-animate]').each(function () {
                            var $toAnimateElement = $(this),
                                elementAnimation = $toAnimateElement.attr('data-animate');
                            if ($toAnimateElement.parents('.swiper-slide').hasClass('swiper-slide-active')) {
                                return true;
                            }
                            $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                        });
                    },
                    transitionEnd: function (swiper) {

                        element.find('.swiper-slide.swiper-slide-active [data-animate]').each(function () {
                            var $toAnimateElement = $(this),
                                toAnimateDelay = $toAnimateElement.attr('data-delay'),
                                toAnimateDelayTime = 0;
                            if (toAnimateDelay) {
                                toAnimateDelayTime = Number(toAnimateDelay) + 300;
                            } else {
                                toAnimateDelayTime = 300;
                            }
                            if (!$toAnimateElement.hasClass('animated')) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-animate');
                                setTimeout(function () {
                                    $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                    }
                }
            });

            if (slideNumberCurrent.length > 0) {
                if (elementLoop == true) {
                    slideNumberCurrent.html(swiperSlider.realIndex + 1);
                } else {
                    slideNumberCurrent.html(swiperSlider.activeIndex + 1);
                }
            }

            if (slideNumberTotal.length > 0) {
                slideNumberTotal.html(element.find('.swiper-slide:not(.swiper-slide-duplicate)').length);
            }

            if (sliderSettings) {
                sliderSettings = eval('(' + sliderSettings + ')');
                for (var prop in sliderSettings) {
                    swiperSlider.params[prop] = sliderSettings[prop];
                    swiperSlider.update();
                }
            }

        }
    });

    $(document).ready(function () {

        var swiperParent = new Swiper('.swiper-parent', {
            pagination: {
                clickable: false
            },
            navigation: {
                prevEl: '.swiper-button-prev',
                nextEl: '.swiper-button-next'
            },
            breakpoints: {
                1600: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                1180: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                572: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            }
        });

        // product color options
        $(".product-color-options li").on("click", function () {
            $this = $(this);
            $this.addClass('selected').siblings().removeClass('selected');
        })
    });

    $(".pd-size-choose .sc-item label").on('click', function () {
        $(".pd-size-choose .sc-item label").removeClass('active');
        $(this).addClass('active');
    });

    if ('.pd_pt') {

        $('.pd_ptnv div').off('click').on(' click', function () {
            var navElAnchor = $(this),
                navElTarget = navElAnchor.attr('data-thmb'),
                PctElContainer = document.getElementById(navElTarget),
                PctElContain = PctElContainer.getAttribute('data-forpct'),
                PctElTarget = navElTarget === PctElContain;

            $(this).addClass('active').siblings().removeClass('active');

            if (PctElTarget === true) {
                $(PctElContainer).addClass('nw').siblings().removeClass('nw');
            }
        });
    }

    if ('.tabs') {
        $('.tab-content.active').siblings().addClass('d-none');

        $('.byart').off('click').on(' click', function () {
            $('#buys').parents('li').addClass('active').siblings().removeClass('active');
            $('#buysc').addClass('active d-block').removeClass('d-none').siblings().removeClass('active d-block').addClass('d-none');
        })

        $('.tbswt').off('click').on(' click', function () {
            var tabElAnchor = $(this),
                tabElTarget = tabElAnchor.attr('data-t'),
                PctElContainer = document.getElementById(tabElTarget),
                PctElContain = PctElContainer.getAttribute('data-ft'),
                PctElTarget = tabElTarget === PctElContain;

            $(this).parents('li').addClass('active').siblings().removeClass('active');

            if (PctElTarget === true) {
                $(PctElContainer).addClass('active d-block').removeClass('d-none').siblings().removeClass('active d-block').addClass('d-none');
            }
        });
    }

    if ($body.hasClass('device-md') || $body.hasClass('device-sm') || $body.hasClass('device-xs')) {
        $('.header-search-form .mb').show();
        $('.header-search-form .dskp').hide();
        $('.mnc').addClass('mnp');
        $('.mnc form').addClass('mbfm');
    } else {
        $('.header-search-form .dskp').show();
        $('.header-search-form .mb').hide();
        $('.mnc').removeClass('mnp');
        $('.mnc form').removeClass('mbfm');
    }
})(jQuery);