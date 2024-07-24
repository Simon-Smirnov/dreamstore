import StaticFunctions from './StaticFunctions.js';

export default class ProductsLayout {

    constructor(selector) {
        this.view = document.querySelector(selector);
        if (this.view) {
            document.addEventListener('click', e => {
                const target = e.target;
                const btnSelector = 'data-category-view-choose';
                if (StaticFunctions.checkTarget(target, btnSelector)) {
                    const btn = StaticFunctions.checkTarget(target, btnSelector);
                    const type = btn.dataset.categoryViewChoose;
                    if (type === 'line') {
                        if (!this.view.classList.contains('line')) {
                            this.removeMultipleClassActive(btnSelector);
                            this.view.classList.add('line');
                            btn.classList.add('active');
                        }
                    } else if (type === 'grid') {
                        if (this.view.classList.contains('line')) {
                            this.removeMultipleClassActive(btnSelector);
                            this.view.classList.remove('line');
                            btn.classList.add('active');
                        }
                    }
                }
            })
        }
    }

    removeMultipleClassActive(selector) {
        const btns = document.querySelectorAll('[' + selector + ']');
        btns.forEach(btn => {
            btn.classList.remove('active');
        })
    }

    static init(selector) {
        new ProductsLayout(selector);
    }
}

ProductsLayout.init('[data-category-view]');