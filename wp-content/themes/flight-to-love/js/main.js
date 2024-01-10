// вк вык боковое меню
$(document).ready(function () {
    $(".header__right").click(function () {
        $(".menu").css({
            transform: "translate(0px, 0px)",
        }),
            $(".menu__bg").css({
                display: "block"
            }),
            $("body").css({
                overflow: "hidden"
            })

    })
    $(".menu__bg, .menu__close, .order").click(function () {
        $(".menu").css({
            transform: "translate(320px, 0px)",
        }),
            $(".menu__bg").css({
                display: "none"
            }),
            $("body").css({
                overflow: "auto"
            })
    })
})
// вк вык боковое меню END

// маска для обратной формы
$.fn.setCursorPosition = function (pos) {
    if ($(this).get(0).setSelectionRange) {
        $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
        var range = $(this).get(0).createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
};

$.mask.definitions['h'] = "[0|1|3|4|5|6|7|9]"
// $(".v_tel").mask("+7 (h99) 999-99-99");

$(".v_tel").click(function () {
    $(this).setCursorPosition(3);
}).mask("+7 (h99) 999-99-99");
// маска для обратной формы END

// появление слово меню при прокрутке
$(document).ready(function () {
    var $menu = $(".menu__scroll");
    $(window).scroll(function () {

        if ($(window).scrollTop() > 200) {
            $menu.css({

                transform: "translate(0px, 0px)",

            })
        } else {
            $menu.css({
                transform: "translate(0px, -60px)"

            })
        }
    })
})

// появление слово меню при прокрутке END

jQuery(document).ready(function () {
    var clicked = false, base = 0, base_scroll = 0;
    $('.bottom__menu__item').on({
        mousemove: function (e) {
            clicked && function (xAxis) {
                var _this = $(this);
                $('.bottom__menu__row').scrollLeft(base_scroll + base - xAxis)
            }.call($(this), e.pageX);
        },
        mousedown: function (e) {
            clicked = true;
            base = e.pageX;
            base_scroll = $('.bottom__menu__row').scrollLeft()
        },
        mouseup: function (e) {
            clicked = false;
        }
    })
});

// паралакс эффект для всего сайта и отдельных элементов

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

if (ScrollTrigger.isTouch !== 1) {
    ScrollSmoother.create({
        wrapper: '.wrapper__gsap',
        content: '.content__gsap',
        smooth: 1.5,
        effects: true
    })


    gsap.fromTo('.celebrity__img-01', { x: -100, }, {
        x: 0,
        scrollTrigger: {
            trigger: '.celebrity__img-02',
            start: '-500',
            end: 'center',
            scrub: true
        }
    })
    gsap.fromTo('.celebrity__img-03', { x: 100, }, {
        x: 0,
        scrollTrigger: {
            trigger: '.celebrity__img-02',
            start: '-500',
            end: 'center',
            scrub: true
        }
    })
    // gsap.fromTo('.hero-section', { opacity: 1 }, {
    // 	opacity: 0,
    // 	scrollTrigger: {
    // 		trigger: '.hero-section',
    // 		start: 'center',
    // 		end: '820',
    // 		scrub: true
    // 	}
    // })

    // let itemsL = gsap.utils.toArray('.gallery__left .gallery__item')

    // itemsL.forEach(item => {
    // 	gsap.fromTo(item, { opacity: 0, x: -50 }, {
    // 		opacity: 1, x: 0,
    // 		scrollTrigger: {
    // 			trigger: item,
    // 			start: '-850',
    // 			end: '-100',
    // 			scrub: true
    // 		}
    // 	})
    // })

    // let itemsR = gsap.utils.toArray('.gallery__right .gallery__item')

    // itemsR.forEach(item => {
    // 	gsap.fromTo(item, { opacity: 0, x: 50 }, {
    // 		opacity: 1, x: 0,
    // 		scrollTrigger: {
    // 			trigger: item,
    // 			start: '-750',
    // 			end: 'top',
    // 			scrub: true
    // 		}
    // 	})
    // })
}


// сладйдер готовых моделей
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 1000,
    breakpoints: {
        // when window width is >= 320px
        450: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        500: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 480px
        800: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 4,
            spaceBetween: 10
        }
    },




    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});

