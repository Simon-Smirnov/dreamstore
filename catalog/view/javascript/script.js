import MainMenu from './modules/main_menu.js';

document.addEventListener('DOMContentLoaded', function() {
    new MainMenu('.header-bottom_block-catalog');

    new Swiper('.main_slider-inner', {
        speed: 400,
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: true,
        delay: 2000,
        pagination: {
            el: '.main_slider-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return `<span class="${className} custom-bullet">
                    <svg class="main_slider-pagination_svg" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/sprite.svg#slider_button"></use>
                    </svg>
                </span>`;
            },
        },
        // navigation: {
        //     nextEl: '.section-reviews_content-slider_next',
        //     prevEl: '.section-reviews_content-slider_prev',
        // },
        breakpoints: {
            400: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,      
            },
            992: {
                slidesPerView: 1,
                spaceBetween: 20
            }
        }
    });
});

  
