export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);
        if(this.block) {
            this.value = +this.block.querySelector('.value').value;
            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if(target.classList.contains('plus')) {
                    this.increaseValue();
                }
                if(target.classList.contains('minus')) {
                    this.decreaseValue();
                }
            });
        }
    };
    increaseValue() {
        +this.value++;
        this.updateValue(this.value);
    }
    decreaseValue() {
        if(+this.value > 1) {
            +this.value--;
            this.updateValue(this.value);
        }
    }
    updateValue(newValue) {
        this.block.querySelector('.value').value = newValue;
    }
}