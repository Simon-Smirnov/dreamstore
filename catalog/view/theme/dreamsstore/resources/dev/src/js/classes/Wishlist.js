import Alert from "./Alert.js";
import Modal from "./Modal.js";
import Slider from "./Slider.js";
import Select from "./Select.js";
import Product from "./Product.js";

export default class {
    constructor(selectorAdd, selectorRemove) {
        this.content = document.querySelector('[data-wishlist-content]')
        this.productsToWishlist = document.querySelectorAll(selectorAdd);
        if (this.productsToWishlist.length > 0) {
            this.productsToWishlist.forEach(product => {
                product.addEventListener('click', (e) => {
                    e.preventDefault();
                    const productId = product.dataset.productWishlist;
                    const body = new FormData;
                    body.append('product_id', productId);
                    this.addToWishlist(body).then(r => {
                        if (r.success) {
                            Alert.add(r.success);
                            product.classList.add('inWishlist');
                            this.updateWishlistTotal();
                        }
                        if (r.warning) {
                            Alert.add(r.warning, 'notify');
                        }
                    })
                });
            });
        }
        this.wishlist = document.querySelector(selectorRemove);
        if (this.wishlist) {
            this.wishlist.addEventListener('click', (e) => {
                e.preventDefault();
                const target = e.target;
                if (target.closest(['[data-wishlist-remove]']) || target.hasAttribute('[data-wishlist-remove]')) {
                    const productId = target.closest('[data-wishlist-remove]').dataset.wishlistRemove;
                    const body = new FormData;
                    body.append('product_id', productId);
                    this.removeFromWishlist(body).then(data => {
                        if (data) {
                            let parser = new DOMParser();
                            let doc = parser.parseFromString(data, 'text/html');
                            let items = doc.querySelectorAll('.products_grid-item');
                            let cartUl = document.querySelector('[data-wishlist]');
                            cartUl.innerHTML = '';  // Очистим текущие элементы
                            items.forEach(item => {
                                cartUl.appendChild(item);
                            });
                            this.updateWishlistTotal();
                            Alert.add('Товар успешно удален из избранного');
                        }
                    })
                }
                if ((target.closest(['[data-wishlist-quick]']) || target.hasAttribute('[data-wishlist-quick]')) && !(target.closest(['[data-wishlist-remove]']) || target.hasAttribute('[data-wishlist-remove]'))) {
                    const productId = target.closest('[data-wishlist-quick]').dataset.wishlistQuick;
                    const body = new FormData;
                    body.append('product_id', productId);
                    this.getProduct(body).then(data => {
                        if (data) {
                            this.content.innerHTML = data;
                        }
                        Modal.openTarget('wishlist-quick');
                        Slider.init()
                        Select.init();
                        // new Product('[data-products-to-cart]');
                    })
                }
            });
        }
    }

    updateWishlistTotal() {
        this.getTotalWishlist().then(data => {
            if (data.total) {
                if (document.querySelectorAll('[data-wishlist-total]').length > 0) {
                    document.querySelectorAll('[data-wishlist-total]').forEach(el => el.textContent = data.total);
                }
            }
        })
    }

    async getTotalWishlist() {
        return new Promise(async resolve => {

            // Запрос
            let result = await fetch('/index.php?route=account/wishlist/getTotalWishlist', {
                method: 'POST',
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    async addToWishlist(body) {
        return new Promise(async resolve => {

            // Запрос
            let result = await fetch('/index.php?route=account/wishlist/add', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    async removeFromWishlist(body) {
        return new Promise(async resolve => {

            // Запрос
            let result = await fetch('/index.php?route=account/wishlist/delete', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }

    async getProduct(body) {
        return new Promise(async resolve => {

            // Запрос
            let result = await fetch('/index.php?route=product/product/quickView', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }
}