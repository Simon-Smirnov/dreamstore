import StaticFunctions from "./StaticFunctions.js";

export default class Toggler {

    constructor(selector) {
        document.addEventListener('click', e => {
            const target = e.target;
            if (StaticFunctions.checkTarget(target, selector)) {
                const item = StaticFunctions.checkTarget(target, selector);
                const parent = item.closest('[data-toggler-parent]');
                if (parent) {
                    parent.classList.toggle('open');
                }
            }
        })
    }

    static init(selector) {
        new Toggler(selector);
    }
}

Toggler.init('data-toggler');