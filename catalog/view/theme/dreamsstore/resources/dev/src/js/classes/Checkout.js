import CartAsyncMethods from "./CartAsyncMethods.js";
import Alert from "./Alert.js";

export default class {
    constructor(selector) {
        this.checkout = document.querySelector(selector);
        if (this.checkout) {
            this.checkout.addEventListener('change', (e) => {
                const body = new FormData
                if (e.target.hasAttribute('[data-payment-method-input]') || e.target.closest('[data-payment-method-input]')) {
                    body.append('payment_method', e.target.value)
                    this.updateViewCheckOut(body);
                }
                if (e.target.hasAttribute('[data-shipping-type-input]') || e.target.closest('[data-shipping-type-input]')) {
                    body.append('shipping_method', e.target.value)
                    this.updateViewCheckOut(body);
                }
                if (e.target.hasAttribute('[data-checkout-agree]') || e.target.closest('[data-checkout-agree]')) {
                    if (e.target.checked) {
                        body.append(e.target.dataset.checkoutAgree, '1');
                    } else {
                        body.append(e.target.dataset.checkoutAgree, '');
                    }
                    this.updateViewCheckOut(body);
                }
            });
            this.checkout.addEventListener('click', (e) => {
                const target = e.target;
                if (target.hasAttribute('[data-product-remove]') || target.closest('[data-product-remove]')) {
                    const btn = target.closest('[data-product-remove]');
                    if (btn) {
                        this.cartId = btn.dataset.productRemove;
                        CartAsyncMethods.remove(this.cartId).then(r => {
                            if (r.success) {
                                this.updateViewMiniCart();
                                Alert.add(r.success);
                                this.updateViewCheckOut();
                                CartAsyncMethods.getQuantityCart().then(r => {
                                    this.updateQuantityIconMiniCart(r.quantity);
                                })
                            }
                        });
                    }
                }
                if (target.hasAttribute('[data-checkout-confirm]') || target.closest('[data-checkout-confirm]')) {
                    const inputs = document.querySelectorAll('[data-checkout-input]');
                    const agree = document.querySelector('[data-checkout-agree]');
                    const body = new FormData;
                    inputs.forEach(input => {
                        body.append(input.dataset.checkoutInput, input.value);
                    });
                    if (agree.checked) {
                        body.append(agree.dataset.checkoutAgree, '1');
                    }
                    this.validate(body).then(data => {
                        if (data) {
                            let parser = new DOMParser();
                            let doc = parser.parseFromString(data, 'text/html');
                            let item = doc.querySelector('.checkout-inner');
                            let cartUl = document.querySelector('.checkout-content');
                            cartUl.innerHTML = '';  // Очистим текущие элементы
                            cartUl.appendChild(item);
                        } else {
                            fetch('index.php?route=checkout/confirm', {
                                method: 'POST',
                                body: body
                            })
                                .then(response => response.text())
                                .then(data => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(data, 'text/html');
                                    let item = doc.querySelector('.checkoutConfirm');
                                    let cartUl = document.querySelector('.checkout-content');
                                    cartUl.innerHTML = '';
                                    cartUl.appendChild(item);
                                })
                                .catch(error => console.error('Error:', error));
                        }
                    })
                    // console.log(r);
                    // if (!r) {
                    //     console.log(r);
                    //     let parser = new DOMParser();
                    //     let doc = parser.parseFromString(r, 'text/html');
                    //     let items = doc.querySelectorAll('.checkout-content');
                    //     let cartUl = document.querySelector('.checkout-inner');
                    // } else {
                    //
                    // }
                    // if (r.fail) {
                    //     this.updateViewCheckOut();
                    // } else {
                    //     console.log('next');
                    // }
                    // });
                }
                if (target.hasAttribute('[data-checkout-cart-consist-btn]') || target.closest('[data-checkout-cart-consist-btn]')) {
                    const target = e.target.closest('[data-checkout-cart-consist-btn]');
                    const parent = target.closest('[data-checkout-cart-consist]');
                    if (parent) {
                        parent.classList.toggle('active');
                    }
                }
            })
            this.checkout.addEventListener('focusout', (e) => {
                const target = e.target;
                if (target.hasAttribute('data-checkout-input')) {
                    const inputs = document.querySelectorAll('[data-checkout-input]');
                    const body = new FormData;
                    inputs.forEach(input => {
                        body.append(input.dataset.checkoutInput, input.value);
                    });
                    // body.append(target.dataset.checkoutInput, target.value);
                    this.updateViewCheckOut(body);
                }
            })
        }
    }

    async updateViewCheckOut(body) {
        fetch('index.php?route=checkout/checkout/info', {
            method: 'POST',
            body: body
        })
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');
                let items = doc.querySelectorAll('.checkout-content');
                let cartUl = document.querySelector('.checkout-inner');
                cartUl.innerHTML = '';  // Очистим текущие элементы
                items.forEach(item => {
                    cartUl.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    async updateViewMiniCart() {
        fetch('index.php?route=common/cart/info')
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');
                let items = doc.querySelectorAll('.miniCart-dropDawn__inner');
                let cartUl = document.querySelector('.miniCart-dropDawn');
                cartUl.innerHTML = '';  // Очистим текущие элементы
                items.forEach(item => {
                    cartUl.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    async validate(body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=checkout/checkout/validate', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }


    updateQuantityIconMiniCart(quantity) {
        document.querySelector('#cart-total').textContent = quantity;
    }
}