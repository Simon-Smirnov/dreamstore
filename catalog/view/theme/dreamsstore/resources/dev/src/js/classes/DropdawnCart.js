export default class {

    constructor(selector) {
        this.block = document.querySelector(selector);
        if (this.block) {
            this.block.addEventListener('mouseover', (e) => {
                this.block.classList.add('open');
            })

            this.block.addEventListener('mouseleave', (e) => {
                this.block.classList.remove('open');
            })

            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if (target.hasAttribute('data-product-remove') || target.closest('[data-product-remove]')) {
                    const btn = target.closest('[data-product-remove]');
                    if (btn) {
                        this.cartId = btn.dataset.productRemove;
                        this.remove().then(r => {
                            console.log(r)
                        });
                    }
                }
                if (target.hasAttribute('data-change-minus') || target.closest('[data-change-minus]')) {
                    const btn = target.closest('[data-change-minus]');
                    if (btn) {
                        this.cartId = btn.dataset.productMinus;
                        console.log(this.cartId);
                        this.remove().then(r => {
                            console.log(r)
                        });
                    }
                }
                if (target.hasAttribute('data-change-plus') || target.closest('[data-change-plus]')) {
                    const btn = target.closest('[data-change-plus]');
                    if (btn) {
                        this.cartId = btn.dataset.changePlus;
                        this.quantity = +btn.dataset.changeQuantity;
                        this.quantity++;
                        this.update().then(r => {
                            console.log(r)
                        });
                    }
                }
            })
        }
    }

    async remove() {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            body.append('key', this.cartId)

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/remove', {
                method: 'POST',
                body: body
            })

            // Результат
            await result.json()
        })
    }

    async update() {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            //body.append(this.cartId, this.quantity)
            body.append(`quantity[${this.cartId}]`, this.quantity)

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/edit', {
                method: 'POST',
                body: body
            })

            // Результат
            await result.json()
        })
    }
}