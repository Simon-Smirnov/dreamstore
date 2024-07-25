import noUiSlider from 'nouislider'

class Range {
    constructor(range) {
        this.range = range

        // Сохраняем обертку где будет рендерится слайдер
        this.slider_container = this.range.querySelector('.noui-slider')
        this.slider = null

        // Берем минимальное и максимальное из data аттрибутов
        this.min = parseInt(this.range.dataset.min)
        this.max = parseInt(this.range.dataset.max)

        // Берем начальное и конечное значение из data аттрибутов, если нет - берем начальное и конечное
        this.start = this.range.dataset.start ? parseInt(this.range.dataset.start) : this.min
        this.end = this.range.dataset.end ? parseInt(this.range.dataset.end) : this.max

        // Поля ввода которые будут связаны с слайдером
        this.input_from = this.range.querySelector('[data-from]')
        this.input_to = this.range.querySelector('[data-to]')

        // Хендлер который будет устанавливать значение в слайдер из инпутов
        this.set_value_to_slider_handler = this.setValueToSlider.bind(this)

        this.create()
    }

    create() {
        // Инициализируем слайдер
        this.slider = noUiSlider.create(this.slider_container, {
            // Начальные значения
            start: [
                this.start,
                this.end
            ],
            // Минимальное и максимальное значения
            range: {
                min: this.min,
                max: this.max
            },
            connect: true,
        });

        // Событие когда мы изменили значения в слайдере
        this.slider.on('update', (values, handle) => {
            // Устанавливаем минимальное и максимальное в инпуты
            switch (handle) {
                case 0:
                    this.input_from.value = parseInt(values[0])
                    this.min = parseInt(values[0])
                    break;
                case 1:
                    this.input_to.value = parseInt(values[1])
                    this.max = parseInt(values[1])
                    break;
            }
        });

        // Вешаем события на инпуты, при изменении будем устанавливать значение в слайдер
        this.input_from.addEventListener('change', this.set_value_to_slider_handler)
        this.input_to.addEventListener('change', this.set_value_to_slider_handler)
    }

    setValueToSlider() {
        this.slider.set([
            this.input_from.value,
            this.input_to.value
        ])
    }

    static init() {
        const ranges = document.querySelectorAll('[data-range]')

        if (ranges.length) {
            ranges.forEach(range => new Range(range))
        }
    }
}

Range.init()

