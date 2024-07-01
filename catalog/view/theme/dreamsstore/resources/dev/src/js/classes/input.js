export default class Input {
    constructor(parent) {
        this.delay_timeout = 1000 //ms
        this.error_time = 3000 //ms

        this.parent = parent
        this.input = this.parent.querySelector('input, textarea')

        if (this.input && this.input.dataset.delayedInput) {
            this.timer = null

            this.delayed_input_handler = this.delayedInput.bind(this)
            this.input.addEventListener('input', this.delayed_input_handler)
        }
    }

    delayedInput() {
        if (this.timer) {
            clearTimeout(this.timer)
        }

        this.timer = setTimeout(() => {
            this.input.dispatchEvent(new Event('delayed_input'))
        }, this.delay_timeout)
    }

    static addError(input) {
        input.classList.add('input-error')

        setTimeout(() => {
            input.classList.remove('input-error')
        }, 3000)
    }

    static init() {
        const inputs = document.querySelectorAll('.input-text')

        if (inputs.length) {
            inputs.forEach(input => new Input(input))
        }
    }
}

Input.init()