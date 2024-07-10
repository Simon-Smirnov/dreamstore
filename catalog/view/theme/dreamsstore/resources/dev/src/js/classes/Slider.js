import Swiper, {
    Navigation, Pagination, Thumbs, EffectFade, Autoplay, FreeMode
} from 'swiper';

Swiper.use([Navigation, Pagination, Thumbs, EffectFade, Autoplay, FreeMode]);

let sliders = []
export {sliders}

export default class Slider {
    static reInit() {
        if (sliders) {
            sliders.forEach(slider => slider.destroy())
        }

        Slider.init()
    }

    static init() {
        // Added class for splide slides
        if (document.querySelectorAll('.swiper-wrapper')) {
            document.querySelectorAll('.swiper-wrapper > *').forEach(slide => slide.classList.add('swiper-slide'))
        }

        // Главный экран
        const slider = document.querySelector('.slider')
        if (slider) {
            this.createSlider(slider, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Страница продукта (отзывы)
        const sliderProductReviews = document.querySelector('.sliderProductReviews')
        if (sliderProductReviews) {
            this.createSlider(sliderProductReviews, {
                slidesPerView: 3,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        const sliderProductThumbs = document.querySelector('.sliderProductThumbs')
        let sliderThumbs;
        if (sliderProductThumbs) {
            sliderThumbs = this.createSlider(sliderProductThumbs, {
                slidesPerView: 7,
                spaceBetween: 8,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
            })
        }

        const sliderProductMain = document.querySelector('.sliderProductMain')
        if (sliderProductMain) {
            this.createSlider(sliderProductMain, {
                slidesPerView: 1,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                thumbs: {
                    swiper: sliderThumbs,
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        const sliderProductRecentlyViewed = document.querySelector('.sliderProductRecentlyViewed')
        if (sliderProductRecentlyViewed) {
            this.createSlider(sliderProductRecentlyViewed, {
                slidesPerView: 6,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        const sliderModelsThumbs = document.querySelector('.sliderModelsThumbs')
        let sliderThumbsModels;
        if (sliderModelsThumbs) {
            sliderThumbsModels = this.createSlider(sliderModelsThumbs, {
                slidesPerView: 5,
                spaceBetween: 4,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        const sliderModelsMain = document.querySelector('.sliderModelsMain')
        if (sliderModelsMain) {
            this.createSlider(sliderModelsMain, {
                slidesPerView: 1,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                thumbs: {
                    swiper: sliderThumbsModels,
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Корзина (Добавьте к заказу)
        const sliderAddToOrder = document.querySelector('.sliderAddToOrder')
        if (sliderAddToOrder) {
            this.createSlider(sliderAddToOrder, {
                slidesPerView: 6,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Модальный поиск
        const sliderModalSearch = document.querySelector('.sliderModalSearch')
        if (sliderModalSearch) {
            this.createSlider(sliderModalSearch, {
                slidesPerView: 6,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Хиты на главной странице
        const sliderHits = document.querySelector('.sliderHits')
        if (sliderHits) {
            this.createSlider(sliderHits, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Новинки на главной странице
        const sliderNovelties = document.querySelector('.sliderNovelties')
        if (sliderNovelties) {
            this.createSlider(sliderNovelties, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Отзывы на главной странице
        const sliderReviews = document.querySelector('.sliderReviews')
        if (sliderReviews) {
            this.createSlider(sliderReviews, {
                slidesPerView: 3,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Тэги на главной странице
        const sliderTags = document.querySelector('.sliderTags')
        if (sliderTags) {
            this.createSlider(sliderTags, {
                slidesPerView: 'auto',
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Акции на главной странице
        const sliderStocks = document.querySelector('.sliderStocks')
        if (sliderStocks) {
            this.createSlider(sliderStocks, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Блог
        const sliderBlog = document.querySelector('.sliderBlog')
        if (sliderBlog) {
            this.createSlider(sliderBlog, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Блог похожие статьи
        const sliderBlogSimilar = document.querySelector('.sliderBlogSimilar')
        if (sliderBlogSimilar) {
            this.createSlider(sliderBlogSimilar, {
                slidesPerView: 4,
                spaceBetween: 12,
                allowTouchMove: false,
                loop: false,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }
    }

    static createSlider(parent, options) {
        const box = parent
        const swiper = box.querySelector('.swiper')

        if (swiper) {
            // Arrows
            const prev_arrow = box.querySelector('.slider__arrow--prev')
            const next_arrow = box.querySelector('.slider__arrow--next')

            if (prev_arrow || next_arrow) {
                options.navigation = {
                    prevEl: prev_arrow ? prev_arrow : null,
                    nextEl: next_arrow ? next_arrow : null,
                }
            }

            // Dotted
            const dotted = box.querySelector('.dotted')

            if (dotted) {
                options.pagination = {
                    el: dotted,
                    type: 'bullets',
                    clickable: true
                }
            }

            // Индикаторы
            const indicator = box.querySelector('.slider-indicator')

            if (indicator) {
                options.pagination = {
                    el: indicator,
                    type: 'fraction',
                }
            }

            let slider = new Swiper(swiper, options)

            // Переключатели
            const slider_toggle = swiper.closest('[data-slide-toggle]')

            if (slider_toggle) {
                const slider_togglers = slider_toggle.querySelectorAll('[data-slide-target]')

                if (slider_togglers) slider_togglers.forEach(slide => {
                    slide.addEventListener('click', (e) => {
                        slider_togglers.forEach(slide_ => slide_.classList.remove('active'))
                        slide.classList.add('active')

                        const target = parseInt(slide.dataset.slideTarget)
                        slider.slideTo(target)
                    })
                })
            }

            sliders.push(slider)

            return slider
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    Slider.init()
})