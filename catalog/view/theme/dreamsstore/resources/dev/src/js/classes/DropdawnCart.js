import Alert from './Alert.js'
import CartAsyncMethods from './CartAsyncMethods.js'

export default class {

    constructor(selector, checkoutCart = false) {
        this.block = document.querySelector(selector);
        this.checkoutCart = checkoutCart;
        if (this.block) {
            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if (target.hasAttribute('data-dropdown-cart-btn') || target.closest('[data-dropdown-cart-btn]')) {
                    this.block.classList.toggle('open');
                }
                if (target.hasAttribute('data-product-remove') || target.closest('[data-product-remove]')) {
                    const btn = target.closest('[data-product-remove]');
                    if (btn) {
                        this.cartId = btn.dataset.productRemove;
                        CartAsyncMethods.remove(this.cartId, this.quantity).then(r => {
                            console.log(r);
                            if (r.success) {
                                this.updateViewMiniCart();
                                Alert.add(r.success);
                                if (this.checkoutCart) {
                                    this.updateViewCheckoutCart();
                                }
                                CartAsyncMethods.getQuantityCart().then(r => {
                                    this.updateQuantityIconMiniCart(r.quantity);
                                })
                            }
                        });
                    }
                }
                if (target.hasAttribute('data-change-minus') || target.closest('[data-change-minus]')) {
                    const btn = target.closest('[data-change-minus]');
                    if (btn) {
                        this.cartId = btn.dataset.changeMinus;
                        this.quantity = +btn.dataset.changeQuantity;
                        if (this.quantity > 1) {
                            this.quantity--;
                            CartAsyncMethods.update(this.cartId, this.quantity).then(r => {
                                if (r.success) {
                                    this.updateViewMiniCart();
                                    Alert.add(r.success);
                                    if (this.checkoutCart) {
                                        this.updateViewCheckoutCart();
                                    }
                                    CartAsyncMethods.getQuantityCart().then(r => {
                                        this.updateQuantityIconMiniCart(r.quantity);
                                    })
                                }
                            });
                        }
                    }
                }
                if (target.hasAttribute('data-change-plus') || target.closest('[data-change-plus]')) {
                    const btn = target.closest('[data-change-plus]');
                    if (btn) {
                        this.cartId = btn.dataset.changePlus;
                        this.quantity = +btn.dataset.changeQuantity;
                        this.quantity++;
                        CartAsyncMethods.update(this.cartId, this.quantity).then(r => {
                            if (r.success) {
                                this.updateViewMiniCart();
                                Alert.add(r.success);
                                if (this.checkoutCart) {
                                    this.updateViewCheckoutCart();
                                }
                                CartAsyncMethods.getQuantityCart().then(r => {
                                    this.updateQuantityIconMiniCart(r.quantity);
                                })
                            }
                        });
                    }
                }
            })
            document.addEventListener('click', (e) => {
                const target = e.target;
                if (!this.block.contains(target) && this.block.classList.contains('open')) {
                    this.block.classList.remove('open');
                }
            });
        }
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

    async updateViewCheckoutCart() {
        fetch('index.php?route=checkout/cart/info')
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');
                let items = doc.querySelectorAll('.cart-inner');
                let cartUl = document.querySelector('.cart');
                cartUl.innerHTML = '';  // Очистим текущие элементы
                items.forEach(item => {
                    cartUl.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    updateQuantityIconMiniCart(quantity) {
        // document.querySelector('#cart-total').textContent = quantity;
        document.querySelectorAll('[data-mini-cart-total]').forEach(el => el.textContent = r.quantity);
    }
}

