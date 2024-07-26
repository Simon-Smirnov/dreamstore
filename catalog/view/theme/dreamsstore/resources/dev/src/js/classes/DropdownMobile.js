import StaticFunctions from "./StaticFunctions.js";

export default class DropdownMobile {

    constructor(selector) {
        document.addEventListener('click', e => {
            const target = e.target;
            const width = window.innerWidth;
            if (width <= 600 && StaticFunctions.checkTarget(target, selector)) {
                const btnOpen = StaticFunctions.checkTarget(target, selector);
                const parent = btnOpen.closest('[data-dropdown-mobile]');
                if (parent) {
                    const modal = parent.querySelector('[data-dropdown-mobile-modal]');
                    if (modal) {
                        modal.classList.toggle('open');
                    }
                    const btnClose = parent.querySelector('[data-dropdown-mobile-close]');
                    if (btnClose) {
                        btnClose.addEventListener('click', () => {
                            modal.classList.remove('open');
                        })
                    }
                }
            }
        })
    }

    static init(selector) {
        new DropdownMobile(selector);
    }
}

DropdownMobile.init('data-dropdown-mobile-btn');