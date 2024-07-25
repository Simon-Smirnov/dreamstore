import StaticFunctions from "./StaticFunctions.js";

export default class SelectMobile {

    constructor(selector) {
        document.addEventListener('click', e => {
            const target = e.target;
            if (StaticFunctions.checkTarget(target, selector)) {
                const item = StaticFunctions.checkTarget(target, selector);
                const parent = item.closest('[select-mobile-base]');
                if (parent) {
                    const input = parent.querySelector('[select-mobile-input]');
                    if (input) {
                        input.value = item.dataset.value;
                        let event = new Event('change', {bubbles: true, cancelable: false});
                        if (item.dataset.price && input.dataset.optionInputPrice) {
                            input.dataset.optionInputPrice = item.dataset.price;
                        }
                        input.dispatchEvent(event);
                    }
                    const button = parent.querySelector('[select-mobile-button]');
                    if (button) {
                        button.textContent = item.textContent;
                    }
                    const modal = parent.querySelector('[data-dropdown-mobile-modal]');
                    if (modal) {
                        modal.classList.remove('open');
                    }
                }
            }
        })
    }

    static init(selector) {
        new SelectMobile(selector);
    }
}

SelectMobile.init('select-mobile-item');